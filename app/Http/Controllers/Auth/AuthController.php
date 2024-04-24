<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Countries;
use App\Models\States;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginForm(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 2])) {

            if (Session::has('url')) {
                return redirect(Session::get('url'));
            } else {
                return redirect()->route('home');
            }

            return redirect()->route('');
        } if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1])) {
                return redirect()->route('admin.home');
        } else {
            return redirect()->route('web.login.page')->with('error', 'Credentials not matched.');
        }
    }

    public function registerForm(Request $request)
    {

       
       $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'g-recaptcha-response' => 'required'
        ], [
            'c_password.required' => 'The confirm password field is required.',
            'c_password.same' => 'The confirm password field must match password.',
        ]);
        
        if ($validator->fails()) {
            // Oops.. something went wrong
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->parent_first_name = $request->p_first_name;
        $user->parent_last_name = $request->p_last_name;
        $user->phone_number_alternative = $request->phone_number_secondary;
        $user->email_alternative = $request->email_secondary;
        $user->password = $request->password;
        $user->role = 2;
        $user->grade = $request->grade;
        $user->course_name = $request->course_name;
        $user->school_name = $request->school_name;
        $user->country_id  = $request->country;
        $user->state_id = $request->state;
        $user->city = $request->city;

        if ($user->save()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 2])) {
                return redirect()->route('home');
            }
        }
    }

    public function register_page()
    {
        $countries = Countries::get();
        $states = States::get();
        $cities = Cities::get();

        return view('web.pages.apply-now', compact('countries', 'states', 'cities'));
    }

    public function login_page()
    {
        return view('web.pages.login');
    }
    public function getStates(Request $request)
    {

        $data = States::where('country_id', $request->countryId)->get();
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('web.login.page');
    }
}
