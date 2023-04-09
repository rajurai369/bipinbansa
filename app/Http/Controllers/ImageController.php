<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Image::first();

        return view('backend.photo.index', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.photo.create');
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
        // $photo->gpic = $request->gpic;
        // $photo->hpic=$request->hpic;
        // if ($request->hasFile('hpic')) {
        //     $file = $request->hpic;
        //     $newName = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('photos', $newName);
        //     $photo->photo = "photos/$newName";
        // }
        $photo->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Image::find($id);
        return view('backend.photo.edit', compact('photo'));
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
        // $photo->gpic = $request->gpic;
        // $photo->hpic=$request->hpic;
        // if ($request->hasFile('hpic')) {
        //     $file = $request->hpic;
        //     $newName = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('photos', $newName);
        //     $photo->photo = "photos/$newName";
        // }
        // $photo->gpic = $request->gpic;
        // $photo->hpic = $request->hpic;
        $photo->update();
        return redirect()->back();
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
        return redirect('/photo');
    }
}
