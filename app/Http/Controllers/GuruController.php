<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::paginate(7);
        return view('admin.guru',['guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guruAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru;
        $guru->nama = $request->get('nama');
        $guru->nip = $request->get('nip');
        $guru->jk = $request->get('jk');
        $guru->kelahiran = $request->get('kelahiran');
        $guru->guru_mapel = $request->get('guru_mapel');

        if($request->file('profil')){
        $file = $request->file('profil')->store('imageguru', 'public');  
        $guru->profil = $file; 
        } else{
            $guru->profil = "";
        }

        $guru->save();
        return redirect('/guru');
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
        $guru = Guru::find($id);
        return view('admin.guruEdit',compact('guru'));
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
            'profil'  => 'required|max:307200'
        ]);
         $guru = Guru::findOrFail($id);
         $guru->nama = $request->get('nama');
         $guru->nip = $request->get('nip');
         $guru->jk = $request->get('jk');
         $guru->kelahiran = $request->get('kelahiran');
         $guru->guru_mapel = $request->get('guru_mapel');
         if($request->file('profil')){     
             if($guru->profil && file_exists(storage_path('app/public/' . $guru->profil))){         
             \Storage::delete('public/'.$guru->profil);     
        }    
         $file = $request->file('profil')->store('imageguru', 'public');     
         $guru->profil = $file; 
        }  
         $guru->save();
         return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id); 
        $guru->delete();
        return redirect('/guru');
        
    }
}
