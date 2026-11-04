<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::with(['mahasiswa', 'matakuliah'])->get();

        return view('absensi.index', compact('absensis'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = Matakuliah::all();

        return view('absensi.create', compact('mahasiswas', 'matakuliahs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'matakuliah_id' => 'required',
            'tanggal_absensi' => 'required|date',
            'status_absen' => 'required|in:A,H,I,S',
        ]);

        Absensi::create([
            'id' => Str::uuid(),
            'mahasiswa_id' => $request->mahasiswa_id,
            'matakuliah_id' => $request->matakuliah_id,
            'tanggal_absensi' => $request->tanggal_absensi,
            'status_absen' => $request->status_absen,
        ]);

        return redirect()->route('absensi.index')
            ->with('success', 'Data absensi berhasil ditambahkan.');
    }
}