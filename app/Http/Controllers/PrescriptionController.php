<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use Twilio\Rest\Client;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prescription = Prescription::latest()->first();
        return view('editprep')->with('prescription',$prescription);
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
        $cont = new Prescription;
        $cont->medicine1 = $request->input('med1');
        $cont->prep1 = $request->input('prep1');
        $cont->medicine2 = $request->input('med2');
        $cont->prep2 = $request->input('prep2');
        $cont->medicine3 = $request->input('med3');
        $cont->prep3 = $request->input('prep3');
        
        //Sending a message to the Arduino of the new changes.
        $account_sid = getenv("TWILIO_ACCOUNT_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
      
        
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+254797578553',
            array(
                'from' =>'+15098347154',
                'body' => "setPresConfig PS1:". $cont->medicine1."-".$cont->prep1.";PS2:".$cont->medicine2."-".$cont->prep2.";PS3:".$cont->medicine3."-".$cont->prep3.";END",
            )
        );

        $cont->save();

        return redirect ()->route('config.index')->with('success','Prescrition saved');
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
