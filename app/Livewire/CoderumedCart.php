<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\coderumed;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CoderumedCart extends Component
{
    public $listeners = ['SelectCoderumed'];

    public $cart_instance;
    public $package_wrap;
    public $check_package_wrap;
    public $data;

    private $coderumed;

    public function mount($cartInstance, $data = null): void
    {
        $this->cart_instance = $cartInstance;

        if ($data) {
            $this->data = $data;
            $cart_items = Cart::instance($this->cart_instance)->content();

            foreach ($cart_items as $cart_item) {
                $this->check_package_wrap[$cart_item->id] = [$cart_item->options->stock];
                $this->package_wrap[$cart_item->id] = $cart_item->qty;
            }
        } else {

            $this->check_package_wrap = [];
            $this->package_wrap = [];
        }
    }

    public function render()
    {
        $cart_items = Cart::instance($this->cart_instance)->content();

        return view('livewire.coderumed-cart', [
            'cart_items' => $cart_items
        ]);
    }

    public function SelectCoderumed($coderumed): void
    {
        $cart = Cart::instance($this->cart_instance);

        $exists = $cart->search(function ($cartItem, $rowId) use ($coderumed) {
            return $cartItem->id == $coderumed['id'];
        });

        if ($exists->isNotEmpty()) {
            session()->flash('message', 'coderumed exists in the cart!');

            return;
        }

        $this->coderumed = $coderumed;

        $cart->add([
            'id'      => $coderumed['id'],
            'name_coderumed'    => $coderumed['name_coderumed'],
            'code_coderumed'    => $coderumed['code_coderumed'],
            'package_wrap'      => $coderumed['package_wrap'],




        ]);

        $this->check_package_wrap[$coderumed['id']] = $coderumed['package_wrap'];
        $this->package_wrap[$coderumed['id']] = 1;
    }

    public function removeItem($row_id): void
    {
        Cart::instance($this->cart_instance)->remove($row_id);
    }




    public function updateCartOptions($row_id, $coderumed_id, $cart_item, $code_coderumed): void
    {
        Cart::instance($this->cart_instance)->update($row_id, ['options' => [
            'code_coderumed'                  => $cart_item->options->code_coderumed,
            'package_wrap'                 => $cart_item->options->package_wrap,

        ]]);
    }
}
