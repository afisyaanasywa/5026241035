@extends('template')
@section('title', 'Tambah Tagihan Air')
@section('konten')

<h3>Tambah Data Tagihan Air</h3>

    <form action="/eas/simpan" method="POST" id="formTagihan">
        @csrf

        <div class="form-group">
            <label>No Meteran</label>
            <input type="text" name="NoMeteran" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Meter Awal</label>
            <input type="text" name="MeterAwal" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Meter Akhir</label>
            <input type="text" name="MeterAkhir" class="form-control" required>
        </div>
        <br>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>

@endsection

