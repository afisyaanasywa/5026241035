@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h3>Daftar Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary">Tambah Data</a>

    <br/>
    <br/>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->NRP }}</td>
                <td>{{ $item->NilaiAngka }}</td>
                <td>{{ $item->SKS }}</td>
                <td>{{ $item->NilaiHuruf }}</td>
                <td>{{ $item->Bobot }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
