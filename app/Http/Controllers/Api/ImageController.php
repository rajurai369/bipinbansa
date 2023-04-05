<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Image::all();
        return response()->json($images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=new Image();
        if ($request->hasFile('gpic')) {
            $file=$request->gpic;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $image->gpic="images/$newName";
        }
        // $image->gpic=$request->gpic;
        // $image->hpic=$request->hpic;
        if ($request->hasFile('hpic')) {
            $file=$request->hpic;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $image->image="images/$newName";
        }
        // $image->gpic=$request->gpic;
        // $image->hpic=$request->hpic;
        $image->save();
        return response()->json(['message'=>'Image saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image=Image::find($id);
        return response()->json($image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image= Image::find($id);
        if ($request->hasFile('gpic')) {
            $file=$request->gpic;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $image->gpic="images/$newName";
        }
        // $image->gpic=$request->gpic;
        // $image->hpic=$request->hpic;
        if ($request->hasFile('hpic')) {
            $file=$request->hpic;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $image->image="images/$newName";
        }
        // $image->gpic=$request->gpic;
        // $image->hpic=$request->hpic;
        $image->update();
        return response()->json(['message'=>'Image updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=Image::find($id);
        $image->delete();
        return response()->json(['message'=>'Image Deleted']);
    }
}
