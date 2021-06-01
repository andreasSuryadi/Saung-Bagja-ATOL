@extends('pages.base.public')

@section('content')
    <!-- For Header Content -->
    <header class="header" style="background-image: linear-gradient(to right bottom, rgba(180, 76, 69, 0.8), rgba(83, 28, 24, 0.8)), url(<?= (isset($banner['banner'])) ? $banner['banner'] : asset('images/content/food-banner.jpg') ?>);">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">{{ $banner['title'] }}</span>
                <span class="heading-primary--sub">{{ $banner['subtitle'] }}</span>
            </h1>
        </div>
    </header>
    <article>
        <div class="food" style="padding-top: 5rem">
            @foreach($news_data as $news)
                @php
                    $news->getMedia('banner');
                    $banner = $news && $news->media ? $news->media[0]->getUrl() : null;
                @endphp
                <div class="food-card">
                    <div class="food-card-head">
                        <img src="{{ $banner ?? asset('images/content/food-menu.jpg') }}">
                    </div>
                    <div class="food-card-body">
                        <h1>{{ $news->title }}</h1>
                        @if(strlen($news->description) > 140)
                            {!! substr($news->description, 0 , 140) !!}...
                        @else
                            {!! $news->description !!}
                        @endif
                        <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            @endforeach
        </div>
    </article>
@stop