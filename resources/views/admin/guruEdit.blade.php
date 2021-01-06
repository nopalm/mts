@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Edit data</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul</h4>
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('guru.update', ['id'=>$guru->id])}}" method="POST">   
            @csrf   
            <input type="hidden" value="PUT" name="_method">  
            
              <label for="name">Name</label>   
              <input  value="{{$guru->nama}}" class="form-control"  placeholder="Nama"        type="text" name="nama" id="name"/>   
              <br>
              <label for="name">Jenis Kelamin</label>   
              <input  value="{{$guru->jk}}" class="form-control"  placeholder="Jenis Kelamin"        type="text" name="jk" id="name"/>
              <label for="name">Nip</label>   
              <input  value="{{$guru->nip}}" class="form-control"  placeholder="Nip"        type="text" name="nip" id="name"/>   
              <br>   
              <label for="name">Kelahiran</label>   
              <input  value="{{$guru->kelahiran}}" class="form-control"  placeholder="Kelahiran"        type="text" name="kelahiran" id="name"/>   
              <br>
              <label for="name">Mata Pelajaran</label>   
              <input  value="{{$guru->guru_mapel}}" class="form-control"  placeholder="Mata Pelajaran"  type="text" name="guru_mapel" id="name"/>   
              <br>
                <br>
                Current avatar: <br>     
                @if($guru->profil)       
                <img src="{{asset('storage/'.$guru->profil)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="profil" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>
                 <input  class="btn btn-primary" type="submit"  value="Save"/> 
                 <button onclick="window.history.go(-1)" class="btn btn-primary" > Cancel </button>
        </form>
    </div>
</div>
</div>
@endsection
