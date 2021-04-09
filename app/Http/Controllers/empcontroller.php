<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empmodel;
class empcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $e=empmodel::all();
        return view('viewall',compact('e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ename=request('ename');
        $ecode=request('ecode');
        $edes=request('edes');
        $esal=request('esal');
        $ecom=request('ecom');

        echo $ename;
        echo $ecode;
        echo $edes;
        echo $esal;
        echo $ecom;

        $e=new empmodel();
        $e->ename=$ename;
        $e->ecode=$ecode;
        $e->edes=$edes;
        $e->esal=$esal;
        $e->ecom=$ecom;

        $e->save();

    }

    public function search(Request $request)
    {
        $getname=request('ename');
        $e=empmodel::query()
        ->where('ename','LIKE',"%{$getname}%")->get();

        return view('viewall',compact('e'));
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
        $e=empmodel::find($id);
        return view('edit',compact('e'));
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
        $e=empmodel::find($id);

        $ename=request('ename');
        $ecode=request('ecode');
        $edes=request('edes');
        $esal=request('esal');
        $ecom=request('ecom');

        echo $ename;
        echo $ecode;
        echo $edes;
        echo $esal;
        echo $ecom;

        $e->ename=$ename;
        $e->ecode=$ecode;
        $e->edes=$edes;
        $e->esal=$esal;
        $e->ecom=$ecom;

        $e->save();
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
