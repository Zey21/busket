@extends('layout.user')

@section('content')

<div class="rect-600-5 bg-white purple bor10 mgl-700 mgt-200 align-c cont-shdw">
    <br>
    <div class="rect-100 mgl-250 pdt-20">
        <a href="">
            <img class="icon-1 borlog-1" src="https://media.discordapp.net/attachments/697333601410220033/984081540155838464/User_2.png" alt="user">
            Profil
        </a>
    </div>
    <div class="pdt-20">
        <h3>
            <a class="purple" href="">
                All Status Info
            </a>
        </h3>
    </div>  
    <div class="pdt-20">
        <h3>
            <a class="purple" href="">
                About
            </a>
        </h3>
    </div>
    <div class="pdt-20">
        <h3>
            <a class="purple" href="">
                Report
            </a>
        </h3>
    </div>
    <div class="pdt-20">
        <h3>
            <a class="purple" href="/home">
                Logout
            </a>
        </h3>
    </div>
</div>

@endsection