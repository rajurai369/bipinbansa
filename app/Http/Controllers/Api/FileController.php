<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=File::all();
        return response()->json($files);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=new File();
        if ($request->hasFile('mundhum_file')) {
            $file=$request->mundhum_file;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $file->mundhum_file="images/$newName";
        }
        if ($request->hasFile('bansa_file')) {
            $file=$request->bansa_file;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $file->bansa_file="images/$newName";
        }

        if ($request->hasFile('helper_file')) {
            $file=$request->helper_file;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $file->helper_file="images/$newName";
        }
        // $file->mundhum_file=$request->mundhum_file;
        // $file->bansa_file=$request->bansa_file;
        // $file->mantab_file=$request->mantab_file;
        // $file->helper_file=$request->helper_file;
        $file->save();
        return response()->json(['message'=>'File Uploaded']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file=File::find($id);
        return response()->json($file);
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
        $file=File::find($id);
        if ($request->hasFile('mundhum_file')) {
            $file=$request->mundhum_file;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $file->mundhum_file="images/$newName";
        }
        if ($request->hasFile('bansa_file')) {
            $file=$request->bansa_file;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $file->bansa_file="images/$newName";
        }

        if ($request->hasFile('helper_file')) {
            $file=$request->helper_file;
            $newName=time() . '.' .$file->getClientOriginalExtension();
            $file->move('images', $newName);
            $file->helper_file="images/$newName";
        }

        // $file->mundhum_file=$request->mundhum_file;
        // $file->bansa_file=$request->bansa_file;
        // $file->mantab_file=$request->mantab_file;
        // $file->helper_file=$request->helper_file;
        $file->update();
        return response()->json(['message'=>'File Uploaded']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file=File::find($id);
        $file->delete();
        return response()->json(['message'=>'File Deleted']);
    }
}
