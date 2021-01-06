@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Agenda</h5>
        <h6 class="card-subtitle">Data Agenda</h6>
        <a href="{{ route('agenda.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i> Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul Agenda</th>
                        <th>Deskripsi Agenda</th>
                        <th>Gambar Agenda</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($agenda as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->judulagenda }}</td>
                        <td>
                        {{ Str::limit($p->deskripsiagenda, 40)}}</td>
                        <td> @if($p->gambaragenda)     
                        <img src="{{asset('storage/'.$p->gambaragenda)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>
                            <a href="{{route('agenda.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('agenda.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
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
