<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use Illuminate\Http\Request;
use Str;
use Storage;

class StoresController extends Controller
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
        $stories = Stores::all();
        return view('backend.stories',[
            'stories'=>$stories,
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
            'title'=>'required|max:225',
            'description'=>'required|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = Str::random(32);
        if($request->image){
            $images = $request->image;
            $extention = $images->getClientOriginalExtension();
            $fileName = Str::random(5).rand(100000, 999999).'.'.$extention;
            $images->move(public_path('uploads/storie'), $fileName);
            $validatedData['image'] = $fileName;
        }

        if ($request->hasFile('gallery')) {
            $galleryImages = $request->file('gallery');
            $galleryImageNames = [];
            foreach ($galleryImages as $galleryImage) {
                $extension = $galleryImage->getClientOriginalExtension();
                $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
                $galleryImage->move(public_path('uploads/storie/gallery'), $fileName);
                $galleryImageNames[] = $fileName;
            }
            $validatedData['gallery'] = json_encode($galleryImageNames);
        }

        $stories = Stores::create($validatedData);

        if($stories){
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
        
    $story = Stores::findOrFail($id);

    $rules = [
        'title' => 'required|max:225',
        'description' => 'required|max:1000',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ];

    $validatedData = $request->validate($rules);

    $validatedData['slug'] = Str::random(32);

    if ($request->hasFile('image')) {
        $imagePath = public_path('uploads/storie/' . $story->image);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
        $image->move(public_path('uploads/storie'), $fileName);
        $validatedData['image'] = $fileName;
    }

    if ($request->hasFile('gallery')) {
        $oldImages = json_decode($story->gallery);
        
        foreach ($oldImages as $oldImage) {
            $imagePath = public_path('uploads/storie/gallery/' . $oldImage);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
        }
            
        $galleryImages = $request->file('gallery');
        $galleryImageNames = [];
        foreach ($galleryImages as $galleryImage) {
            $extension = $galleryImage->getClientOriginalExtension();
            $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
            $galleryImage->move(public_path('uploads/storie/gallery'), $fileName);
            $galleryImageNames[] = $fileName;
        }
        $validatedData['gallery'] = json_encode($galleryImageNames);
    }

    $story->update($validatedData);

    return back()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
