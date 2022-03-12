@extends('layouts.app')
@section('content')
    <section class="header">
        <nav>
            <a href="./HOME PAGE.html"><img src="{{ asset('img/BUCC.png') }}" alt="BUCC LOGO">
                <style>
                    img {
                        width: 5%;
                        height: 5%;
                    }

                </style>
            </a>
            <div class="nav-links">
                <!-- <p>logo.PNG" alt="Aleq" width="160" height="145" / -->
                <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="./FIND MY CLASS.html">Find classes</a></li>
                    <li><a href="">Contact</a></li>
                </ul>

            </div>
        </nav>
        <div class="text-box">
            <h1 style="padding: 0px 20%">BUCC FRESHERS HELP-DESK</h1>
            <p class="margin-top" style="padding: 0px 15%">
                Welcome to Babcock University Computer Club, We are pleased to have
                you here.
            </p>
            <a href="" class="hero-btn"> FOR MORE INFORMATION VISIT </a>
        </div>
    </section>
@endsection
