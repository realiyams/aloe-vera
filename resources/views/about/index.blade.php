@extends('layouts.app')

@section('content')
    <!-- Judul halaman web -->
    <div class="w-4/5 m-auto text-center mb-10">
        <div class="py-10 border-b border-gray-200">
            <h1 class="text-6xl">
                About Me
            </h1>
        </div>
    </div>

<div class="text-center p-8 mb-10 sm:mb-10 bg-gray-300 m-auto sm:m-auto w-4/5 md:w-3/5 block rounded-xl border-2 border-green-600 shadow-2xl">
    <!-- isi identitas -->
    <img src="{{ asset('images/profil/profil.jpg') }}" alt="" class="text-center inline object-cover w-44 h-44 mx-3 mb-5 rounded-3xl border-2 border-green-600"> 
    <br>
    <table class="inline italic text-left w-full">
        <tr>
            <td>Nama</td>
            <td>: Ilham Cahya Ramadhan </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: 10119268 </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: IF-7</td>
        </tr>
    </table>

    <p class="italic mt-10 text-justify">
        Halo! perkenalkan namaku Ilham Cahya Ramadhan.
        Aku sekarang sedang menimba ilmu di Universitas
        Komputer Indonesia (UNIKOM) Jurusan Teknik Informatika.
    </p>
    <p class="italic mt-3 text-justify">
        Jika berada di rumah aku sering bermain gitar, berkebun dan memberi makan
        ikan hehe. Biasanya kalau coding berada dijam malam ditemani oleh secangkir
        kopi panas <3.
    </p>

    <p class="italic mt-3 text-justify">
        ohh iya, website ini dibuat untuk memenuhi tugas Aplikasi Teknologi Online.
        Framework yang digunakan yaitu Laravel 8 dengan Tailwind CSS. Selain itu, terima kasih
        juga kepada PHP Composer, PHP artisan, dan NodeJs npm yang membuat semuanya menjadi mudah :-D.
    </p>

    <p class="italic mt-3 text-justify mb-5">
        Happy Coding !
    </p>

    <div class="mt-5 text-right m-auto">
        <a
            href="{{ url('/') }}"
            class="bg-green-500 uppercase bg-transparent text-gray-100
            text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-green-800">
            Kembali ke Home ...
        </a>
    </div>  
</div>
@endsection