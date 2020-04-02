<?php

namespace App\Http\Controllers;

use App\ClientNote;
use Illuminate\Http\Request;
use Auth;

class ClientNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function viewAllNotes(Request $request)
    {
        $notes = ClientNote::where('client_id', $request->id)->orderBy('created_at', 'desc')->get();
        $html = "<div class='subsDiv'> <input type='hidden' value='$request->id' id='clientId'/><table class='subTable' style='width: 100%'>";
        foreach ($notes as $sub) {
            $html .= '
          <tr id="subTr'.$sub->id.'" style="border-bottom: 1px solid gray"><td  onclick="deleteNote('.$sub->id.')" style="color: red; width: 15%; cursor: pointer">X</td><td id="subtask'.$sub->id.'" style="font-size: 10pt">'.$sub->note.'</td><td style="font-size: 8pt; width: 15%">'.$sub->updated_at.'</td></tr>
          ';
        }
        $html .='
        </table></div><textarea  placeholder="Add A Note" id="addItemField" style="margin-top: 15px; font-size: 12pt"></textarea><br /><span class="btn btn-sm btn-primary" onclick="addNote()">Save Note</span>
        ';

        return response()->json(['html' => $html]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = new ClientNote();
        $sub->client_id = $request->id;
        $sub->note = $request->description;
        $sub->user_id = Auth::user()->id;
        if ($sub->save()) {
            //  $newSub = $sub->fresh();
            //  $html = '
            //   <tr id="subTr'.$sub->id.'" style="border-bottom: 1px solid gray"><td id="subtask'.$sub->id.'">'.$sub->note.'</td><td style="font-size: 8pt">'.$sub->created_at->format('h:i a m-d-y').'</td></tr>
            // ';

            return response('good');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientNote  $clientNote
     * @return \Illuminate\Http\Response
     */
    public function show(ClientNote $clientNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientNote  $clientNote
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientNote $clientNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientNote  $clientNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientNote $clientNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientNote  $clientNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientNote $clientNote)
    {
        $clientNote->delete();
    }
}
