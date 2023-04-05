<?php

namespace App\Http\Controllers;

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

    {    $file=File::first();
        return view('backend.file.index',compact('file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.file.create');
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
    //   if ($request->hasFile('mundhum_file')) {
    //     $file=$request->mundhum_file;
    //     $newName=time() . '.' .$file->getClientOriginalExtension();
    //     $file->move('images', $newName);
    //     $file->mundhum_file="images/$newName";
    // }
    // if ($request->hasFile('bansa_file')) {
    //     $file=$request->bansa_file;
    //     $newName=time() . '.' .$file->getClientOriginalExtension();
    //     $file->move('images', $newName);
    //     $file->bansa_file="images/$newName";
    // }

    // if ($request->hasFile('helper_file')) {
    //     $file=$request->helper_file;
    //     $newName=time() . '.' .$file->getClientOriginalExtension();
    //     $file->move('images', $newName);
    //     $file->helper_file="images/$newName";
    // }
      $file->mundhum_file=$request->mundhum_file;
      $file->bansa_file=$request->bansa_file;
      $file->mantab_file=$request->mantab_file;
      $file->helper_file=$request->helper_file;
      $file->save();
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
        $file=File::find($id);
        return view('backend.file.edit',compact('file'));
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
        $file= File::find($id);
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


    //   $file->mundhum_file=$request->mundhum_file;
    //   $file->bansa_file=$request->bansa_file;
    //   $file->mantab_file=$request->mantab_file;
    //   $file->helper_file=$request->helper_file;




      $file->update();
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
        $file=File::find($id);
        $file->delete();
        return redirect('/file');
    }
}
