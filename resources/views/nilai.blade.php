@extends('layouts.main')

@section('container')

<h1>Data Nilai</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Nilai</th>
    </tr>
  </thead>
  <tbody>
    @foreach($nilai as $data)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $data['nim'] }}</td>
      <td>{{ $data['nama'] }}</td>
      <td>{{ $data['mata_kuliah'] }}</td>
      <td>{{ $data['nilai'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection