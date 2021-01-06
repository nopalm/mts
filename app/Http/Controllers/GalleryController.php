<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Gallery::all();
        return view('admin.galeri',['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeriAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $galeri = new Gallery;
        $galeri->judul = $request->get('judul');
        $galeri->deskripsi = $request->get('deskripsi');

        if($request->file('gambar')){
        $file = $request->file('gambar')->store('image', 'public');  
        $galeri->gambar = $file; 
        } else{
            $galeri->gambar = "";
        }

        $galeri->save();
        return redirect('/galeri');
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
        $galeri = Gallery::findOrFail($id);
        return view('admin.galeriEdit', ['galeri' => $galeri]);
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
            'gambar'  => 'required|max:307200'
        ]);
         $galeri = Gallery::findOrFail($id);
         $galeri->judul = $request->get('judul');
         $galeri->deskripsi = $request->get('deskripsi');
         if($request->file('gambar')){     
             if($galeri->gambar && file_exists(storage_path('app/public/' . $galeri->gambar))){         
             \Storage::delete('public/'.$galeri->gambar);     
        }    
         $file = $request->file('gambar')->store('image', 'public');     
         $galeri->gambar = $file; 
        }  
         $galeri->save();
         return redirect('/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Gallery::findOrFail($id); 
        $galeri->delete();
        return redirect('/galeri');
        
    }
}
