@extends('pages.base.public')

@section('content')
    <!-- For Header Content -->
    <header class="header" style="background-image: linear-gradient(to right bottom, rgba(180, 76, 69, 0.8), rgba(83, 28, 24, 0.8)), url(<?= (isset($banner['banner'])) ? $banner['banner'] : asset('images/content/food-banner.jpg') ?>);">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">{{ $banner['title'] }}</span>
                <span class="heading-primary--sub">{{ $banner['subtitle'] }}</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">{{ $banner['button'] }}</a>
        </div>
    </header>
    
    <!-- For Main -->
    <main>
        <!-- For Section About -->
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    {{ $about_us['title'] }}
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    {!! $about_us['description'] !!}

                    <a href="#" class="btn-text">{{ $about_us['button'] }} &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">

                        <img srcset="{{ $about_us['image1'] ?? asset('images/content/food-large1.jpg') }} 300w, {{ $about_us['image1'] ?? asset('images/content/food-large1.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 1"
                                class="composition__photo composition__photo--p1"
                                src="{{ $about_us['image1'] ?? asset('images/content/food-large1.jpg') }}">

                        <img srcset="{{ $about_us['image2'] ?? asset('images/content/food-large2.jpg') }} 300w, {{ $about_us['image2'] ?? asset('images/content/food-large2.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 2"
                                class="composition__photo composition__photo--p2"
                                src="{{ $about_us['image2'] ?? asset('images/content/food-large2.jpg') }}">

                        <img srcset="{{ $about_us['image3'] ?? asset('images/content/food-large3.jpg') }} 300w, {{ $about_us['image3'] ?? asset('images/content/food-large3.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 3"
                                class="composition__photo composition__photo--p3"
                                src="{{ $about_us['image3'] ?? asset('images/content/food-large3.jpg') }}">

                        <!--
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                        -->
                    </div>
                </div>
            </div>
        </section>

        <!-- For Section News -->
        <section class="section-tours" id="section-tours">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    {{ $menu['title'] }}
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">The Sea Explorer</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tours</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$297</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">The Forest Hiker</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>7 day tours</li>
                                    <li>Up to 40 people</li>
                                    <li>6 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: medium</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$497</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5 day tours</li>
                                    <li>Up to 15 people</li>
                                    <li>3 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: hard</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$897</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-medium">
                <a href="#" class="btn btn--green">{{ $menu['button'] }}</a>
            </div>
        </section>
    </main>
@stop