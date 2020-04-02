<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('lastNote')->orderBy('created_at', 'desc')->get();

        return response()->json(['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->fname = $request->fname;
        $client->lname= $request->lname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->active = 1;
        $client->message = $request->message;
        if ($client->save()) {
            return back()->with('success', "Your message was successfully delivered. We'll be in touch with you shortly");
        } else {
            return back()->with('error', 'Something went wrong. Please try to reach out to us by phone or try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $client = Client::find($request->id);
        $html = '<label for="client-phone">Phone: </label><input style="font-size: 10pt" type="text" id="client-phone" name="phone" value="'.$client->phone.'"/><br /><label for="client-email">Email: </label><input style="font-size: 10pt" type="text" id="client-email" name="email" value="'.$client->email.'"/>';

        return response()->json(['html' => $html]);
    }

    public function showAll()
    {
        $clients = Client::orderBy('lname')->get();
        return view('all-clients', compact('clients'));
    }

    public function updateDetails(Request $request)
    {
        $client = Client::find($request->id);
        $client->update(['phone' => $request->phone, 'email' => $request->email]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    public function updateActive(Client $client)
    {
        $client->active = !$client->active;
        $client->save();
        return response(intval($client->active));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function export()
    {
        $clients = Client::all();
        return (new FastExcel($clients))->download('file.csv');
    }
}
