@extends('layouts.admin')
@section('Tambah', 'active')
@section('title', 'Tambah Pegawai')
@section('content')
<form action="{{ route('pegawai.store') }}" method="post">
    @csrf
    <div class="input-group my-3">
        <span class="input-group-text" id="basic-addon1">Nama Pegawai</span>
        <input type="text" name="namapegawai" class="form-control" aria-label="Username" aria-describedby="basic-addon1"><br>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Alamat Pegawai</span>
        <input type="text" name="alamatpegawai" class="form-control" aria-label="Username" aria-describedby="basic-addon1"><br>
    </div>
    <input type="submit" value="tambah" class="btn btn-primary">
</form>
@endsection