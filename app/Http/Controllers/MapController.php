<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $locations = Location::all();
        $current_location = Location::latest()->first();
        // $locations = DB::table('locations')
        //              ->get();
        return view('map')->with('locations',$locations)->with('current_location',$current_location);
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
        
        // Get value of time period from the dropdown
        $time_period = $request->input('category');
        $current_location = Location::latest()->first();

        // Get the last values of one hour
        if ($time_period == 'Last_One_Hour'){

            $locations = DB::table('locations')
            
                 ->whereRaw('created_at >= DATE_SUB( NOW(), INTERVAL 1 HOUR )')
                 ->orderBy('created_at','desc')
                 ->get(); 
        
        return view('map')->with('locations',$locations)->with('current_location',$current_location);

        } elseif ($time_period == 'Last_Day') {
            $locations = DB::table('locations')
            
                 ->whereRaw('created_at >= DATE_SUB( NOW(), INTERVAL 1 DAY )')
                 ->orderBy('created_at','desc')
                 ->get();   
                     
        return view('map')->with('locations',$locations)->with('current_location',$current_location);

        } else {
            $locations = DB::table('locations')
            
                 ->whereRaw('created_at >= DATE_SUB( CURDATE(), INTERVAL 1 WEEK )')
                 ->orderBy('created_at','desc')
                 ->get(); 
    
        return view('map')->with('locations',$locations)->with('current_location',$current_location);
        }

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
