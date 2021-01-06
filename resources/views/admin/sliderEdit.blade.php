@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('slider.update', ['id'=>$slider->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$slider->judulslid}}" class="form-control"  placeholder="Full Name"        type="text" name="judulslid" id="name"/>   
                <br>
                Current avatar: <br>     
                @if($slider->gambarslid)       
                <img src="{{asset('storage/'.$slider->gambarslid)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarslid" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
