<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Models\User;


class TodoController extends Controller
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
        $notes=Todo::with('User')->get();
        return view('form',compact('notes'));
    }

    public function store(Request $request,$id)
    {

        $request->validate([
            'body'=>'required',
            
        ]);


           $id=$request->route('id');
         
           Todo::create([

            'user-id' => $request->route('id'),
            'body'=>$request->input('body')
            
        ]);
        $request->session()->flash('msg','Data submitted');
        return redirect('home');
    
        
            
        }

    public function show(Todo $todo)
    {
        //
    }

  
    public function edit(Todo $todo,$id)
    {
        return view('updateform')->with('notes',Todo::find($id));
    }

    
    public function update(Request $request, Todo $id)
    {

        $request->validate([
            'body'=>'required',
            
        ]);

        $res=Todo::find($id->id);
      

          $res->body=$request->input('body');
          
        $res->save();
        $request->session()->flash('msg','Data updated');
        return redirect('home');

    }

    public function destroy(Todo $todo,$id)
    {
        Todo::destroy(array('id',$id));
        return redirect('home');
    }
}
