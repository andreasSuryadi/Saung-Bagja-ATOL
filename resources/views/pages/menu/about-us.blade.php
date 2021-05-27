@extends('pages.base.public')

@section('content')
    <!-- For Header Content -->
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Tentang Kami</span>
                <span class="heading-primary--sub">Menyediakan makanan enak dari seluruh Indonesia</span>
            </h1>
        </div>
    </header>
    <article>
        <div class="konten">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Tentang Saung Bagja
                </h2>
            </div>
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