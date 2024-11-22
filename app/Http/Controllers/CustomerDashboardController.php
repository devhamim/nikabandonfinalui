<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class CustomerDashboardController extends Controller
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
    //member_basic_info
    function member_basic_info(){
        return view('frontend.loginreg.basicinfo');
    }

    //member_basic_info_store
    function member_basic_info_store(Request $request){
        $validatedData = $request->validate([
            'gender' => 'required',
            'number' => 'required',
            'candidate_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'marital_status' => 'required',
            'no_of_chlidren' => 'nullable',
            'religon' => 'required|string',
            'nationality' => 'required|string|max:255',
        ]);
    
        // Update customers profile
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.education.career')->with('success', 'Profile completed successfully!');
    }

     //member_education_career
     function member_education_career(){
        return view('frontend.loginreg.educationcareer');
    }

    //education_career_store
    function education_career_store(Request $request){
        $validatedData = $request->validate([
            'highest_qualification' => 'required',
            'education_details' => 'nullable',
            'working_sector' => 'required',
            'profession' => 'required',
            'profession_details' => 'nullable',
            'monthly_income' => 'nullable',
            'keep_it_private' => 'nullable',
        ]);
    
        // Update customers profile
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.family.location')->with('success', 'Profile completed successfully!');
    }

     //member_family_location
     function member_family_location(){
        return view('frontend.loginreg.familylocation');
    }

     //family_location_store
     function family_location_store(Request $request){
        $validatedData = $request->validate([
            'father_status' => 'required',
            'father_occupation' => 'nullable',
            'mother_status' => 'required',
            'mother_occupation' => 'nullable',
            'guardian_mobile' => 'nullable',
            'bro_not_married' => 'nullable',
            'bro_married' => 'nullable',
            'sis_not_married' => 'nullable',
            'sis_married' => 'nullable',
            'home_division' => 'required',
            'currently_living_in' => 'nullable',
            'city_living_in' => 'nullable',
            'family_details' => 'nullable',
        ]);
    
        // Update customers profile
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.physical.attribute')->with('success', 'Profile completed successfully!');
    }

    //member_physical_attribute
    function member_physical_attribute(){
        return view('frontend.loginreg.physicalattribute');
    }

    //physical_attribute_store
    function physical_attribute_store(Request $request){
        $validatedData = $request->validate([
            'height' => 'required',
            'weight' => 'required',
            'body_type' => 'nullable',
            'complexion' => 'nullable',
            'blood_group' => 'nullable',
            'physical_attibute_details' => 'nullable',
        ]);
    
        // Update customers profile
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.lifestyle')->with('success', 'Profile completed successfully!');
    }

    //member_physical_attribute
    function member_lifestyle(){
        return view('frontend.loginreg.lifestyle');
    }

    //lifestyle_store
    function lifestyle_store(Request $request){
        $validatedData = $request->validate([
            'religious_value' => 'required',
            'family_values' => 'nullable',
            'diet' => 'nullable',
            'smoke' => 'nullable',
        ]);
    
        // Update customers profile
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.partner.preferences')->with('success', 'Profile completed successfully!');
    }

    //member_partner_preferences
    function member_partner_preferences(){
        return view('frontend.loginreg.partner_preferences');
    }

    //partner_preferences_store
    function partner_preferences_store(Request $request){
        $validatedData = $request->validate([
            'partner_gender' => 'required',
            'age_from' => 'required',
            'age_to' => 'nullable',
            'height_from' => 'nullable',
            'height_to' => 'nullable',
            'partner_marital_status' => 'nullable',
            'partner_bodytype' => 'nullable',
            'partner_complexion' => 'nullable',
            'partner_education' => 'nullable',
            'partner_profession' => 'nullable',
            'partner_working_sector' => 'nullable',
        ]);
    
        // Update customers profile
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.aboutme')->with('success', 'Profile completed successfully!');
    }

    //member_aboutme
    function member_aboutme(){
        return view('frontend.loginreg.aboutme');
    }

    //aboutme_store
    function aboutme_store(Request $request){
        $validatedData = $request->validate([
            'write_about_yourself' => 'required',
        ]);
    
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect()->route('member.registration');
        }
        $user->update($validatedData);
    
        return redirect()->route('member.manage.photo')->with('success', 'Profile completed successfully!');
    }

     //member_manage_photo
     function member_manage_photo(){
        return view('frontend.loginreg.managephoto');
    }

    // manage_photo_store
    public function manage_photo_store(Request $request){
        if ($request->imgbtn == 1) {
            $rules = [
                'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ];
            $validatedData = $request->validate($rules);
        
            $uploadedImages = [];
        
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $extension = $image->getClientOriginalExtension();
                    $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
                    $image->move(public_path('uploads/memberimage'), $fileName);
                    $uploadedImages[] = $fileName;
                }
        
                $user = Auth::guard('customer')->user();
                if (!$user) {
                    return redirect()->route('member.registration');
                }

                $user->update(['image' => json_encode($uploadedImages)]);
            }
        }
        
        return redirect('/')->with('success', 'Profile completed successfully!');
        // return redirect()->route('member.dashboard')->with('success', 'Profile completed successfully!');
    }

}
