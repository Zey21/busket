@extends('layout.user')

@section('content');

<div class="rect-600-5 bg-white purple mgl-700 mgt-100  bor10 cont-shdw">
    <br>
    <h1 class="align-c rect-600 bg-purple white">
        Pembayaran
    </h1>
    <div class="mgt-100">
        <form action="/print">
            <div class="align-c">
                <h2>Lokasi Awal ==> Tujuan</h2>
            </div>
            <div class="align-c">
                <h3>Waktu ==> Waktu</h3>
            </div>
            <div class="align-c">
                <h2>
                    Harga
                </h2>
            </div>
            <div class="align-c">
                <h2>Nama Bus</h2>
            </div>
            <div class="align-c">
                <button class="bg-purple borlog white rect-200-04">Bayar</button>
            </div>
        </form>
    </div>
</div>

@endsection