<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }

    /** index login page */
    public function login()
    {
        return view('auth.login');
    }

    /** login page to check database table users */
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8',
        ]);

        $todayDate  = Carbon::now()->toDayDateTimeString();
        if(auth()->attempt($validated))
        {
            /** get session */
            $user = Auth::User();
            Session::put('name', $user->name);
            Session::put('email', $user->email);
            Session::put('user_id', $user->user_id);
            Session::put('join_date', $user->join_date);
            Session::put('phone_number', $user->phone_number);
            Session::put('status', $user->status);
            Session::put('role_name', $user->role_name);
            Session::put('avatar', $user->avatar);
            Session::put('position', $user->position);
            Session::put('department', $user->department);

            $activityLog = ['name'=> Session::get('name'),'email'=> $request->email,'description' => 'Has log in','date_time'=> $todayDate,];
            DB::table('activity_logs')->insert($activityLog);

            Toastr::success('Acceso exitoso','Éxito');
            request()->session()->regenerate();
            redirect()->intended('home');

        }
        else{
            Toastr::error('Nombre de usuario o contraseña no encontrados, intente de nuevo por favor','Error');
            return redirect('login');
        }

    }

    /** logout and forget session */
    public function logout(Request $request)
    {
        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        $activityLog = ['name'=> Session::get('name'),'email'=> Session::get('email'),'description' => 'Has log out','date_time'=> $todayDate,];
        DB::table('activity_logs')->insert($activityLog);
        // forget login session
        $request->session()->forget('name');
        $request->session()->forget('email');
        $request->session()->forget('user_id');
        $request->session()->forget('join_date');
        $request->session()->forget('phone_number');
        $request->session()->forget('status');
        $request->session()->forget('role_name');
        $request->session()->forget('avatar');
        $request->session()->forget('position');
        $request->session()->forget('department');
        $request->session()->flush();
        Auth::logout();
        Toastr::success('Logout successfully :)','Success');
        return redirect('login');
    }

}
