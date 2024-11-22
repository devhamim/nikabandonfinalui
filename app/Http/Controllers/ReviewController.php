<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Str;

class ReviewController extends Controller
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
        $collections = Review::all();
        return view('backend.review',[
            'collections'=>$collections,
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
            'image'=>'required',
            'title'=>'nullable',
        ];

        $validatedData = $request->validate($rules);

        if($request->image){
            $images = $request->image;
            $extention = $images->getClientOriginalExtension();
            $fileName = Str::random(5).rand(100000, 999999).'.'.$extention;
            $images->move(public_path('uploads/review'), $fileName);
            $validatedData['image'] = $fileName;
        }

        $review = Review::create($validatedData);

        if($review){
            return back()->with('success', 'Create successfully.');
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
        $reviews = Review::find($id);

        $rules = [
            'image'=>'nullable',
            'title'=>'nullable',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['status'] = $request->status;

        if ($request->image) {
            $imagePath = public_path('uploads/review/' . $reviews->image);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/review'), $fileName);
            $validatedData['image'] = $fileName;
        }

        $reviews->update($validatedData);

        if ($reviews) {
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
        $reviews = Review::find($id);

        $filePath = public_path('uploads/review/'. $reviews->image);
        if(file_exists($filePath) && is_file($filePath)){
            unlink($filePath);
        }

        $reviews->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
