@extends('layouts.template')

@section('cass')

<br>
<form action="{{ url('pegawai/'.$crud->id) }}" method="POST">
@csrf
  <p><h1 class="text-center text-info">Ubah Pegawai</h1></p> 
<table align='center'>
    <input type="hidden" name="_method" value="PATCH">
    <tr>
        <td><label for="nama">Nama</label></td>
        <td><input type="text" id="nama" name="name" value="{{ $crud->name }}" class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" id="email" name="email" value="{{ $crud->email }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="gelar">Gelar</label></td>
        <td><input type="text" id="gelar" name="gelar" value="{{ $crud->gelar }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="jurusan">Jurusan</label></td>
        <td><input type="text" id="jurusan" name="jurusan" value="{{ $crud->jurusan }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="nip">Nip</label></td>
        <td><input type="text" id="nip" name="nip" value="{{ $crud->nip }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="tnggal_lahir">Tanggal Lahir</label></td>
        <td><input type="date" id="tnggal_lahir" name="tnggal_lahir" value="{{ $crud->tnggal_lahir }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit" class="btn btn-info">Simpan</button></td>
    </tr>
</table>
</form>
    
@endsection