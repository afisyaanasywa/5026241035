<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    public function index()
    {
        $data = DB::table('tagihan_air')->get();
        $data->transform(function ($item) {
            $penggunaanMurni= $item->MeterAkhir - $item->MeterAwal;
            $item->Penggunaan = $penggunaanMurni;
            $totalMurni = $penggunaanMurni * 5000;
            $item->TotalTagihan = 'Rp ' . number_format($totalMurni, 0, ',', '.');
            return $item;
        });
        return view('eas.eas_index', compact('data'));
    }

    public function create()
    {
        return view('eas.eas_tambah');
    }

    public function store(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'NoMeteran'  => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir'  => $request->MeterAkhir
        ]);

        return redirect('/eas')->with('success', 'Data tagihan air berhasil ditambahkan.');
    }
}