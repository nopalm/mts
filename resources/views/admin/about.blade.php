@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>About us</h3>
            <div class="divider"></div>
            <br>
            @foreach($about as $p)
            <h4 class="card-title">Judul</h4>
            <form enctype="multipart/form-data" method="post" action="{{ route('about.update', $p->id) }}" class="m-t-40">
                @method('PATCH')
                @csrf
                <div class="input-field">
                    <input id="name" type="text" name="judulab" value="{{ $p->judulab }}">
                    <label for="name">Masukkan Judul</label>
                </div>
                <h4 class="card-title">Deskripsi</h4>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="deskripsiab" class="materialize-textarea"
                        data-length="1000">{{ $p->deskripsiab}}</textarea>
                    <label for="textarea2">Deskripsi</label>
                </div> 
                <br>
                Current Image: <br>     
                @if($p->gambarab)       
                <img src="{{asset('storage/'.$p->gambarab)}}" width="120px" />
                       <br>
                @else        
                No avatar     
                @endif     <br>     
                <input id="avatar" name="gambarab" type="file" class="form-control"> <br>
                 <small  class="text-muted">Kosongkan jika tidak ingin mengubah foto</small> <br>                
                <div class="divider"></div>
                <div class="card-content">
                    <!-- <a href="{{ route('about.edit',$p->id)}}">
                                        <button class="btn cyan waves-effect waves-light" type="submit" name="action">Edit
                                        </button></a> -->
                    <button class="btn cyan waves-effect waves-light" type="submit">Save
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
