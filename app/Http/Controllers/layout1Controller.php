<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicio;
use App\layout1;

class layout1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return view('layouts.layout1', [
            'menu' => 'Home',
            'section' => 'layer_1',
            'layout1' => layout1::first()
        ]);
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
        $layout = layout1::find($id)->first();

        if($request->hasfile('img2')){
            $imageName = $request->file('img2')->getClientOriginalName();
            $request->file('img2')->move(
                base_path() . '/public/imgs/', $imageName
            );
            $file1=$imageName;
            $layout->img2 = $file1;

        };
        if($request->hasfile('img3')){
            $imageName = $request->file('img3')->getClientOriginalName();
            $request->file('img3')->move(
                base_path() . '/public/imgs/', $imageName
            );
            $file2=$imageName;
            $layout->img3 = $file2;
        };
   
        $layout->texto = $request->texto;
        $layout->texto2 = $request->texto2;
        $layout->texto3 = $request->texto3;
        $layout->titulo = $request->titulo;
        $layout->titulo2 = $request->titulo2;
        $layout->titulo3 = $request->titulo3;
        $layout->save();
        return $layout;
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
