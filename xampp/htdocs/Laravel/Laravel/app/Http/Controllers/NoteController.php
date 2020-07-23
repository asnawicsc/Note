<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list data

        $notes = Note::all();
        return view('notemodel')->with('notes',$notes);
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
        //create notes
        $this->validate($request,[
            'name' =>'required',
            'description' =>'required'

        ]);

        $notes =new Note;

        $notes->name = $request->input('name');
        $notes->description = $request->input('description');

        $notes->save();

        return redirect('/note')->with('success','Note Created Successfully');

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
          $notes = Note::find($id);

            return view('noteeditpage', compact('notes', 'id'));
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
           //update notes
        $this->validate($request,[
            'name' =>'required',
            'description' =>'required'

        ]);

        $notes = Note::find($id);

        $notes->name = $request->input('name');
        $notes->description = $request->input('description');

        $notes->save();

        return redirect('/note')->with('success','Note Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $notes = Note::find($id);

      

        $notes->delete();

          return redirect('/note')->with('success','Note Deleted Successfully');
    }
}
