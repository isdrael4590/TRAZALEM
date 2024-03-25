<?php

namespace App\Http\Controllers\generator;

use App\Enums\generatorStatus;
use App\Models\coderumed;

use App\Models\generator;
use App\Models\generatorDetails;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\generator\StoregeneratorRequest;
use App\Models\machine;
use Illuminate\Support\Facades\Request;
use Str;

class generatorController extends Controller
{
    public function index()
    {
        $generators = generator::where("user_id",auth()->id())->count();

        return view('zneManagement.generators.index', [
            'generators' => $generators
        ]);
    }

    public function create()
    {
        Cart::instance('generator')->destroy();

        return view('zneManagement.generators.create', [
            'cart' => Cart::content('generator'),
            'coderumeds' => coderumed::where("user_id",auth()->id())->get(),
            'machines' => machine::where("user_id",auth()->id())->get(),

            // maybe?
            //'statuses' => generatorStatus::cases()
        ]);
    }

    public function store(StoregeneratorRequest $request)
    {
        if (count(Cart::instance('generator')->content()) === 0) {
            return redirect()->back()->with('message', 'Por favor buscar y seleccionar el paquete rumed!');
        }
        DB::transaction(function () use ($request) {
            $generator = generator::create([
                'date' => $request->date,
                'reference' => $request->reference,
            
                'status' => $request->status,
                'note' => $request->note,
                "uuid" => Str::uuid(),
                "user_id" => auth()->id(),

            ]);

            foreach (Cart::instance('generator')->content() as $cart_item) {
                generatorDetails::create([
                    'generator_id' => $generator->id,
                    'coderumed_id' => $cart_item->id,

                    'code_coderumed' => $cart_item->code_coderumed,
                    'name_coderumed' => $cart_item->options->code_coderumed,
                    
                ]);
            
            }

            Cart::instance('generator')->destroy();
        });

        return redirect()
            ->route('generators.index')
            ->with('success', 'generator Created!');
    }

    public function show($uuid)
    {
        $generator = generator::where("user_id",auth()->id())->where('uuid', $uuid)->firstOrFail();

        return view('generators.show', [
            'generator' => $generator,
            'generator_details' => generatorDetails::where('generator_id', $generator->id)->get()
        ]);
    }

    public function destroy(generator $generator)
    {
        $generator->update([
            "status" => 2
        ]);
        $generators = generator::where("user_id",auth()->id())->count();

        return redirect()
            ->route('generators.index', [
                'generators' => $generators
            ]);
    }

    // complete quotaion method
    public function update(Request $request,$uuid)
    {
        $generator = generator::where("user_id",auth()->id())->where('uuid', $uuid)->firstOrFail();
       
        // Reduce the stock
        $quotecoderumeds = $generator->generatorDetails;
        
     
        $generator->save();

        return redirect()
            ->route('generators.index')
            ->with('success', 'generator Completed!');
    }
}