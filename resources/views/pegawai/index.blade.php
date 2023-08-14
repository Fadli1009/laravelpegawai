@extends('layouts.admin')
@section('Beranda', 'active')
@section('title', 'Beranda Admin')

@section('content')

<div class="container">
    <a href="{{ route('pegawai.create') }}" class="btn btn-primary my-4">Tambah</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Alamat Pegawai</th>
                <th>Aksi</th>
        </tr>
        </thead>
        @foreach ($pegawai as $item)
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->namapegawai }}</td>
                <td>{{ $item->alamatpegawai }}</td>
                <td>
                    <div class="flex d-flex">
                        <a href="{{ route('pegawai.edit',$item->id) }}" class="btn btn-warning mx-3">Edit</a>
                        <form action="{{ route('pegawai.destroy',$item->id) }}" method="post">
                            {{ csrf_field() }}
                            @method('delete')
                             <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>
</div>
@endsection