<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicio;
use App\layout2;


class layout2Controller extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = inicio::with('banner', 'layout1', 'layout2', 'layout3')->first();
        
        $titulo = preg_split('/\s+/',$home->layout2->titulo);

        $titulo = array_chunk($titulo, round(count($titulo)/2));

        //return $titulo;
        return view('layouts.layout2', compact('home', 'titulo'));
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
        $layout = layout2::find($id)->first();
         if($request->hasfile('img')){
            $imageName = $request->file('img')->getClientOriginalName();
            $request->file('img')->move(
                base_path() . '/public/imgs/', $imageName
            );
            $file1=$imageName;
            $layout->img = $file1;
        };

         if($request->hasfile('img2')){
            $imageName = $request->file('img2')->getClientOriginalName();
            $request->file('img2')->move(
                base_path() . '/public/imgs/', $imageName
            );
            $file2=$imageName;
            $layout->img2 = $file2;
        };

        if($request->hasfile('img3')){
            $imageName = $request->file('img3')->getClientOriginalName();
            $request->file('img3')->move(
                base_path() . '/public/imgs/', $imageName
            );
            $file2=$imageName;
            $layout->img3 = $file3;
        };

        $layout->titulo = $request->titulo;
        $layout->texto = $request->texto;
        $layout->nombre = $request->nombre;
        $layout->nombre2 = $request->nombre2;
        $layout->nombre3 = $request->nombre3;
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
