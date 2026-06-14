@extends('template')
@section('title', 'Data Baju')
@section('konten')

    <h3>Daftar Baju</h3>

    <a href="/baju/tambah" class="btn btn-primary">Tambah Baju Baru</a>

    <br/>
    <br/>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <p>Cari Data Baju :</p>
    <form action="/baju/cari" method="GET" class="form-inline">
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <input type="text" name="keyword" placeholder="Masukkan merk baju.." class="form-control" value="{{ request('keyword') }}">
            </div>
            <div class="col-auto">
                <input type="submit" value="CARI" class="btn btn-secondary">
            </div>
        </div>
    </form>

    <br/>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Baju</th>
                <th>Merk Baju</th>
                <th>Stock Baju</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($baju as $b)
            <tr>
                <td>{{ $b->kodebaju }}</td>
                <td>{{ $b->merkbaju }}</td>
                <td>{{ $b->stockbaju }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/baju/hapus/{{ $b->kodebaju }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Data baju tidak ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection
