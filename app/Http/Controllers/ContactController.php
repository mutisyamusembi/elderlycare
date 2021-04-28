<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Twilio\Rest\Client;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $contact = Contacts::all()>orderBy('id', 'DESC')->first();
        // return view('configuration')->with('contact',$contact);
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
        $cont = new Contacts;
        $cont->name1 = $request->input('name1');
        $cont->phone1 = $request->input('phone1');
        $cont->name2 = $request->input('name2');
        $cont->phone2 = $request->input('phone2');
        $cont->name3 = $request->input('name3');
        $cont->phone3 = $request->input('phone3');
        
        //Sending a message to the Arduino of the new changes.
        $account_sid = getenv("TWILIO_ACCOUNT_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
      
        
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+254797578553',
            array(
                'from' =>'+15098347154',
                'body' => "setComConfig SOS1:". $cont->phone1.";SOS2:".$cont->phone2.";SOS3:".$cont->phone3.";END",
            )
        );

        $cont->save();

        return redirect ()->route('config.index')->with('success','Contacts added');
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
