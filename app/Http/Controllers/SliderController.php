<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliderAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->judulslid = $request->get('judulslid');

        if($request->file('gambarslid')){
        $file = $request->file('gambarslid')->store('imageslid', 'public');  
        $slider->gambarslid = $file; 
        } else{
            $slider->gambarslid = "";
        }

        $slider->save();
        return redirect('/slider');
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliderEdit', ['slider' => $slider]);
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
            'gambarslid'  => 'required|max:307200'
        ]);
         $slider = Slider::findOrFail($id);
         $slider->judulslid = $request->get('judulslid');
         if($request->file('gambarslid')){     
             if($slider->gambarslid && file_exists(storage_path('app/public/' . $slider->gambarslid))){         
             \Storage::delete('public/'.$slider->gambarslid);     
        }    
         $file = $request->file('gambarslid')->store('imageslid', 'public');     
         $slider->gambarslid = $file; 
        }  
         $slider->save();
         return redirect('/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id); 
        $slider->delete();
        return redirect('/slider');
    }
}
