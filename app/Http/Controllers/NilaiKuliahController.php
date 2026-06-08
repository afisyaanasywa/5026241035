<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $data = DB::table('nilaikuliah')->get();

        $data->transform(function ($item) {
            // konversi nilai dari angka ke huruf
            if ($item->NilaiAngka <= 40) {
                $item->NilaiHuruf = 'D';
            } elseif ($item->NilaiAngka <= 60) {
                $item->NilaiHuruf = 'C';
            } elseif ($item->NilaiAngka <= 80) {
                $item->NilaiHuruf = 'B';
            } else {
                $item->NilaiHuruf = 'A';
            }

            // pwehitungan bobot nilai angka x sks
            $item->Bobot = $item->NilaiAngka * $item->SKS;

            return $item;
        });

        return view('nilaikuliah', compact('data'));
    }

    public function create()
    {
        return view('nilkul');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }
}
