@extends('pages.base.public')

@section('content')
    <!-- For Header Content -->
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Saung Bagja</span>
                <span class="heading-primary--sub">Tempat makanan terenak</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a>
        </div>
    </header>
    
    <!-- For Main -->
    <main>
        <!-- For Section About -->
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Exciting tours for adventurous people
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3>You're going to fall in love with nature</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui.
                    </p>

                    <h3>Live adventures like you never have before</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
                    </p>

                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">

                        <img srcset="{{ asset('images/content/food-large1.jpg') }} 300w, {{ asset('images/content/food-large1.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 1"
                                class="composition__photo composition__photo--p1"
                                src="{{ asset('images/content/food-large1.jpg') }}">

                        <img srcset="{{ asset('images/content/food-large2.jpg') }} 300w, {{ asset('images/content/food-large2.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 2"
                                class="composition__photo composition__photo--p2"
                                src="{{ asset('images/content/food-large2.jpg') }}">

                        <img srcset="{{ asset('images/content/food-large3.jpg') }} 300w, {{ asset('images/content/food-large3.jpg') }} 1000w"
                                sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                alt="Photo 3"
                                class="composition__photo composition__photo--p3"
                                src="{{ asset('images/content/food-large3.jpg') }}">

                        <!--
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                        -->
                    </div>
                </div>
            </div>
        </section>

        <!-- For Section Features -->
        <section class="section-features">
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-compass"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                            <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- For Section Menus -->
        <section class="section-tours" id="section-tours">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Most popular tours
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
                <a href="#" class="btn btn--green">Discover all tours</a>
            </div>
        </section>
    </main>
@stop