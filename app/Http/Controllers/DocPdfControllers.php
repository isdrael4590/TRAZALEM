<?php

namespace App\Http\Controllers;
use App\Models\coderumed;
use App\Models\temporal_rumed;
use Illuminate\Http\Request;
use App\Models\testbowie;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DocPdfControllers extends Controller
{
    public function index(){
        return view('formatos_pdf.bd_pdf');
    }
}
