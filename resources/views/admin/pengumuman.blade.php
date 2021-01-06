@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Pengumuman</h5>
        <h6 class="card-subtitle">Data Pengumuman</h6>
        <a href="{{ route('pengumuman.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i> Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul pengumuman</th>
                        <th>Deskripsi pengumuman</th>
                        <th>Gambar pengumuman</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($pengumuman as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judulpeng }}</td>
                        <td>
                        {{ Str::limit($p->deskripsipeng, 40)}}</td>
                        <td> @if($p->gambarpeng)     
                        <img src="{{asset('storage/'.$p->gambarpeng)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>
                            <a href="{{route('pengumuman.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('pengumuman.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
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
