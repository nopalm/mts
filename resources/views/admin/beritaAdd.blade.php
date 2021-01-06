@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Tambah data</h5>
        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action=" {{route('berita.store')}}" method="POST">
            @csrf
            <label for="name">Judul Berita</label> 
            <input class="form-control" placeholder="judul" type="text" name="judulber" id="name" />
            <label for="desc">Deskripsi Berita</label> 
            <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsiber" class="materialize-textarea"
                        data-length="1000"></textarea>
                </div>
            <label for="avatar">Add image</label>      
            <div class="file-field input-field">
        <div class="btn blue darken-1">
            <span>File</span>
            <input type="file" name="gambarber">
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
