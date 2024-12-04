<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Favorite;
use App\Models\Interested;
use App\Models\package;
use App\Models\PaymentMethord;
use Carbon\Carbon;
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

    //member_profile
    function member_profile($username){
        $customer = Customer::where('username', $username)->first();
        $customer->age = Carbon::parse($customer->date_of_birth)->age;

        $images = json_decode($customer->image, true);
        $customer->first_image = $images[0] ?? null;

        return view('frontend.memberdashboard.memberprofile',[
            'customer'=>$customer,
        ]);
    }
    // partner_preferance_view
    function partner_preferance_view(){
        return view('frontend.memberdashboard.partner_preferences');
    }

    //partner_preferences_update
    function partner_preferences_update(Request $request){
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
    
        $user = Auth::guard('customer')->user();
        if(!$user){
            return redirect('/');
        }
        $user->update($validatedData);
    
        return redirect('/')->with('success', 'Profile completed successfully!');
    }

    // premium_package
    function premium_package(){
        $packages = package::where('status', 1)->get();
        return view('frontend.memberdashboard.packageview',[
            'packages'=>$packages,
        ]);
    }

    // payment_view
    function payment_view($id){
        $packages = package::where('id', $id)->first();
        return view('frontend.memberdashboard.paymentmethode',[
            'packages'=>$packages,
        ]);
    }

    //payment_methode_store
    function payment_methode_store(Request $request){
        $validatedData = $request->validate([
            'packages' => 'required',
            'name' => 'required',
            'payment' => 'nullable',
            'number' => 'nullable',
            'trxid' => 'nullable',
            'message' => 'nullable',
        ]);
        $user = Auth::guard('customer')->user();

        $validatedData['customer_id'] = $user->id;
        if(!$user){
            return redirect('/');
        }
        PaymentMethord::create($validatedData);
    
        return redirect('/')->with('success', 'successfully!');
    }

    function interest_store(Request $request){
        if($request->action == 'message'){
            echo 'aa';
        }
        if($request->action == 'interested'){
            Interested::insert([
                'customer_id'=> $request->customer_id,
                'sender_id'=> Auth::guard('customer')->user()->id,
                'created_at'=> Carbon::now(),
            ]);
        }
        if($request->action == 'favorite'){
            Favorite::insert([
                'customer_id'=> $request->customer_id,
                'sender_id'=> Auth::guard('customer')->user()->id,
                'created_at'=> Carbon::now(),
            ]);
        }
        return back()->with('success', 'success');
    }

    // favorite_list
    function favorite_list(){
        $favorites = Favorite::where('sender_id', Auth::guard('customer')->user()->id)->get();
        return view('frontend.memberdashboard.favorite_list',[
            'favorites'=>$favorites,
        ]);
    }
    // favorite_list_delete
    function favorite_list_delete($id){
        Favorite::find($id)->delete();
        return back()->with('success', 'success');
    }

    // interested_sent_list
    function interested_sent_list(){
        $interesteds = Interested::where('sender_id', Auth::guard('customer')->user()->id)->get();
        return view('frontend.memberdashboard.invitation_sent',[
            'interesteds'=>$interesteds,
        ]);
    }

    // interested_sent_delete
    function interested_sent_delete($id){
        Interested::find($id)->delete();
        return back()->with('success', 'success');
    }

    // interested_received_list
    function interested_received_list(){
        $interesteds = Interested::where('customer_id', Auth::guard('customer')->user()->id)->get();
        return view('frontend.memberdashboard.invitation_recived',[
            'interesteds'=>$interesteds,
        ]);
    }

    // interested_received_delete
    function interested_received_delete($id){
        Interested::find($id)->delete();
        return back()->with('success', 'success');
    }

    // interested_accept
    function interested_accept($id){
        Interested::find($id)->update([
            'status'=> 1,
        ]);
        return back()->with('success', 'success');
    }
    // interested_decline
    function interested_decline($id){
        Interested::find($id)->update([
            'status'=> 2,
        ]);
        return back()->with('success', 'success');
    }

}
