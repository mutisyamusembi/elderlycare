<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prepscription;
use Twilio\Rest\Client;

class PrepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $preps = Prep::all();

        // return view('med')->with('prep',$preps);
        $prescription = Prescription::latest()->first();
        return veiw('editprep')->with('prescription',$precription);
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
        $prep = new Prep;
        $prep->disease = $request->input('disease');
        $prep->medicine = $request->input('medicine');
        $prep->pillnumber = $request->input('dosage_pills');
        $prep->dosage = $request->input('dosage_number');
        $prep->startdate = $request->input('date');
        //Sending a message to the Arduiono of the new changes.
        $account_sid = getenv("TWILIO_ACCOUNT_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+254797578553',
            array(
                'from' => env( 'TWILIO_FROM' ),
                'body' => "Start". $prep->medicine,
            )
        );

        $prep->save();

        return redirect ('/prep')->with('success','Prescription saved');
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
