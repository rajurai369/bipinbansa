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
        $photos = Image::all();
        return response()->json($photos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Image();
        if ($request->hasFile('gpic')) {
            $file = $request->gpic;
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('photos', $newName);
            $photo->gpic = "photos/$newName";
        }
        // $photo->gpic=$request->gpic;
        // $photo->hpic=$request->hpic;
        // if ($request->hasFile('hpic')) {
        //     $file = $request->hpic;
        //     $newName = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('photos', $newName);
        //     $photo->photo = "photos/$newName";
        // }
        // $photo->gpic=$request->gpic;
        // $photo->hpic=$request->hpic;
        $photo->save();
        return response()->json(['message' => 'photo saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Image::find($id);
        return response()->json($photo);
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
        $photo = Image::find($id);
        if ($request->hasFile('gpic')) {
            $file = $request->gpic;
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('photos', $newName);
            $photo->gpic = "photos/$newName";
        }
        // $photo->gpic=$request->gpic;
        // $photo->hpic=$request->hpic;
        // if ($request->hasFile('hpic')) {
        //     $file = $request->hpic;
        //     $newName = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('photos', $newName);
        //     $photo->photo = "photos/$newName";
        // }
        // $photo->gpic=$request->gpic;
        // $photo->hpic=$request->hpic;
        $photo->update();
        return response()->json(['message' => 'photo updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Image::find($id);
        $photo->delete();
        return response()->json(['message' => 'photo Deleted']);
    }
}
