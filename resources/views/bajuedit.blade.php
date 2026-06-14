@extends('template')
@section('title', 'Edit Data Baju')
@section('konten')

    <h3>Edit Data Baju</h3>

    <form action="/baju/update" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $baju->kodebaju }}">

        <div class="form-group">
            <label>Merk Baju</label>
            <input type="text" name="merkbaju" class="form-control" value="{{ $baju->merkbaju }}" required>
        </div>
        <br>

        <div class="form-group">
            <label>Stock Baju</label>
            <input type="text" name="stockbaju" class="form-control" value="{{ $baju->stockbaju }}" required>
        </div>
        <br>

        <div class="form-group">
            <label>Tersedia (Y/N)</label>
            <input type="text" name="tersedia" class="form-control" value="{{ $baju->tersedia }}" maxlength="1" required>
        </div>
        <br>

        <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
        <a href="/baju" class="btn btn-light">Kembali</a>
    </form>

@endsection
