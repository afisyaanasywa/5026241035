<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BajuController extends Controller
{
   public function index()
    {
        $baju = DB::table('baju')->get();
        return view('baju', compact('baju'));
    }

    public function cari(Request $request)
    {
        $keyword = $request->keyword;

        $baju = DB::table('baju')
            ->where('merkbaju', 'like', "%" . $keyword . "%")
            ->get();

        return view('baju', compact('baju'));
    }

    public function tambah()
    {
        return view('bajutambah');
    }

    public function store(Request $request)
    {
        DB::table('baju')->insert([
            'merkbaju'  => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia'  => $request->tersedia
        ]);

        return redirect('/baju')->with('success', 'Data baju berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $baju = DB::table('baju')->where('kodebaju', $id)->first();

        return view('bajuedit', compact('baju'));
    }

    public function update(Request $request)
    {
        DB::table('baju')->where('kodebaju', $request->id)->update([
            'merkbaju'  => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia'  => $request->tersedia
        ]);

        return redirect('/baju')->with('success', 'Data baju berhasil diubah.');
    }

    public function hapus($id)
    {
        DB::table('baju')->where('kodebaju', $id)->delete();

        return redirect('/baju')->with('success', 'Data baju berhasil dihapus.');
    }
}
