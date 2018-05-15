<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Draft;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Draft::get();
        return view('draft.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('draft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newDraft = new Draft;
        $this->validate($request,
        [
            'sender_cnic' => 'digits:13'
        ]);
        $email = Auth::user()->email;
        $data = User::where('email','=',$email)->get();
        $newDraft->customer_id = $data[0]->id;
        $newDraft->sender_name = $request->sender_name;
        $newDraft->sender_cnic = $request->sender_cnic;
        $newDraft->draft_amount = $request->draft_amount;
        $newDraft->expiry_date = $request->expiry_date;
        $newDraft->save();

        return redirect('/draft')->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Draft  $draft
     * @return \Illuminate\Http\Response
     */
    public function show(Draft $draft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Draft  $draft
     * @return \Illuminate\Http\Response
     */
    public function edit(Draft $draft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Draft  $draft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Draft $draft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Draft  $draft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Draft $draft)
    {
        //
    }
}
