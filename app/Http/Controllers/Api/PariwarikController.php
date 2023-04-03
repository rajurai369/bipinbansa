<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pariwarik;
use Illuminate\Http\Request;

class PariwarikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasbirs=Pariwarik::all();
        return response()->json($tasbirs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tasbir=New Pariwarik();
        $tasbir->subject=$request->subject;
        $tasbir->tarbir=$request->tasbir;
        $tasbir->save();
        return response()->json(['message'=>'Tarsbir stored']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasbir=Pariwarik::find($id);
        return response()->json($tasbir);
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
        $tasbir=New Pariwarik();
        $tasbir->subject=$request->subject;
        $tasbir->tasbir=$request->tasbir;
        $tasbir->save();
        return response()->json(['message'=>'Tarsbir Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasbir=Pariwarik::find($id);
        $tasbir->delete();
        return response()->json(['message'=>'Tarsbir Deleted']);
    }
}
