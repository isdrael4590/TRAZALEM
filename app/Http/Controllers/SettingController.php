<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\CompanySettings;
use App\Models\RolesPermissions;
use Brian2694\Toastr\Facades\Toastr;
class SettingController extends Controller
{
    /** company/settings/page */
    public function companySettings()
    {
        $companySettings = CompanySettings::where('id',1)->first();
        return view('settings.companysettings',compact('companySettings'));
    }

    /** save record company settings */
    public function saveRecord(Request $request)
    {
        /** validate form */
        $request->validate([
            'company_name'   =>'required',
            'contact_person' =>'required',
            'address'        =>'required',
            'country'        =>'required',
            'city'           =>'required',
            'state_province' =>'required',
            'postal_code'    =>'required',
            'email'          =>'required',
            'phone_number'   =>'required',
            'mobile_number'  =>'required',
      
        ]);

        try {
            
            /** save or update to databases CompanySettings table */
            $saveRecord = CompanySettings::updateOrCreate(['id' => $request->id]);
            $saveRecord->company_name   = $request->company_name;
            $saveRecord->contact_person = $request->contact_person;
            $saveRecord->address        = $request->address;
            $saveRecord->country        = $request->country;
            $saveRecord->city           = $request->city;
            $saveRecord->state_province = $request->state_province;
            $saveRecord->postal_code    = $request->postal_code;
            $saveRecord->email          = $request->email;
            $saveRecord->phone_number   = $request->phone_number;
            $saveRecord->mobile_number  = $request->mobile_number;
      
            $saveRecord->save();
            
            DB::commit();
            Toastr::success('Guardado con Exito Informacion Compania :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Fallo Guardar la informaciòn compania :)','Error');
            return redirect()->back();
        }
    }


   

 

   
}
