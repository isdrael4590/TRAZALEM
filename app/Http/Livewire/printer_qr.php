<?php

namespace App\Http\Livewire;

use App\Models\user;
use Livewire\Component;
use Livewire\Livewire;

class Printer_qr extends Component
{
    public $id_recibido, $tipo, $data, $datos;

    public function mount($id, $data, $tipo)
    {
        $this->id_recibido = $id;
        $this->data = $data;
        $this->tipo = $tipo;
    }
    public function render()
    {
        if ($this->id_recibido == 0 && $this->tipo = 'tickt_qr') {
            $this->datos = User::get();
        } else {
            $this->datos = user::find($this->id_recibido);
        }


        return view('livewire.printer_qr')->extends('zneManagement.allgeneratelabel');
    }
}
