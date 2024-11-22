<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Str;

class MemberController extends Controller
{
    //member_login
    function member_login(){
        return view('frontend.loginreg.login');
    }

    public function member_login_post(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('customer')->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect('/');
            // return redirect()->route('member.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function member_logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
    }
    //member_registration
    function member_registration(){
        return view('frontend.loginreg.registration');
    }

    //member_register
    function member_register(Request $request){
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'profile_created_by'=>'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['username'] = Str::random(4).rand(10000,99999);
        $validatedData['password_temp'] = $request->password;
        $validatedData['password'] = Hash::make($request->password);

        $customer = Customer::create($validatedData);

        Auth::guard('customer')->login($customer);

        if($customer){
            session(['customer_id' => $customer->id]);
            return redirect()->route('member.basic.info');
        }
        else{
            
            return back()->with('error', 'Failed to create.');
        }
    }

}
