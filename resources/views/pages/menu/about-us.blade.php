@extends('pages.base.public')

@section('content')
    <article>
        <div class="banner">
            <h2>INI ADALAH BANNER, IYA KALI MASA BUKAN BANNER</h2>
            <img src="{{ asset('images/content/banner.jpg') }}">
        </div>
        <div class="konten">
            <h2>TENTANG SAUNG BAGJA</h2>
            <div class="kiri">
                <img src="{{ asset('images/content/banner.jpg') }}">
                <p>INI ADALAH KONTEN, IYA KALI MASA BUKAN KONTEN</p>
                <p>INI ADALAH KONTEN, IYA KALI MASA BUKAN KONTEN</p>
            </div>
            <div class="kanan">
                <img src="{{ asset('images/content/banner.jpg') }}">
                <p>INI ADALAH KONTEN, IYA KALI MASA BUKAN KONTEN</p>
                <p>INI ADALAH KONTEN, IYA KALI MASA BUKAN KONTEN</p>
            </div>
        </div>
    </article>
@stop