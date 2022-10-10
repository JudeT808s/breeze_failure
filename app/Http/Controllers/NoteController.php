<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
    return view('notes.create');
}
// 
public function store(Request $request)
{
    $request->validate([
    'title'=> 'required|max:120',
    'text'=> 'required'
    ]);

    Note::create([
        'uuid'=> Str::uuid(),
        'user_id'=> Auth::id(),
        'title'=> $request->title,
        'text'=> $request->text,
        
    ]);

    return to_route('notes.index');
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
