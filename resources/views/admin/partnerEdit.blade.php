@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">name</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('partner.update', ['id'=>$partner->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$partner->name}}" class="form-control"  placeholder="Full Name"        type="text" name="name" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>   
              <input  value="{{$partner->deskripsi}}" class="form-control"  placeholder="Full Name"        type="text" name="deskripsi" id="name"/>   
                <br>
                Current avatar: <br>     
                @if($partner->gambarpart)       
                <img src="{{asset('storage/'.$partner->gambarpart)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarpart" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
