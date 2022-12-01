@extends('layouts.template')

@section('cass')
<br>
<br>
<a href="{{ url('pegawai/create') }}" class="btn btn-info">Tambah</a>
<table class="table-bordered table">
    <tr align="center">
        <th>Nama</th>
        <th>Email</th>
        <th>Gelar</th>
        <th>Jurusan</th>
        <th>Nip</th>
        <th>Tanggal Lahir</th>
        <th colspan="2">Aksi</th>
    </tr>
    @foreach ($cobas as $key=>$value)

    <tr align="center">
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->gelar }}</td>
        <td>{{ $value->jurusan }}</td>
        <td>{{ $value->nip }}</td>
        <td>{{ $value->tnggal_lahir }}</td>
        <td><a href="{{ url('pegawai/'.$value->id.'/edit') }}" class="btn btn-info">Upgrade</a></td>
        <td>
            <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection