<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicio;
use App\layout3;

class layout3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = inicio::with('banner', 'layout1', 'layout2', 'layout3')->first();
        return view('layouts.layout3', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $layout = layout3::find($id)->first();
        $layout->titulo = $request->titulo;
        $layout->titulo2 = $request->titulo2;
        $layout->titulo3 = $request->titulo3;
        $layout->titulo4 = $request->titulo4;
        $layout->texto = $request->texto;
        $layout->texto2 = $request->texto2;
        $layout->texto3 = $request->texto3;
        $layout->texto4 = $request->texto4;
        $layout->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
