<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // 3. Halaman Index (Menampilkan Tabel Utama)
    public function index()
    {
        // Mengambil seluruh record dari tabel "keranjangbelanja"
        $data = DB::table('keranjangbelanja')->get();

        // Melakukan transformasi data untuk menghitung Total dan mengubah format ribuan
        $data->transform(function ($item) {
            // Logika Perhitungan Total: Jumlah x Harga[cite: 2]
            $totalSatuRecord = $item->Jumlah * $item->Harga;

            // Menambahkan data field baru untuk ditampilkan di View
            $item->Total = 'Rp ' . number_format($totalSatuRecord, 0, ',', '.');
            $item->HargaFormat = 'Rp ' . number_format($item->Harga, 0, ',', '.');

            return $item;
        });

        // Memanggil file keranjang.blade.php di folder views
        return view('keranjang', compact('data'));
    }

    // Halaman Tambah Data (Form Input Beli)[cite: 2]
    public function create()
    {
        // Memanggil file beli.blade.php di folder views
        return view('beli');
    }

    // Proses Simpan Data Pembelian Baru ke Database[cite: 2]
    public function store(Request $request)
    {
        // Memasukkan data sesuai kolom tabel keranjangbelanja[cite: 2]
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        // Setelah mengisikan record baru, langsung redirect ke Halaman Index[cite: 2]
        return redirect('/keranjangbelanja');
    }

    // Fitur Hapus Data (Dari Tombol "Batal")[cite: 2]
    public function destroy($id)
    {
        // Menghapus data berdasarkan ID record[cite: 2]
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // Redirect kembali ke Halaman Index setelah menghapus[cite: 2]
        return redirect('/keranjangbelanja');
    }
}
