@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h3>Keranjang Belanja</h3>

    <!-- 1 Tombol "Beli" untuk Tambah Data[cite: 2] -->
    <a href="/keranjangbelanja/beli" class="btn btn-primary">Beli</a>

    <br/>
    <br/>

    <!-- Tabel Menampilkan Seluruh Record[cite: 2] -->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <!-- Menampilkan harga dan total dengan pemisah ribuan[cite: 2] -->
                <td>{{ $item->HargaFormat }}</td>
                <td>{{ $item->Total }}</td>
                <td>
                    <!-- Tombol "Batal" di setiap record untuk hapus data[cite: 2] -->
                    <a href="/keranjangbelanja/batal/{{ $item->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
