<?php

namespace App\Http\Controllers;

use App\Models\NeoStats;
use Illuminate\Http\Request;

class NeoStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('neostats');
    }

    /**
     * Show the form for crating a new resource.
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
     * @param  \App\Models\NeoStats  $NeoStats
     * @return \Illuminate\Http\Response
     */
    public function show(NeoStats $NeoStats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeoStats  $NeoStats
     * @return \Illuminate\Http\Response
     */
    public function edit(NeoStats $NeoStats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NeoStats  $NeoStats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NeoStats $NeoStats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeoStats  $NeoStats
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeoStats $NeoStats)
    {
        //
    }
}
