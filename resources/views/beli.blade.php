@extends('template')
@section('title', 'Tambah Pembelian Baru')
@section('konten')

    <h3>Form Pembelian Barang</h3>

    <!-- Form Action menembak ke URL simpan belanja -->
    <form action="/keranjangbelanja/simpan" method="POST">
        @csrf

        <!-- Seluruh isian berupa TextField sesuai instruksi soal[cite: 2] -->
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Jumlah Pembelian</label>
            <input type="text" name="Jumlah" class="form-control" required>
        </div>
        <br>

        <div class="form-group">
            <label>Harga per item</label>
            <input type="text" name="Harga" class="form-control" required>
        </div>
        <br>

        <button type="submit" class="btn btn-success">Simpan Pembelian</button>
    </form>

@endsection
