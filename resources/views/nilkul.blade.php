@extends('template')
@section('title', 'Tambah Data Nilai Kuliah')
@section('konten')

    <h3>Tambah Data Nilai Kuliah</h3>

    <form action="/nilaikuliah/simpan" method="POST">
        @csrf

        <div class="form-group">
            <label>NRP</label>
            <input type="text" name="NRP" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Nilai Angka</label>
            <input type="text" name="NilaiAngka" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>SKS</label>
            <input type="text" name="SKS" class="form-control" required>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>

@endsection
