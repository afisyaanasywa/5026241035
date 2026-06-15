@extends('template')
@section('title', 'EAS Tagihan Air')
@section('konten')
    <h3>Daftar Tagihan Air</h3>

    <a href="/eas/tambah" class="btn btn-primary">Tambah Tagihan Air</a>

    <br/>
    <br/>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan Air</th>
                <th>Total Tagihan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->NoMeteran }}</td>
                <td>{{ $item->Penggunaan }}</td>
                <td>{{ $item->TotalTagihan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data tagihan air.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection