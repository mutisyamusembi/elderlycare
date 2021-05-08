<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heartrate;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        //
        $values = DB::table('heartrates')
                //Heartrate::all()
        //DB::raw("DATE_SUB(CURDATE() ,INTERVAL 1 DAY)")
                 // ->where('created_at','<',DB::raw('CURDATE()'));
                 ->whereRaw('created_at >= DATE_SUB( NOW(), INTERVAL 1 HOUR )')
                 ->orderBy('created_at','desc')
        ->get(); 
        $chart_values = array();
        $chart_label = array();
        

        // foreach($values as $value){
        //     $jsonArrayItem = array();
        //     $jsonArrayItem['label'] = $value->created_at;
        //     $jsonArrayItem['value'] = $value->heartrate;
            
        //     array_push($chart, $jsonArrayItem);
        // };
            foreach ($values as $value){
              
                    array_push($chart_values,$value->heartrate);
                    array_push($chart_label,$value->created_at);
            };

            return view('chart2')->with('chart_values',$chart_values)->with('chart_label',$chart_label);
        
        // return view('chart')->with('chart',$chart);


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

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

        // Get the last values of one hour
        if ($time_period == 'Last_One_Hour'){

            $values = DB::table('heartrates')
            
                 ->whereRaw('created_at >= DATE_SUB( CURDATE(), INTERVAL 1 HOUR )')
                 ->orderBy('created_at','desc')
        ->get(); 
        $chart_values = array();
        $chart_label = array();

        foreach ($values as $value){
                
                array_push($chart_values,$value->heartrate);
                array_push($chart_label,$value->created_at);
        };

        return view('chart2')->with('chart_values',$chart_values)->with('chart_label',$chart_label);

        } elseif ($time_period == 'Last_Day') {
            $values = DB::table('heartrates')
            
                 ->whereRaw('created_at >= DATE_SUB( CURDATE(), INTERVAL 1 DAY )')
                 ->orderBy('created_at','desc')
        ->get(); 
        $chart_values = array();
        $chart_label = array();

        foreach ($values as $value){
                
                array_push($chart_values,$value->heartrate);
                array_push($chart_label,$value->created_at);
        };

        return view('chart2')->with('chart_values',$chart_values)->with('chart_label',$chart_label);

        } else {
            $values = DB::table('heartrates')
            
                 ->whereRaw('created_at >= DATE_SUB( CURDATE(), INTERVAL 1 WEEK )')
                 ->orderBy('created_at','desc')
        ->get(); 
        $chart_values = array();
        $chart_label = array();

        foreach ($values as $value){
                
                array_push($chart_values,$value->heartrate);
                array_push($chart_label,$value->created_at);
        };

        return view('chart2')->with('chart_values',$chart_values)->with('chart_label',$chart_label);
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
