<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Str;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $albums = Album::all();
        return view('backend.albums',[
            'albums'=>$albums,
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
            'category'=>'nullable|max:225',
            'price'=>'nullable|max:225',
            'sort_description'=>'nullable',
            'description'=>'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = Str::random(32);
        if($request->image){
            $images = $request->image;
            $extention = $images->getClientOriginalExtension();
            $fileName = Str::random(5).rand(100000, 999999).'.'.$extention;
            $images->move(public_path('uploads/album'), $fileName);
            $validatedData['image'] = $fileName;
        }

        if ($request->hasFile('gallery')) {
            $galleryImages = $request->file('gallery');
            $galleryImageNames = [];
            foreach ($galleryImages as $galleryImage) {
                $extension = $galleryImage->getClientOriginalExtension();
                $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
                $galleryImage->move(public_path('uploads/album/gallery'), $fileName);
                $galleryImageNames[] = $fileName;
            }
            $validatedData['gallery'] = json_encode($galleryImageNames);
        }

        $albums = Album::create($validatedData);

        if($albums){
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
        $albums = Album::findOrFail($id);

    $rules = [
        'title' => 'required|max:225',
        'category'=>'nullable|max:225',
        'price'=>'nullable|max:225',
        'sort_description'=>'nullable',
        'description' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ];

    $validatedData = $request->validate($rules);

    $validatedData['slug'] = Str::random(32);

    if ($request->hasFile('image')) {
        $imagePath = public_path('uploads/album/' . $albums->image);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
        $image->move(public_path('uploads/album'), $fileName);
        $validatedData['image'] = $fileName;
    }

    if ($request->hasFile('gallery')) {
        $oldImages = json_decode($albums->gallery);
        
        foreach ($oldImages as $oldImage) {
            $imagePath = public_path('uploads/album/gallery/' . $oldImage);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
        }
            
        $galleryImages = $request->file('gallery');
        $galleryImageNames = [];
        foreach ($galleryImages as $galleryImage) {
            $extension = $galleryImage->getClientOriginalExtension();
            $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
            $galleryImage->move(public_path('uploads/album/gallery'), $fileName);
            $galleryImageNames[] = $fileName;
        }
        $validatedData['gallery'] = json_encode($galleryImageNames);
    }

    $albums->update($validatedData);

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
