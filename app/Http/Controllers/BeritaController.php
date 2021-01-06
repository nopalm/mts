<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita',['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.beritaAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $berita = new Berita;
        $berita->judulber = $request->get('judulber');
        $berita->deskripsiber = $request->get('deskripsiber');

        if($request->file('gambarber')){
        $file = $request->file('gambarber')->store('imageber', 'public');  
        $berita->gambarber = $file; 
        } else{
            $berita->gambarber = "";
        }

        $berita->save();
        return redirect('/berita');
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
        $berita = Berita::findOrFail($id);
        return view('admin.beritaEdit', ['berita' => $berita]);
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
            'gambarber'  => 'required|max:307200'
        ]);
         $berita = Berita::findOrFail($id);
         $berita->judulber = $request->get('judulber');
         $berita->deskripsiber = $request->get('deskripsiber');
         if($request->file('gambarber')){     
             if($berita->gambarber && file_exists(storage_path('app/public/' . $berita->gambarber))){         
             \Storage::delete('public/'.$berita->gambarber);     
        }    
         $file = $request->file('gambarber')->store('imageber', 'public');     
         $berita->gambarber = $file; 
        }  
         $berita->save();
         return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id); 
        $berita->delete();
        return redirect('/berita');
        
    }
}
