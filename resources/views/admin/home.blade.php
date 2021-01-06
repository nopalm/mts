@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-content">
                <h3>Welcome Back {{ Auth::user()->name }}</h3>
                    <h4>Click sidebar disebelah kiri untuk mengelola website anda</h4>
            </div>  
        </div>
    </div>
@endsection
