<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Partner;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::all();
        return view('admin.partner',['partner' => $partner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partnerAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new Partner;
        $partner->name = $request->get('name');
        $partner->deskripsi = $request->get('deskripsi');

        if($request->file('gambarpart')){
        $file = $request->file('gambarpart')->store('imagepart', 'public');  
        $partner->gambarpart = $file; 
        } else{
            $partner->gambarpart = "";
        }

        $partner->save();
        return redirect('/partner');
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
        $partner = Partner::findOrFail($id);
        return view('admin.partnerEdit', ['partner' => $partner]);
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
            'gambarpart'  => 'required|max:307200'
        ]);
         $partner = Partner::findOrFail($id);
         $partner->name = $request->get('name');
         $partner->deskripsi = $request->get('deskripsi');
         if($request->file('gambarpart')){     
             if($partner->gambarpart && file_exists(storage_path('app/public/' . $partner->gambarpart))){         
             \Storage::delete('public/'.$partner->gambarpart);     
        }    
         $file = $request->file('gambarpart')->store('imagepart', 'public');     
         $partner->gambarpart = $file; 
        }  
         $partner->save();
         return redirect('/partner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id); 
        $partner->delete();
        return redirect('/partner');
    }
}
