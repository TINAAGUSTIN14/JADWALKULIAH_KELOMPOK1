{{-- resources/views/update.blade.php --}}
@extends('layout.index')
@section('title','Update Mahasiswa')
 
@section('content')
<div class="my-5">
    <div class="container mx-auto max-w-xl shadow py-4 px-10">
        <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Update Product</h1>
            <form action="" method="POST">
                @csrf
                <div class="my-2">
                    <label for="" class="text-md font-bold">Id Mahasiswa</label>
                    <input type="text" value="{{$mahasiswas->id_mahasiswa}}" name="id_mahasiswa" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('id_mahasiswa')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Nama Mahasiswa</label>
                    <input type="text" value="{{$mahasiswas->nama_mahasiswa}}" name="nama_mahasiswa" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('nama_mahasiswa')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Alamat Mahasiswa</label>
                    <input type="text" value="{{$mahasiswas->alamat_mahasiswa}}" name="alamat_mahasiswa" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('alamat_mahasiswa')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Nomor Telepon</label>
                    <input type="text" value="{{$mahasiswas->nomor_telepon}}" name="nomor_telepon" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('nomor_telepon')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Email Mahasiswa</label>
                    <input type="email" value="{{$mahasiswas->email_mahasiswa}}" name="email_mahasiswa" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('email_mahasiswa')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Tempat Lahir</label>
                    <input type="text" value="{{$mahasiswas->tempat_lahir}}" name="tempat_lahir" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('tempat_lahir')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Tanggal Lahir</label>
                    <input type="date" value="{{$mahasiswas->tanggal_lahir}}" name="tanggal_lahir" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('tanggal_lahir')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">
                        <span class="label-text">Jenis Kelamin</span>
                    </label>
                    <select class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" name="jenis_kelamin" id="">
                        <option disabled="disabled" selected>Pilih Jenis Kelamin</option> 
                        <option value="Laki-Laki" {{ ($mahasiswas->jenis_kelamin == "Laki-Laki") ? 'selected' : ""}}> Laki-Laki</option>
                        <option value="Perempuan" {{ ($mahasiswas->jenis_kelamin == "Perempuan") ? "selected" : ""}}> Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Update</button>
        </div>
    </div>
</div>
@endsection