<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\PaymentMethord;
use Illuminate\Http\Request;

class PaymentMethodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = PaymentMethord::all();
        return view('backend.payment',[
            'payments'=>$payments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payments = PaymentMethord::find($id);

        $rules = [
            'name'=>'nullable|max:225',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['status'] = $request->status;

        if($request->status == 1){
            $customer = Customer::where('id', $request->customer_id)->update([
                'pay_active'=>1,
            ]);
        }
        if($request->status == 0){
            $customer = Customer::where('id', $request->customer_id)->update([
                'pay_active'=>0,
            ]);
        }


        $payments->update($validatedData);

        if ($payments) {
            return back()->with('success', 'updated successfully.');
        } else {
            return back()->with('error', 'Failed to update.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payments = PaymentMethord::find($id);

        $payments->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
