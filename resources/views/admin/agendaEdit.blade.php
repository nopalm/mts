@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul Agenda</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('agenda.update', ['id'=>$agenda->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Judul Agenda</label>   
              <input  value="{{$agenda->judulagenda}}" class="form-control"  placeholder="Judul"        type="text" name="judulagenda" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>  
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsiagenda" class="materialize-textarea"
                        data-length="1000">{{$agenda->deskripsiagenda}}</textarea>
                </div>    
                <br>
                Current image: <br>     
                @if($agenda->gambaragenda)       
                <img src="{{asset('storage/'.$agenda->gambaragenda)}}" width="120px" />
                       <br>
                @else        
                No image     
                @endif     <br>     
                <input id="image" name="gambaragenda" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
