<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.siswa',['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswaAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $siswa = new Siswa;
        $siswa->judulsis = $request->get('judulsis');
        $siswa->deskripsisis = $request->get('deskripsisis');

        if($request->file('gambarsis')){
        $file = $request->file('gambarsis')->store('imagesis', 'public');  
        $siswa->gambarsis = $file; 
        } else{
            $siswa->gambarsis = "";
        }

        $siswa->save();
        return redirect('/siswa');
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
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswaEdit', ['siswa' => $siswa]);
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
            'gambarsis'  => 'required|max:307200'
        ]);
         $siswa = Siswa::findOrFail($id);
         $siswa->judulsis = $request->get('judulsis');
         $siswa->deskripsisis = $request->get('deskripsisis');
         if($request->file('gambarsis')){     
             if($siswa->gambarsis && file_exists(storage_path('app/public/' . $siswa->gambarsis))){         
             \Storage::delete('public/'.$siswa->gambarsis);     
        }    
         $file = $request->file('gambarsis')->store('imagesis', 'public');     
         $siswa->gambarsis = $file; 
        }  
         $siswa->save();
         return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id); 
        $siswa->delete();
        return redirect('/siswa');
        
    }
}
