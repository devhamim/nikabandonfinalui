<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer');
    }
    //member_dashboard
    function profile_update(){
        $customer = Auth::guard('customer')->user();
        return view('frontend.memberdashboard.profileupdate',[
            'customer'=>$customer,
        ]);
    }

    // profile_update_store
    function profile_update_store(Request $request){
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'nullable',
            'profile_created_by' => 'nullable',
            'gender' => 'nullable',
            'number' => 'nullable',
            'candidate_name' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'marital_status' => 'nullable',
            'no_of_chlidren' => 'nullable',
            'religon' => 'nullable|string',
            'nationality' => 'nullable|string|max:255',
            'highest_qualification' => 'nullable',
            'education_details' => 'nullable',
            'working_sector' => 'nullable',
            'profession' => 'nullable',
            'profession_details' => 'nullable',
            'monthly_income' => 'nullable',
            'keep_it_private' => 'nullable',
            'father_status' => 'nullable',
            'father_occupation' => 'nullable',
            'mother_status' => 'nullable',
            'mother_occupation' => 'nullable',
            'guardian_mobile' => 'nullable',
            'bro_not_married' => 'nullable',
            'bro_married' => 'nullable',
            'sis_not_married' => 'nullable',
            'sis_married' => 'nullable',
            'home_division' => 'nullable',
            'currently_living_in' => 'nullable',
            'city_living_in' => 'nullable',
            'family_details' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'body_type' => 'nullable',
            'complexion' => 'nullable',
            'blood_group' => 'nullable',
            'physical_attibute_details' => 'nullable',
            'religious_value' => 'nullable',
            'family_values' => 'nullable',
            'diet' => 'nullable',
            'smoke' => 'nullable',
            'write_about_yourself' => 'nullable',
        ]);
    
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return back()->with('success', 'Profile completed successfully!');
    }
}
