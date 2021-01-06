@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title">Download</h5>
        <h6 class="card-subtitle">Data Download</h6>
        <a href="{{ route('download.create')}}">
            <button class="btn green waves-effect waves-light" type="submit">
            <i class="fas fa-plus"></i> Add</button></a>
        <div class="table-responsive">
            <table class="table highlight m-b-20">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul download</th>
                        <th>Deskripsi download</th>
                        <th>file download</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($download as $p)
                    <tr id="1" class="gradeX">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->juduldown }}</td>
                        <td>
                        {{ Str::limit($p->deskripsidown, 20)}}</td>
                        <td> @if($p->filedown)
                        {{ Str::limit($p->filedown , 10)}}
                        @else      N/A @endif </td>
                        <td>
                            <a href="{{route('download.edit', ['id'=>$p->id])}}"><button class="btn cyan waves-effect waves-light"
                                    type="submit"><i class="far fa-edit"></i>Edit
                                </button></a> <br>
                            <form action="{{route('download.destroy', ['id' => $p->id])}}" method="POST" onsubmit="return confirm('Are u sure Delete this item?')">
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
