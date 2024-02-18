{{-- resources/views/home.blade.php --}}
@extends('layout.index')
@section('title','Home')
@section('content')
<div class="my-5">
    <div class="container mx-auto">
        @if (session()->has('success'))
            <div class="bg-green-500 text-black px-4 py-2">
                {{session('success')}}
            </div>
            @endif
        <div class="flex justify-between items-center bg-gray-200 p-5 rounded-md">
            <div>
                <h1 class="text-xl text-semibold">Data Mahasiswa ( {{$total}} )</h1>
            </div>
            <div>
                <a href="{{ route('create') }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Tambah</a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-200">
                            <thead class="bg-gray-100 dark:bg-gray-100">
                                <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Id Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nama Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Alamat Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nomor Telepon
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Email Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Tempat Lahir
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Tanggal Lahir
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Edit
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-100 dark:divide-gray-200">
                            
                                @forelse ($mahasiswas as $mahasiswa)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-200">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$mahasiswa->id}}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->id_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->nama_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->alamat_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->nomor_telepon}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->email_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->tempat_lahir}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->tanggal_lahir}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->jenis_kelamin}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('edit', ['id'=>$mahasiswa->id]) }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Edit</a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('delete', ['id'=>$mahasiswa->id]) }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Delete</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>
                                            <h2>Data Mahasiswa Tidak Ditemukan</h2>
                                        </td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection