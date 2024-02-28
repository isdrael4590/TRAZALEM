<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\institution;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Symfony\Contracts\Service\Attribute\Required;

class InstitutionController extends Controller
{
    //
    public function show(string $company_name)
    {
        $institution = institution::where('company_name', $company_name)->first();
        return view('SettingInstitution.uniquesinstitution', compact('institution'));
 
    }
    
    /** save new equipo */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_area' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state_province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:255',

        ]);

        $validated['user_id'] = auth()->id();
        $institution = institution::create($validated);

        Toastr::success('institucion Registrado exitosamente', 'Éxito');
        return redirect()->back();
    }


    public function edit(institution $institution)
    {
        return view('SettingInstitution.institutions-edit', compact('institution'));
    }


    public function update(Request $request, institution $institution)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_area' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state_province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:255',
        ]);
        $institution->update($validated);


        Toastr::success('institution actualizado', 'Satisfactorio');
        return redirect()->route('SettingInstitution/institution');
    }
    public function destroy(institution $institution)
    {
        $institution->delete();
        Toastr::success($institution->company_name . ' borrado exitosamente', 'Éxito');
        return redirect()->route('SettingInstitution/institution');
    }
}
