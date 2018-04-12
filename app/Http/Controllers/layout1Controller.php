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
        $home = inicio::with('banner', 'layout1', 'layout2', 'layout3')->first();
        return view('layouts.layout1', compact('home'));
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
       /* $this->validate($request, [
         'img2' => 'required|file'
   ]);*/ 
        return $request;
       
        $path_1 = $request->file('img2')->store('/public/imgs');
       // return $request;
        $layout = layout1::find($id)->first();
        $layout->texto = $request->texto;
        $layout->texto2 = $request->texto2;
        $layout->texto3 = $request->texto3;
        $layout->titulo = $request->titulo;
        $layout->titulo2 = $request->titulo2;
        $layout->titulo3 = $request->titulo3;
        $layout->img2 = $path_1;
        $layout->img3 = $request->img3;
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
