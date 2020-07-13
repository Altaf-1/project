<?php

namespace App\Http\Controllers;

use App\Maggie;
use Illuminate\Http\Request;

class MaggieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maggies= Maggie::all();
        //dd($maggies);
        return view('maggie.index',compact('maggies'));
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
     * @param  \App\Maggie  $maggie
     * @return \Illuminate\Http\Response
     */
    public function show(Maggie $maggie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maggie  $maggie
     * @return \Illuminate\Http\Response
     */
    public function edit(Maggie $maggie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maggie  $maggie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maggie $maggie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maggie  $maggie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maggie $maggie)
    {
        //
    }
}
