@extends('pages.base.public')

@section('content')
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Saung Bagja</span>
                <span class="heading-primary--sub">Tempat makanan terenak</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a>
        </div>
    </header>
    
    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting tours for adventurous people
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui.
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">Live adventures like you never have before</h3>
                    <p class="paragraph">
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
    </main>
@stop