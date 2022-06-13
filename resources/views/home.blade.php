@extends('layout.main')

@section('content')

<div class="mgl-100 mgt-150 font-Poppins white">
    <h1 class="">Melayani pemesanan Tiket Bus <br> dengan praktis dan mudah</h1>
    <h3 class="">memesan bus tiket secara online untuk memudahkan <br> masyarakat dalam melayani pembelian tiket bus agar lebih <br> praktis dan mudah untuk mendapatkan info lebih lanjut <br> dapatkan <a class="yellow" href="">berita terkini!</a></h3>
</div>
<div class="mgt-100 fint-Poppins white flex">
    <a href="/schedule-non">
        <div type="button" class="rect-500-4 mgl-100 bg-white purple bor10 cont-shdw">
            <img class="mgl-35 pdt-80 icon" src="https://cdn.discordapp.com/attachments/697333601410220033/984059882472878080/List.png" alt="Bus">
            <h1 class="mgl-35 pdt-20">Jadwal</h1>
            <h2 class="mgl-35">menampilkan info jadwal bus <br> yang dapat dipesan</h2>
        </div>
    </a>
    <a href="/login">
        <div type="button" class="rect-500-4 mgl-100 bg-white purple bor10 cont-shdw">
            <img class="mgl-35 pdt-80 icon" src="https://cdn.discordapp.com/attachments/697333601410220033/984059708367306792/Order.png" alt="Bus">
            <h1 class="mgl-35 pdt-20">Tiket</h1>
            <h2 class="mgl-35">dapat menambahkan tiketmu disini</h2>
        </div>
    </a>
    <a href="/non-class">
        <div type="button" class="rect-500-4 mgl-100 bg-white purple bor10 cont-shdw">
            <img class="mgl-35 pdt-80 icon" src="https://cdn.discordapp.com/attachments/697333601410220033/984061370230243358/unknown-removebg-preview.png" alt="Bus">
            <h1 class="mgl-35 pdt-20">Kelas</h1>
            <h2 class="mgl-35">menampilkan fasilitas <br> berdasarkan kelasnya</h2>
        </div>
    </a>
</div>

@endsection