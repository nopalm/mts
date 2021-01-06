@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Guru</h5>
        <h6 class="card-subtitle">Data Guru</h6>
        <a href="{{ route('guru.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i>   Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Profil</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Nip</th>
                        <th>Kelahiran</th>
                        <th>Mata Pelajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($guru as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td> @if($p->profil)     
                        <img src="{{asset('storage/'.$p->profil)}}" width="70px"/>  @else      N/A @endif </td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->jk }}</td>
                        <td>{{ $p->nip}}</td>
                        <td>{{ $p->kelahiran}}</td>
                        <td>{{ $p->guru_mapel}}</td>
                        <td>
                            <a href="{{route('guru.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('guru.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
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
