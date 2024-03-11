<?php

namespace App\Http\Controllers;

use App\Models\institution;
use Illuminate\Http\Request;
Use Carbon\Carbon;

class InstitutionDashboard extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    
        $company_name = $request->input('company_name'); // TODO: Verificar porque cambiar id_institution a  hace que no se renderice el dato
        $address = $request->input('address');
        $country = $request->input('country');
        $search_date = $request->input('search_date');
        $institutions = institution::when($company_name, function($query, $company_name){
            return $query->where('company_name', $company_name);
        })->when($address, function($query, $address){
            return $query->where('address', 'like', '%' . $address . '%');
        })->when($country, function($query, $country){
            return $query->where('country', 'like', '%' . $country . '%');
        })->when($search_date, function($query, $search_date){
            return $query->whereDate('created_at', Carbon::parse($search_date));
        })->orderByDesc('created_at')->paginate(20); // Adjust the number per page as needed
        return view('SettingInstitution.allinstitutions', compact('institutions'));

    }
}
