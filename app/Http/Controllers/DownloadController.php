<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Download;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::all();
        return view('admin.download',['download' => $download]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.downloadAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $download = new Download;
        $download->juduldown = $request->get('juduldown');
        $download->deskripsidown = $request->get('deskripsidown');

        if($request->file('filedown')){
        $file = $request->file('filedown')->store('imagedown', 'public');
        // $originname = $request->filedown->getClientOriginalName();
        // $file = $originname;
        $download->filedown = $file; 
        
        } else{
            $download->filedown = "";
        }

        $download->save();
        return redirect('/download');
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
        $download = Download::findOrFail($id);
        return view('admin.downloadEdit', ['download' => $download]);
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
            'filedown'  => 'required|max:307200'
        ]);
         $download = Download::findOrFail($id);
         $download->juduldown = $request->get('juduldown');
         $download->deskripsidown = $request->get('deskripsidown');
         if($request->file('filedown')){     
             if($download->filedown && file_exists(storage_path('app/public/' . $download->filedown))){         
             \Storage::delete('public/'.$download->filedown);     
        }    
         $file = $request->file('filedown')->store('imagedown', 'public');     
         $download->filedown = $file; 
        }  
         $download->save();
         return redirect('/download');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Download::findOrFail($id); 
        $download->delete();
        return redirect('/download');
        
    }
}
