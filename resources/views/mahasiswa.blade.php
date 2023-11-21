@extends('layouts.main')

@section('container')

<h1>Data Mahasiswa</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mahasiswa as $data)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $data['nim'] }}</td>
      <td>{{ $data['nama'] }}</td>
      <td>{{ $data['jurusan'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection