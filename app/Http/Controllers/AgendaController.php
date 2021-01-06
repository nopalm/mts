<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('admin.agenda',['agenda' => $agenda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agendaAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $agenda = new Agenda;
        $agenda->judulagenda = $request->get('judulagenda');
        $agenda->deskripsiagenda = $request->get('deskripsiagenda');

        if($request->file('gambaragenda')){
        $file = $request->file('gambaragenda')->store('imageagenda', 'public');  
        $agenda->gambaragenda = $file; 
        } else{
            $agenda->gambaragenda = "";
        }

        $agenda->save();
        return redirect('/agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.agendaEdit', ['agenda' => $agenda]);
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'gambaragenda'  => 'required|max:307200'
        ]);
         $agenda = Agenda::findOrFail($id);
         $agenda->judulagenda = $request->get('judulagenda');
         $agenda->deskripsiagenda = $request->get('deskripsiagenda');
         if($request->file('gambaragenda')){     
             if($agenda->gambaragenda && file_exists(storage_path('app/public/' . $agenda->gambaragenda))){         
             \Storage::delete('public/'.$agenda->gambaragenda);     
        }    
         $file = $request->file('gambaragenda')->store('imageagenda', 'public');     
         $agenda->gambaragenda = $file; 
        }  
         $agenda->save();
         return redirect('/agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id); 
        $agenda->delete();
        return redirect('/agenda');
        
    }
}
