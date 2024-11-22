<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Str;

class ExperienceController extends Controller
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
        $experiences = Experience::first();
        return view('backend.experience',[
            'experiences'=>$experiences,
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
        $rules = [
            'title'=>'required|max:225',
            'subtitle'=>'required|max:225',
            'experience'=>'required|max:225',
            'description'=>'required|max:1000',
            'list_one'=>'required|max:225',
            'list_one_number'=>'required|max:225',
            'list_two'=>'required|max:225',
            'list_two_number'=>'required|max:225',
            'list_three'=>'required|max:225',
            'list_three_number'=>'required|max:225',
        ];

        $validatedData = $request->validate($rules);

        if($request->image){
            $images = $request->image;
            $extention = $images->getClientOriginalExtension();
            $fileName = Str::random(5).rand(100000, 999999).'.'.$extention;
            $images->move(public_path('uploads/experience'), $fileName);
            $validatedData['image'] = $fileName;
        }

        $experience = Experience::find($id);
        $experience->update($validatedData);
        return back()->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
