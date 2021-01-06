@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Service</h5>
        <h6 class="card-subtitle">Data Service</h6>
        <a href="{{ route('service.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i>   Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($service as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judulser }}</td>
                        <td>{{ $p->deskripsiser}}</td>
                        <td> @if($p->gambarser)     
                        <img src="{{asset('storage/'.$p->gambarser)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>
                            <a href="{{route('service.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('service.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
                            @csrf 
                             <input type="hidden" value="DELETE" name="_method"> 
                            <button class="btn red waves-effect waves-light" type="submit"><i class="fas fa-trash"></i>Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection
