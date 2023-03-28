@extends('layouts.app')

@section('content')

    <!-- judul halaman web -->
    <div class="w-4/5 m-auto text-center">
        <div class="py-10 border-b border-gray-200">
            <h1 class="text-6xl">
                Aloe Vera List
            </h1>
        </div>
    </div>

    <!-- jika ada message maka akan ditampilkan -->
    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="text-white bg-green-500 rounded-2xl py-4 text-center">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    <!-- jika login maka tombol create akan muncul -->
    @if (Auth::check())
        <div class="pt-15 w-4/5 md:w-3/5 m-auto mb-10">

            <a
                href="/aloe/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100
                text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-800">
                Tambahkan Aloe Vera
            </a>
        </div>
    @else
    <p class="my-10 px-15 md:w-3/5 sm:w-4/5 m-auto text-center py-10 bg-yellow-300 text-xl rounded-xl">
        Silahkan Login untuk menambah, mengedit dan menghapus Aloe vera
    </p>  
    @endif

    <!-- perulangan forelse untuk menampilkan data -->
    @forelse ($aloe_veras as $aloe)
        <div class="text-center p-8 mb-10 sm:mb-10 bg-gray-300 m-auto sm:m-auto w-4/5 md:w-3/5 block sm:flex rounded-xl border-2 border-green-600 shadow-2xl">
            <div class="text-center m-5">
                <a href="/aloe/{{ $aloe->id }}">
                    <img src="{{ asset('images/'. $aloe->image_path ) }}" alt="" class="text-center inline object-cover w-60 h-60 m-auto my-auto rounded-3xl border-2 border-green-600">
                </a>
            </div>

            <div class="m-auto">
                <h2 class="text-gray-700 font-bold text-5xl pb-8 text-center">
                    {{ $aloe->id }}
                </h2>

                <span class="text-gray-500">
                    oleh <span class="font-bold italic text-gray-800">
                        {{ $aloe->user->name }}
                    </span><br/> pada {{ date('jS M Y', strtotime($aloe->updated_at)) }} 
                </span>

                <div class="p-2 pt-8 text-left block">
                    <table class="table-auto font-bold italic text-gray-800">
                        <tr>
                            <td>Jumlah Daun</td>
                            <td>: {{ $aloe->jumlahDaun }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tunas</td>
                            <td>: {{ $aloe->jumlahTunas }}</td>
                        </tr>
                        <tr>
                            <td>Warna Daun</td>
                            <td>: {{ $aloe->warnaDaun }}</td>
                        </tr>
                        <tr>
                            <td>Kondisi Daun</td>
                            <td>: {{ $aloe->kondisiDaun }}</td>
                        </tr>
                    </table>

                    <!-- Jika login maka edit dan hapus data dimunculkan -->
                    @if (isset(Auth::user()->id) /* && Auth::user()->id == $aloe->user_id*/)
                    <br/>
                    <br/>
                    <span class="leading-8 inline-block">
                        <a href="/aloe/{{ $aloe->id }}/edit"
                            class="text-gray-700 bg-green-300 italic font-extrabold hover:bg-green-400
                            text-lg rounded-3xl py-3 px-5 ">
                            Edit
                        </a>
                    </span>

                    <span class="leading-8 inline-block">
                        <form action="/aloe/{{ $aloe->id }}"
                            method="POST">
                            @csrf
                            @method('delete')
    
                            <button
                                class="text-red-500 bg-green-300 italic font-extrabold hover:bg-green-400
                                text-lg rounded-3xl py-2 px-3"
                                type="submit">
                            Hapus
                            </button>
                        </form>
                    </span>
                    @endif
                </div>
            </div>
        </div>    

    <!-- Jika tidak ada data maka munculkan pesan -->       
    @empty
        <p class="mt-15 px-15 md:w-3/5 sm:w-4/5 m-auto text-center py-10 bg-yellow-300 text-xl rounded-xl">
            Tidak ada Aloe Vera<br />
            Silahkan
            @if (!Auth::check())
                Login terlebih dahulu untuk
            @endif
            Tambahkan Aloe Vera
        </p>
    @endforelse
@endsection