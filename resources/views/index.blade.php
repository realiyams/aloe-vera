@extends('layouts.app')

@section('content')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/WeatherStyle.css') }}" type="text/css">
    <script src="{{ asset('js/WeatherScript.js') }}" defer></script>

    <!-- Judul halaman web dengan gambar background -->
    <div class="background-image grid grid-cols-1 m-auto mb-10">
        <div class="flex text-gray-100 pt-8">
            <div class="m-auto w-4/5 block text-center">
                <h1 class="text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Aloe Vera Plant
                </h1>
            </div>
        </div>
    </div>

    <div class="text-center p-8 mb-10 sm:mb-10 bg-gray-300 m-auto sm:m-auto w-4/5 md:w-3/5 block rounded-xl border-2 border-green-600 shadow-2xl ">
        <!-- isi identitas -->
        <h2 class="uppercase font-extrabold pb-3 text-center underline">Profile</h2>
        <img src="{{ asset('images/profil/profil.jpg') }}" alt="" class="text-center inline object-cover w-32 h-32 mx-3 mb-2 rounded-3xl border-2 border-green-600"> 
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

            <div class="mt-5 text-right m-auto">
                <a
                    href="{{ url('/about') }}"
                    class="bg-green-500 uppercase bg-transparent text-gray-100
                    text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-green-800">
                    Lebih Tahu Lagi ...
                </a>
            </div>  
    </div>

    <!-- Open Weather API -->
    <div class="card-container">
        <div class="card border-green-600 border-2 shadow-2xl">
            <!-- Search Box -->
            <div class="search">
            <input type="text" class="search-bar" placeholder="Search">
            <button class="search-button">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em"
                width="1.5em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                </path>
                </svg>
            </button>
            </div>
        
            <!-- Weather Information From WeatherScript.js -->
            <div class="weather loading">
                <h2 class="city"></h2>
                <h4>Saat Ini</h4>
                <h1 class="temp"></h1>
                <h4 class="feels_like"></h4>
                <div class="detail">
                    <div class="flex">
                    <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon" />
                    <div class="description"></div>
                    </div>
                    <div class="humidity"></div>
                    <div class="wind"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center p-4 mb-10 sm:mb-10 bg-gray-300 m-auto sm:m-auto w-4/5 md:w-3/5 block rounded-xl border-2 border-green-600 shadow-2xl ">
        <!-- HAPPY GARDENING -->
        <h2 class="uppercase font-extrabold pb-3 text-center text-yellow-400">Periksa Cuaca agar berkebun lebih menyenangkan <3 </h2> 
    </div>

    <div class="text-center p-10 bg-gray-300 mb-10 sm:mb-10 m-auto sm:m-auto w-4/5 md:w-3/5 block rounded-xl border-2 border-green-600 shadow-2xl">
        <h2 class="uppercase font-extrabold text-2xl pb-3 text-center">ALOE VERA adalah ... </h2>
        <img src="{{ asset('images/web/AloeContoh.jpg') }}" alt="" class="inline object-cover w-60 h-60 mx-3 mb-5 border-2 border-green-600 rounded-2xl"> 
        
        <p class="italic text-justify mb-5">
            <b>Aloe Vera (Lidah buaya)</b> yang mungkin tidak asing lagi 
            bagi kita. tanaman yang berasal dari <b>Jazirah Arab</b> ini 
            telah menyebar ke wilayah beriklim tropis, semi-topis, dan 
            kering di berbagai belahan dunia. Mulai dari Afrika, Eropa,
            Amerika, Asia bahkan Australia.
        </p>

        <table class=" border-2 border-gray-800 mb-2 m-auto table-fixed position-relative text-left">
            <tr >
                <td class="w-1/3">Kingdom</td>
                <td class="italic">: Plantae</td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td class="italic">: Tracheophyta</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td class="italic">: Magnoliopsida</td>
            </tr>
            <tr>
                <td>Ordo</td>
                <td class="italic">: Asparagales</td>
            </tr>
            <tr>
                <td>Family</td>
                <td class="italic">: Xanthorrhoeaceae</td>
            </tr>
            <tr>
                <td>Genus</td>
                <td class="italic">: Aloe. L</td>
            </tr>
            <tr>
                <td>Species</td>
                <td class="italic">: Aloe Vera. L. Burm. F</td>
            </tr>
        </table>
        <p class="text-sm text-center mb-5 text-gray-500">Taksonomi Aloe Vera</p>

        <p class="italic text-justify mb-5 ">
            <b>Aloe Vera (Lidah buaya)</b> adalah tanaman tanpa batang
            atau berbatang pendek, mempunyai <b>tinggi 60cm hingga 100cm</b> dan
            berkembangbiak dengan cara menumbuhkan <b>tunas</b>. Daun-daunnya 
            berdaging tebal, berwarna hijau atau hijau keabuan, dan kadang
            memiliki bintik putih pada permukaannya.
        </p>

        <p class="italic text-justify mb-10">
            Walaupun tanaman ini belum membuktikan keamanan dalam penggunaannya,
            lidah buaya banyak digunakan untuk <b>kosmetik, produk seperti minuman,
            atau untuk menyembuhkan luka bakar</b>. Lidah buaya yang berada pada web
            ini pernah disimpan didalam ruangan maupun diluar ruangan. Tanpa berlama-lama 
            lagi, mari kita lihat kondisi-kondisi lidah buaya dengan mengklik button
            dibawah ini.
                
            <br>
            <br>
            sumber : <a href="{{ url('https://id.wikipedia.org/wiki/Lidah_buaya') }}" class="hover:bg-gray-500 p-1 rounded-xl">https://id.wikipedia.org/wiki/Lidah_buaya</a>
            <div class="mt-5 text-right m-auto">
                <a
                    href="{{ url('/aloe') }}"
                    class="bg-green-500 uppercase bg-transparent text-gray-100
                    text-xs font-extrabold py-4 px-8 rounded-3xl hover:bg-green-800">
                    Lihat Aloe Vera ...
                </a>
            </div>  
        </p>
    </div>
@endsection