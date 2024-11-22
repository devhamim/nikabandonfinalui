<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Str;

class ClientController extends Controller
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
        $clients = Client::all();
        return view('backend.client',[
            'clients'=>$clients,
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
        $rules = [
            'name'=>'required|max:225',
            'address'=>'required|max:225',
            'description'=>'required|max:1000',
        ];

        $validatedData = $request->validate($rules);
        if($request->image){
            $images = $request->image;
            $extention = $images->getClientOriginalExtension();
            $fileName = Str::random(5).rand(100000, 999999).'.'.$extention;
            $images->move(public_path('uploads/client'), $fileName);
            $validatedData['image'] = $fileName;
        }

        $clients = Client::create($validatedData);

        if($clients){
            return back()->with('success', 'create successfully.');
        }
        else{
            return back()->with('error', 'Failed to create.');
        }
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
        $clients = Client::find($id);

        $rules = [
            'name'=>'nullable|max:225',
            'address'=>'nullable|max:225',
            'description'=>'required|max:1000',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['status'] = $request->status;

        if ($request->image) {
            $imagePath = public_path('uploads/client/' . $clients->image);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/client'), $fileName);
            $validatedData['image'] = $fileName;
        }


        $clients->update($validatedData);

        if ($clients) {
            return back()->with('success', 'Updated successfully.');
        } else {
            return back()->with('error', 'Failed to update.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients = Client::find($id);

        $filePath = public_path('uploads/client/'. $clients->image);
        if(file_exists($filePath) && is_file($filePath)){
            unlink($filePath);
        }

        $clients->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
