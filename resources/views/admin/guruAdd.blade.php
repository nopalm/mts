@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Tambah data</h5>
        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('guru.store')}}" method="POST">
            @csrf
            <label for="name">Nama</label> 
            <input class="form-control" placeholder="Nama" type="text" name="nama" id="name" />
            <label for="name">Jenis Kelamin</label> 
            <input class="form-control" placeholder="Nama" type="text" name="jk" id="name" />
            <label for="name">Nip</label> 
            <input class="form-control" placeholder="Nip" type="text" name="nip" id="name" />
            <label for="name">Kelahiran</label> 
            <input class="form-control" placeholder="Kelahiran" type="text" name="kelahiran" id="name" />
            <label for="name">Mata Pelajaran</label> 
            <input class="form-control" placeholder="Mata Pelajaran" type="text" name="guru_mapel" id="name" />
            <label for="avatar">Tambah Foto Profil</label>      
            <div class="file-field input-field">
        <div class="btn blue darken-1">
            <span>File</span>
            <input type="file" name="profil">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
        </div>

             <!-- <input id="avatar"  name="gambar" type="file" class="form-control"> <br> -->
             <input class="btn btn-primary" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
