<?php

namespace App\Http\Livewire;

use Livewire\Component;

class principal extends Component
{
    public function render()
    {
        return view('livewire.principal');
    }
    public function imprimir()
    {
        $this->emit('print_on', [0, 'ticket_qr', null]);
    }
}
