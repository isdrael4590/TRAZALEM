<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\department;
use App\Models\User;

class EmployeeController extends Controller
{
    /** all employee card view */
    public function cardAllEmployee(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees','users.user_id','employees.employee_id')
                    ->select('users.*','employees.birth_date', 'employees.gender','employees.company')
                    ->get(); 
        $userList = DB::table('users')->get();
        return view('employees.allemployeecard',compact('users','userList'));
    }

    /** all employee list */
    public function listAllEmployee()
    {
        $users = DB::table('users')
                    ->join('employees','users.user_id', 'employees.employee_id')
                    ->select('users.*','employees.birth_date','employees.gender','employees.company')
                    ->get();
        $userList = DB::table('users')->get();
        return view('employees.employeelist',compact('users','userList'));
    }

    /** save data employee */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email',
            'birthDate'   => 'required|string|max:255',
            'gender'      => 'required|string|max:255',
            'employee_id' => 'required|string|max:255',
            'company'     => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try{

            $employees = Employee::where('email', '=',$request->email)->first();
            if ($employees === null)
            {

                $employee = new Employee;
                $employee->name         = $request->name;
                $employee->email        = $request->email;
                $employee->birth_date   = $request->birthDate;
                $employee->gender       = $request->gender;
                $employee->employee_id  = $request->employee_id;
                $employee->company      = $request->company;
                $employee->save();
    
               
                
                DB::commit();
                Toastr::success('Add new employee successfully :)','Success');
                return redirect()->route('all/employee/card');
            } else {
                DB::rollback();
                Toastr::error('Add new employee exits :)','Error');
                return redirect()->back();
            }
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new employee fail :)','Error');
            return redirect()->back();
        }
    }
    
    /** view edit record */
    public function viewRecord($employee_id)
    {
        $permission = DB::table('employees')
            ->join('module_permissions','employees.employee_id','module_permissions.employee_id')
            ->select('employees.*')->where('employees.employee_id',$employee_id)->get();
        $employees = DB::table('employees')->where('employee_id',$employee_id)->get();
        return view('employees.edit.editemployee',compact('employees','permission'));
    }

    /** update record employee */
    public function updateRecord( Request $request)
    {
        DB::beginTransaction();
        try {

            // update table Employee
            $updateEmployee = [
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'birth_date'=>$request->birth_date,
                'gender'=>$request->gender,
                'employee_id'=>$request->employee_id,
                'company'=>$request->company,
            ];

            // update table user
            $updateUser = [
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
            ];

           

            User::where('id',$request->id)->update($updateUser);
            Employee::where('id',$request->id)->update($updateEmployee);
        
            DB::commit();
            Toastr::success('updated record successfully :)','Success');
            return redirect()->route('all/employee/card');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('updated record fail :)','Error');
            return redirect()->back();
        }
    }



    /** employee search */
    public function employeeSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees','users.user_id','employees.employee_id')
                    ->select('users.*','employees.birth_date','employees.gender','employees.company')->get();
        $userList = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')->get();
        }
        // search by name
        if($request->name)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')->get();
        }
        // search by name
        if($request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }

        // search by name and id
        if($request->employee_id && $request->name)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by position and id
        if($request->employee_id && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }
        // search by name and position
        if($request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }
        // search by name and position and id
        if($request->employee_id && $request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }
        return view('employees.allemployeecard',compact('users','userList'));
    }

    /** list search employee */
    public function employeeListSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees','users.user_id','employees.employee_id')
                    ->select('users.*','employees.birth_date','employees.gender','employees.company')->get(); 
        $userList         = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')->get();
        }
        // search by name
        if($request->name)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')->get();
        }
        // search by name
        if($request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }

        // search by name and id
        if($request->employee_id && $request->name)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')->get();
        }
        // search by position and id
        if($request->employee_id && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }
        // search by name and position
        if($request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }
        // search by name and position and id
        if($request->employee_id && $request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees','users.user_id','employees.employee_id')
                        ->select('users.*','employees.birth_date','employees.gender','employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')->get();
        }
        return view('employees.employeelist',compact('users','userList'));
    }

    /** employee profile with all controller user */
    public function profileEmployee($user_id)
    {
        $user = DB::table('users') 
                ->leftJoin('personal_information as pi','pi.user_id','users.user_id')
                ->leftJoin('profile_information as pr','pr.user_id','users.user_id')
                ->leftJoin('user_emergency_contacts as ue','ue.user_id','users.user_id')
                ->select('users.*','pi.passport_no','pi.passport_expiry_date','pi.tel',
                'pr.gender','pr.address','pr.country','pr.state','pr.pin_code',
                'pr.phone_number','pr.department','pr.designation','pr.reports_to',
                'ue.name_primary','ue.relationship_primary','ue.phone_primary','ue.phone_2_primary',
                'ue.name_secondary','ue.relationship_secondary','ue.phone_secondary','ue.phone_2_secondary')
                ->where('users.user_id',$user_id)->get();
        $users = DB::table('users')
                ->leftJoin('personal_information as pi','pi.user_id','users.user_id')
                ->leftJoin('profile_information as pr','pr.user_id','users.user_id')
                ->leftJoin('user_emergency_contacts as ue','ue.user_id','users.user_id')
                ->select('users.*','pi.passport_no','pi.passport_expiry_date','pi.tel',
                'pr.birth_date','pr.gender','pr.address','pr.country','pr.state','pr.pin_code',
                'pr.phone_number','pr.department','pr.designation','pr.reports_to',
                'ue.name_primary','ue.relationship_primary','ue.phone_primary','ue.phone_2_primary',
                'ue.name_secondary','ue.relationship_secondary','ue.phone_secondary','ue.phone_2_secondary')
                ->where('users.user_id',$user_id)->first();

        return view('employees.employeeprofile',compact('user','users'));
    }

    /** page departments */
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('employees.departments',compact('departments'));
    }

    /** save record department */
    public function saveRecordDepartment(Request $request)
    {
        $request->validate([
            'department' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $department = department::where('department',$request->department)->first();
            if ($department === null)
            {
                $department = new department;
                $department->department = $request->department;
                $department->save();
    
                DB::commit();
                Toastr::success('Add new department successfully :)','Success');
                return redirect()->back();
            } else {
                DB::rollback();
                Toastr::error('Add new department exits :)','Error');
                return redirect()->back();
            }
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add new department fail :)','Error');
            return redirect()->back();
        }
    }

    /** update record department */
    public function updateRecordDepartment(Request $request)
    {
        DB::beginTransaction();
        try {
            // update table departments
            $department = [
                'id'=>$request->id,
                'department'=>$request->department,
            ];
            department::where('id',$request->id)->update($department);
        
            DB::commit();
            Toastr::success('updated record successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('updated record fail :)','Error');
            return redirect()->back();
        }
    }

    /** delete record department */
    public function deleteRecordDepartment(Request $request) 
    {
        try {
            department::destroy($request->id);
            Toastr::success('Department deleted successfully :)','Success');
            return redirect()->back();
        
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Department delete fail :)','Error');
            return redirect()->back();
        }
    }

    /** page designations */
    public function designationsIndex()
    {
        return view('employees.designations');
    }

    /** page time sheet */
    public function timeSheetIndex()
    {
        return view('employees.timesheet');
    }

    /** page overtime */
    public function overTimeIndex()
    {
        return view('employees.overtime');
    }

}
