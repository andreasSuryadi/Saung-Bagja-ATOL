@extends('pages.base.public')

@section('content')
    <!-- For Header Content -->
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Berita</span>
                <span class="heading-primary--sub">Semua berita yang ada di Saung Bagja</span>
            </h1>
        </div>
    </header>
    <article>
        <div class="konten">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Berita
                </h2>
            </div>
        </div>
        <div class="food">
            <div class="food-card">
                <div class="food-card-head">
                    <img src="{{ asset('images/content/food-menu.jpg') }}">
                </div>
                <div class="food-card-body">
                    <h1>NASI TIMBEL</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid.	</p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            <div class="food-card">
                <div class="food-card-head">
                    <img src="{{ asset('images/content/food-menu.jpg') }}">
                </div>
                <div class="food-card-body">
                    <h1>NASI LIWET</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid.	</p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            <div class="food-card">
                <div class="food-card-head">
                    <img src="{{ asset('images/content/food-menu.jpg') }}">
                </div>
                <div class="food-card-body">
                    <h1>KAREDOK</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid.	</p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            <div class="food-card">
                <div class="food-card-head">
                    <img src="{{ asset('images/content/food-menu.jpg') }}">
                </div>
                <div class="food-card-body">
                    <h1>KAREDOK</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid.	</p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
    </article>
@stop