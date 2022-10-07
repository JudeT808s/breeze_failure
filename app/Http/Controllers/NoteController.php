<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        //Fetch notes in order of recency
        $notes = Note::where('user_id', Auth::id())->latest('updated_at')->paginate(1);
        //dd ($notes);
        return view('notes.index')-> with('notes', $notes);
    }

public function create(){
    
}
public function store(Request $request){

}
public function show($id){

}
public function edit($id){

}
public function update(Request $request, $id){

}
public function destroy($id){

}

}
