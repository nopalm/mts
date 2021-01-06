<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.service',['service' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.serviceAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->judulser = $request->get('judulser');
        $service->deskripsiser = $request->get('deskripsiser');

        if($request->file('gambarser')){
        $file = $request->file('gambarser')->store('imageser', 'public');  
        $service->gambarser = $file; 
        } else{
            $service->gambarser = "";
        }

        $service->save();
        return redirect('/service');
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
        $service = Service::find($id);
        return view('admin.serviceEdit',compact('service'));
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
            'gambarser'  => 'required|max:307200'
        ]);
         $service = Service::findOrFail($id);
         $service->judulser = $request->get('judulser');
         $service->deskripsiser = $request->get('deskripsiser');
         if($request->file('gambarser')){     
             if($service->gambarser && file_exists(storage_path('app/public/' . $service->gambarser))){         
             \Storage::delete('public/'.$service->gambarser);     
        }    
         $file = $request->file('gambarser')->store('imageser', 'public');     
         $service->gambarser = $file; 
        }  
         $service->save();
         return redirect('/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id); 
        $service->delete();
        return redirect('/service');
        
    }
}
