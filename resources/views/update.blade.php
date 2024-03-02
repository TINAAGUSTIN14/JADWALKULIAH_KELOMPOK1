{{-- resources/views/update.blade.php --}}
@extends('layout.index')
@section('title','Update Jadwal')
 
@section('content')
<div class="my-5">
    <div class="container mx-auto max-w-xl shadow py-4 px-10">
        <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Update Product</h1>
            <form action="" method="POST">
                @csrf
                <div class="my-2">
                    <label for="" class="text-md font-bold">Kode</label>
                    <input type="text" value="{{$jadwals->kode}}" name="kode" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('kode')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Kelas</label>
                    <input type="text" value="{{$jadwals->kelas}}" name="kelas" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('kelas')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Mata Kuliah</label>
                    <input type="text" value="{{$jadwals->mata_kuliah}}" name="mata_kuliah" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('mata_kuliah')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Dosen Pengajar</label>
                    <input type="text" value="{{$jadwals->dosen_pengajar}}" name="dosen_pengajar" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('dosen_pengajar')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Hari</label>
                    <input type="text" value="{{$jadwals->hari}}" name="hari" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('hari')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="my-2">
                    <label for="" class="text-md font-bold">Waktu</label>
                    <input type="text" value="{{$jadwals->waktu}}" name="waktu" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                    @error('waktu')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Update</button>
        </div>
    </div>
</div>
@endsection