@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Prestasi Siswa</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('siswa.update', ['id'=>$siswa->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
            <label for="name">Prestasi Siswa</label>   
              <input  value="{{$siswa->judulsis}}" class="form-control"  placeholder="Prestasi Siswa"        type="text" name="judulsis" id="name"/>   
                <br>
                <label for="name">Deskripsi Prestasi Siswa</label>   
              <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsisis" class="materialize-textarea"
                        data-length="1000">{{$siswa->deskripsisis}}</textarea>
                </div>  
                <br>
                Current image: <br>     
                @if($siswa->gambarsis)       
                <img src="{{asset('storage/'.$siswa->gambarsis)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarsis" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
