<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HTTP;


use function PHPUnit\Framework\returnSelf;

class CotizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Project::get();
        $mostrar = Project::find('1');
        $api = HTTP::get('https://schema.getpostman.com/json/collection/v2.1.0/collection.json');
        $ruc = $api->json();
        return view('cotizar',compact('dates','mostrar','ruc'));
    }
    public function index2()
    {
        return view('cotizar2');
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
        request()->validate([
            'ruc'=>'required | min:11'
        ]);
        return redirect('cotizarvista');

    }
    public function store2(Request $request)
    {
        request()->validate([
            'ruc'=>'required | min:11',
            'numero'=>'required | min:8',
        ]);
        return redirect('cotizar2vista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
        //
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
