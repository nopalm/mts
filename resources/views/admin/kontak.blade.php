@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-content">
            <h3>Contact us</h3>
            <div class="divider"></div>
            <br>
            @foreach($kontak as $p)
            <form method="post" action="{{ route('kontak.update', $p->id) }}" class="m-t-40">
                @method('PATCH')
                @csrf
                <h4 class="card-title">Email</h4>
                <div class="input-field">
                    <input id="name" type="text" name="email" value="{{ $p->email }}">
                    <label for="name">Input Email</label>
                </div>
                <h4 class="card-title">Phone</h4>
                <div class="input-field">
                    <input id="name" type="text" name="phone" value="{{ $p->phone }}">
                    <label for="name">Input Phone Number</label>
                </div>
                
                <h4 class="card-title">Alamat</h4>
                <div class="input-field">
                    <input id="name" type="text" name="alamat" value="{{ $p->alamat }}">
                    <label for="name">Input Alamat</label>
                </div>
                <h4 class="card-title">Embed</h4>
                <label>Add Src</label>
                <div class="input-field">
                
                    <input id="name" type="text" name="embed" value="{{ $p->embed }}">
                    <label for="name">Embed maps</label>
                </div>
                <div class="divider"></div>
                <div class="card-content">
                    <button class="btn cyan waves-effect waves-light" type="submit">Save
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
