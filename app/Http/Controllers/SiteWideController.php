<?php

namespace App\Http\Controllers;

use App\SiteWide;
use Illuminate\Http\Request;

class SiteWideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = SiteWide::find(1);

        return view('site-wide', compact('site'));
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
        $site = SiteWide::find(1);
        $site->update($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteWide  $siteWide
     * @return \Illuminate\Http\Response
     */
    public function show(SiteWide $siteWide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteWide  $siteWide
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteWide $siteWide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteWide  $siteWide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteWide $siteWide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteWide  $siteWide
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteWide $siteWide)
    {
        //
    }
}
