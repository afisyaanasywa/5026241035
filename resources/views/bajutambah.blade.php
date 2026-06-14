@extends('template')
@section('title', 'Tambah Data Baju')
@section('konten')

    <h3>Tambah Data Baju</h3>

    <form action="/baju/simpan" method="POST">
        @csrf

        <div class="form-group">
            <label>Merk Baju</label>
            <input type="text" name="merkbaju" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Stock Baju</label>
            <input type="text" name="stockbaju" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Tersedia (Y/N)</label>
            <input type="text" name="tersedia" class="form-control" maxlength="1" required>
        </div>
        <br>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>

@endsection

