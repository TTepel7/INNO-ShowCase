<?php

namespace App\Http\Controllers;

use App\Models\Cert_type;
use Illuminate\Http\Request;

class CertTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cert_type::all();
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
     * @param  \App\Models\Cert_type  $cert_type
     * @return \Illuminate\Http\Response
     */
    public function show(Cert_type $cert_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cert_type  $cert_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Cert_type $cert_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cert_type  $cert_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cert_type $cert_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cert_type  $cert_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cert_type $cert_type)
    {
        //
    }
}
