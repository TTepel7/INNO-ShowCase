<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartupController extends Controller
{
    /**
     *
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $query=$request->get('query','');
        $page=$request->get('page',1);
        $direction=$request->get('direction_id',false);

        if($direction) {
            $startups = Startup::search($query)->where('directions.id',$direction)->paginate(10, 'page', $page);
        }else{
            $startups = Startup::search($query)->paginate(10, 'page', $page);
        }
        return [
           'items'=> $startups->items(),
            'current_page'=>$page,
            'total_page'=>$startups->lastPage(),
            'count'=>DB::table('startups')->count()
        ];
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
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $startup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $startup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        //
    }
}
