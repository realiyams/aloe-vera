@extends('layouts.app')

@section('content')

    <!-- Judul halaman web -->
    <div class="w-4/5 m-auto text-center">
        <div class="py-10 border-b border-gray-200">
            <h1 class="text-6xl">
                Tambahkan Aloe Vera 
            </h1>
        </div>
    </div>

    <!-- tampilkan error jika ada dalam menginputkan data -->
    @if ($errors->any())
        <div class="w-3/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-full mb-4 text-gray-50 bg-red-700 rounded-xl py-4 mt-10 text-center">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form input data -->
    <div>
        <div class="m-auto w-3/5 bg-blue-100 p-1 rounded-xl mt-10">
            <form 
            action="/aloe"
            method="POST"
            enctype="multipart/form-data"
            class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8">
            @csrf

            <!-- input jumlah daun -->
            <div>
                <label for="jumlahDaun" class="inline-flex text-gray-700 text-sm font-bold mb-2 sm:mb-4 pr-4">
                    {{ __('Jumlah Daun ') }}:
                </label>

                <input id="jumlahDaun" type="number" class="form-input w-2/5 sm:w-3/5 @error('jumlahDaun')  border-red-500 @enderror"
                    name="jumlahDaun" value="{{ old('jumlahDaun') }}" placeholder="1" required>

                @error('jumlahDaun')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <!-- input warna daun -->
            <div>
                <label for="warnaDaun" class="inline-flex text-gray-700 text-sm font-bold mb-2 sm:mb-4 pr-5">
                    {{ __(' Warna Daun ') }}:
                </label>

                <input id="warnaDaun" type="text" class="form-input w-2/5 sm:w-3/5 @error('warnaDaun')  border-red-500 @enderror"
                    name="warnaDaun" value="{{  old('warnaDaun') }}" placeholder="Hijau" required>

                @error('warnaDaun')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <!-- input kondisi daun -->
            <div>
                <label for="kondisiDaun" class="inline-flex text-gray-700 text-sm font-bold mb-2 sm:mb-4 pr-4">
                    {{ __('Kondisi Daun ') }}:
                </label>

                <input id="kondisiDaun" type="text" class="form-input w-2/5 sm:w-3/5 @error('kondisiDaun')  border-red-500 @enderror"
                    name="kondisiDaun" value="{{ old('kondisiDaun') }}" placeholder="Gemuk" required>

                @error('kondisiDaun')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <!-- input jumlah tunas -->
            <div>
                <label for="jumlahTunas" class="inline-flex text-gray-700 text-sm font-bold mb-2 sm:mb-4 pr-4">
                    {{ __('Jumlah Tunas ') }}:
                </label>

                <input id="jumlahTunas" type="number" class="form-input w-2/5 sm:w-3/5 @error('jumlahTunas')  border-red-500 @enderror"
                    name="jumlahTunas" value="{{ old('jumlahTunas') }}" placeholder="0" required>

                @error('jumlahTunas')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <!-- upload foto -->
            <div class="pb-6">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg 
                shadow-lg tracking-wide uppercase border-blue-100 cursor-pointer">
                    <span class="text-base leading-normal ">
                        Pilih foto
                    </span>

                    <input type="file"
                        name="image"
                        class="hidden">
                </label>
            </div>
        </div>

        <!-- button submit -->
            <center>
                <button type="submit"
                class="uppercase mt-7 mb-7 bg-green-400 text-gray-100 text-lg
                font-extrabold py-4 px-8 rounded-3xl hover:bg-green-600">
                    Kirim 
                </button>
            </center>
        </form>
    </div>


@endsection