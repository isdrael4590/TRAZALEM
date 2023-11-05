<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\coderumed;

class coderumedController extends Controller
{
    // public function __construct(){
    // 	$this->middleware('auth');
    // }

    public function store(Request $request){
    	
    	$data=new coderumed();
        $data->product_code=$request->code;
    	$data->name= $request->name;
        $data->category = $request->category;
        $data->area = $request->area;
        $data->detalls = $request->detalls;
    	//$data->unit_price = $request->unit_price;
    	// $data->total_price = $request->stock * $request->unit_price;
        //$data->sales_unit_price = $request->sale_price;
        // $data->sales_stock_price =$request->stock * $request->sale_price;


        $data->save();
        return Redirect()->route('add.coderumed');
    }

    public function allcoderumed(){
    	$coderumed = coderumed::all();
    	return view('Admin.all_coderumed',compact('coderumed'));
    }

    public function availablecoderumed(){
        $coderumed = coderumed::where('stock','>','0')->get();
        return view('Admin.available_coderumed',compact('coderumed'));
    }

    public function formData($id){
        $coderumed = coderumed::find($id);
        
        return view('Admin.add_order',compact('coderumed'));
        // return view('Admin.add_order',['product'=>$product]);
    }

    public function purchaseData($id){
        $coderumed = coderumed::find($id);
        
        return view('Admin.purchase_products',compact('coderumed'));
    }

    public function storePurchase(Request $request){

        coderumed::where('name',$request->name)->update(['stock' => $request->stock + $request->purchase]);
        
        return Redirect()->route('all.product');
    }
    

}