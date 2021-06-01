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
    <main>
        <section class="section-about" style="padding: 10rem 5rem 9rem 5rem">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    {{ $section1['title'] }}
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    {!! $section1['description'] !!}
                </div>
                <div class="col-1-of-2">
                    <div class="composition">

                        <img srcset="{{ $section1['image1'] ?? asset('images/content/food-large1.jpg') }} 300w, {{ $section1['image1'] ?? asset('images/content/food-large1.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 1"
                                class="composition__photo composition__photo--p1"
                                src="{{ $section1['image1'] ?? asset('images/content/food-large1.jpg') }}">

                        <img srcset="{{ $section1['image2'] ?? asset('images/content/food-large2.jpg') }} 300w, {{ $section1['image2'] ?? asset('images/content/food-large2.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 2"
                                class="composition__photo composition__photo--p2"
                                src="{{ $section1['image2'] ?? asset('images/content/food-large2.jpg') }}">

                        <img srcset="{{ $section1['image3'] ?? asset('images/content/food-large3.jpg') }} 300w, {{ $section1['image3'] ?? asset('images/content/food-large3.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 3"
                                class="composition__photo composition__photo--p3"
                                src="{{ $section1['image3'] ?? asset('images/content/food-large3.jpg') }}">

                        <!--
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                        -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section-about" style="padding: 5rem">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    {{ $section2['title'] }}
                </h2>
            </div>

            <div class="row">
                {!! $section2['description'] !!}
            </div>
        </section>
    </main>
@stop