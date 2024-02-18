<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('id', 'desc')->get();
        $total = Mahasiswa::count();
        return view('home', compact(['mahasiswas', 'total']));
    }
    public function create()
    {
        return view('create');
    }
    public function save(Request $request)
    {
        $validation = $request->validate([
            'id_mahasiswa' => 'required',
            'nama_mahasiswa' => 'required',
            'alamat_mahasiswa' => 'required',
            'nomor_telepon' => 'required',
            'email_mahasiswa' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        $data = Mahasiswa::create($validation);
        if ($data) {
            session()->flash('success', 'Data Mahasiswa Telah Ditambahkan');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Cek Kembali Data Anda');
            return redirect(route('create'));
        }
    }
    public function edit($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('update', compact('mahasiswas'));
    }

    public function delete($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id)->delete();
        if ($mahasiswas) {
            session()->flash('success', 'Berhasil Menghapus Data');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Data Gagal Dihapus');
            return redirect(route('home'));
        }
    }
    public function update(Request $request, $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        $id_mahasiswa = $request->id_mahasiswa;
        $nama_mahasiswa = $request->nama_mahasiswa;
        $alamat_mahasiswa = $request->alamat_mahasiswa;
        $nomor_telepon = $request->nomor_telepon;
        $email_mahasiswa = $request->email_mahasiswa;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;

        $mahasiswas->id_mahasiswa = $id_mahasiswa;
        $mahasiswas->nama_mahasiswa = $nama_mahasiswa;
        $mahasiswas->alamat_mahasiswa = $alamat_mahasiswa;
        $mahasiswas->nomor_telepon = $nomor_telepon;
        $mahasiswas->email_mahasiswa = $email_mahasiswa ;
        $mahasiswas->tempat_lahir = $tempat_lahir;
        $mahasiswas->tanggal_lahir = $tanggal_lahir;
        $mahasiswas->jenis_kelamin = $jenis_kelamin;
        $data = $mahasiswas->save();
        if ($data) {
            session()->flash('success', 'Update Data Sukses');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('update'));
        }
    }
}
