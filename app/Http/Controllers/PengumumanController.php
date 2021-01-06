<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman',['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumumanAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $pengumuman = new Pengumuman;
        $pengumuman->judulpeng = $request->get('judulpeng');
        $pengumuman->deskripsipeng = $request->get('deskripsipeng');

        if($request->file('gambarpeng')){
        $file = $request->file('gambarpeng')->store('imagepeng', 'public');  
        $pengumuman->gambarpeng = $file; 
        } else{
            $pengumuman->gambarpeng = "";
        }

        $pengumuman->save();
        return redirect('/pengumuman');
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
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumumanEdit', ['pengumuman' => $pengumuman]);
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
            'gambarpeng'  => 'required|max:307200'
        ]);
         $pengumuman = Pengumuman::findOrFail($id);
         $pengumuman->judulpeng = $request->get('judulpeng');
         $pengumuman->deskripsipeng = $request->get('deskripsipeng');
         if($request->file('gambarpeng')){     
             if($pengumuman->gambarpeng && file_exists(storage_path('app/public/' . $pengumuman->gambarpeng))){         
             \Storage::delete('public/'.$pengumuman->gambarpeng);     
        }    
         $file = $request->file('gambarpeng')->store('imagepeng', 'public');     
         $pengumuman->gambarpeng = $file; 
        }  
         $pengumuman->save();
         return redirect('/pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id); 
        $pengumuman->delete();
        return redirect('/pengumuman');
        
    }
}
