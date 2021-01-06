@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul Berita</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('berita.update', ['id'=>$berita->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Name</label>   
              <input  value="{{$berita->judulber}}" class="form-control"  placeholder="Judul"        type="text" name="judulber" id="name"/>   
                <br>
                <label for="name">Deskripsi</label>  
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsiber" class="materialize-textarea"
                        data-length="1000">{{$berita->deskripsiber}}</textarea>
                </div>  
                <br>
                Current avatar: <br>     
                @if($berita->gambarber)       
                <img src="{{asset('storage/'.$berita->gambarber)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarber" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
