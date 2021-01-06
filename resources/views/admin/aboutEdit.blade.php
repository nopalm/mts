@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>About us</h3>
            <div class="divider"></div>
            <br>
            <h4 class="card-title">Judul</h4>
            <form method="post" action="{{ route('about.update', $about->id) }}" class="m-t-40">
                @method('PATCH')
                @csrf
                <div class="input-field">
                    <input id="name" type="text" name="judul" value="{{ $about->judul }}">
                    <label for="name">Masukkan Judul</label>
                </div>
                <h4 class="card-title">Deskripsi</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea2" class="materialize-textarea" name="deskripsi"
                            data-length="500">{{ $about->deskripsi}}</textarea>
                        <label for="textarea2">Deskripsi</label>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="card-content">
                    <button class="btn cyan waves-effect waves-light" type="submit">Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
