<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        $jadwals = JadwalKuliah::orderBy('id', 'desc')->get();
        $total = JadwalKuliah::count();
        return view('home', compact(['jadwals', 'total']));
    }
    public function create()
    {
        return view('create');
    }
    public function save(Request $request)
    {
        $validation = $request->validate([
            'kode' => 'required',
            'kelas' => 'required',
            'mata_kuliah' => 'required',
            'dosen_pengajar' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
        ]);
        $data = JadwalKuliah::create($validation);
        if ($data) {
            session()->flash('success', 'Data Jadwal Telah Ditambahkan');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Cek Kembali Data Anda');
            return redirect(route('create'));
        }
    }
    public function edit($id)
    {
        $jadwals = JadwalKuliah::findOrFail($id);
        return view('update', compact('jadwals'));
    }

    public function delete($id)
    {
        $jadwals = JadwalKuliah::findOrFail($id)->delete();
        if ($jadwals) {
            session()->flash('success', 'Berhasil Menghapus Data');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Data Gagal Dihapus');
            return redirect(route('home'));
        }
    }
    public function update(Request $request, $id)
    {
        $jadwals = JadwalKuliah::findOrFail($id);
        $kode = $request->kode;
        $kelas = $request->kelas;
        $mata_kuliah = $request->mata_kuliah;
        $dosen_pengajar = $request->dosen_pengajar;
        $hari = $request->hari;
        $waktu = $request->waktu;

        $jadwals->kode = $kode;
        $jadwals->kelas = $kelas;
        $jadwals->mata_kuliah = $mata_kuliah;
        $jadwals->dosen_pengajar = $dosen_pengajar;
        $jadwals->hari = $hari ;
        $jadwals->waktu = $waktu;
        $data = $jadwals->save();
        if ($data) {
            session()->flash('success', 'Update Data Sukses');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('update'));
        }
    }
}
