@extends('layouts.app')

@section('content')
    <!-- judul halaman web -->
    <div class="w-4/5 m-auto text-center mb-10">
        <div class="py-10 border-b border-gray-200">
            <h1 class="text-6xl"> 
                Aloe Vera ke {{ $aloe_veras->id }}
            </h1>
        </div>
    </div>

    <p class="my-10 px-15 md:w-3/5 sm:w-4/5 m-auto text-center py-7 bg-yellow-300 text-xl rounded-xl">
        Halaman Web ini sedang dalam tahap pengembangan 
    </p>  

    <!-- Tampilan data -->
    <div class="text-center p-8 mb-10 sm:mb-10 bg-gray-300 m-auto sm:m-auto w-4/5 md:w-3/5 block sm:flex rounded-xl border-2 border-green-600 shadow-2xl">
        <div class="text-center m-5">
                <img src="{{ asset('images/'. $aloe_veras->image_path ) }}" alt="" class="text-center inline object-cover w-60 h-60 m-auto my-auto rounded-3xl border-2 border-green-600">
        </div>
        <div class="m-auto">
            <h2 class="text-gray-700 font-bold text-5xl pb-8 text-center">
                {{ $aloe_veras->id }}
            </h2>

            <span class="text-gray-500">
                oleh <span class="font-bold italic text-gray-800">
                    {{ $aloe_veras->user->name }}
                </span><br/> pada {{ date('jS M Y', strtotime($aloe_veras->updated_at)) }} 
            </span>

            <div class="pt-8 text-left block">
                <table class="table-auto font-bold italic text-gray-800">
                    <tr>
                        <td>Jumlah Daun</td>
                        <td>: {{ $aloe_veras->jumlahDaun }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Tunas</td>
                        <td>: {{ $aloe_veras->jumlahTunas }}</td>
                    </tr>
                    <tr>
                        <td>Warna Daun</td>
                        <td>: {{ $aloe_veras->warnaDaun }}</td>
                    </tr>
                    <tr>
                        <td>Kondisi Daun</td>
                        <td>: {{ $aloe_veras->kondisiDaun }}</td>
                    </tr>
                </table>
            </div> 
        </div>
    </div>
    <div class="mt-5 text-center m-auto pb-10">
        <a
            href="{{ url('/aloe') }}"
            class="bg-green-500 uppercase bg-transparent text-gray-100
            text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-green-800">
            Kembali ...
        </a>
    </div> 
@endsection

