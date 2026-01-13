@extends('layouts.app')

@php
    $locale = app()->getlocale();
@endphp

@section('content')
    <!-- hero section  -->
    <section class="hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide"
                        style="
                                background: linear-gradient(
                                        180deg,
                                        rgba(0, 0, 0, 0.4),
                                        rgba(0, 0, 0, 0) 40%
                                    ),
                                    linear-gradient(
                                        rgba(0, 0, 0, 0.08),
                                        rgba(0, 0, 0, 0.08)
                                    ),
                                    url('{{ asset('storage/' . $slider->bgImage) }}') center/cover
                                        no-repeat;
                            ">



                        <div class="swiper_content">
                            <h2>{{ $slider->{'title_' . $locale} }}</h2>
                            <p>{!! $slider->{'text_' . $locale} !!}</p>
                            <a href="{{ $slider->link }}" class="btnMain">Подробнее</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-controls">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- Модельный ряд section  -->
    <section class="modelTab">
        <div class="container">
            <div class="modelTab_inner">
                <h2>Модельный ряд</h2>

                <div class="tabs-nav">
                    <a class="tab-button active" data-tab="all">
                        BCE
                    </a>
                    <span></span>
                    <a class="tab-button" data-tab="suv">SUV</a>
                    <span></span>
                    <a class="tab-button" data-tab="sedan"> SEDAN </a>
                    <span></span>
                    <a class="tab-button" data-tab="mpv">MPV</a>
                </div>

                <div class="tabs-content-wrapper">
                    <div class="tab-content active" data-tab-content="all">
                        <div class="model-list">
                            @foreach ($products as $product)
                                <div>
                                    <img src="{{ asset('storage/' . $product->mainImg) }}" alt="" />
                                    <h3>{{ $product->{'mainTitle_' . $locale} }}</h3>
                                    <a href="{{ route('productInPage', [
                                        'id' => $product->id,
                                        'slug' => $product->{'slug_' . $locale},
                                    ]) }}"
                                        class="btnMain">Подробнее</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-content" data-tab-content="suv">
                        <div class="model-list">
                            @foreach ($products->where('category', 'suv') as $product)
                                <div>
                                    <img src="{{ asset('storage/' . $product->mainImg) }}" alt="" />
                                    <h3>{{ $product->{'mainTitle_' . $locale} }}</h3>
                                    <a href="{{ route('productInPage', [
                                        'id' => $product->id,
                                        'slug' => $product->{'slug_' . $locale},
                                    ]) }}"
                                        class="btnMain">Подробнее</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-content" data-tab-content="sedan">
                        <div class="model-list">
                            @foreach ($products->where('category', 'sedan') as $product)
                                <div>
                                    <img src="{{ asset('storage/' . $product->mainImg) }}" alt="" />
                                    <h3>{{ $product->{'mainTitle_' . $locale} }}</h3>
                                    <a href="{{ route('productInPage', [
                                        'id' => $product->id,
                                        'slug' => $product->{'slug_' . $locale},
                                    ]) }}"
                                        class="btnMain">Подробнее</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-content" data-tab-content="mpv">
                        <div class="model-list">
                            @foreach ($products->where('category', 'mpv') as $product)
                                <div>
                                    <img src="{{ asset('storage/' . $product->mainImg) }}" alt="" />
                                    <h3>{{ $product->{'mainTitle_' . $locale} }}</h3>
                                    <a href="{{ route('productInPage', [
                                        'id' => $product->id,
                                        'slug' => $product->{'slug_' . $locale},
                                    ]) }}"
                                        class="btnMain">Подробнее</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="modelTab_bottom">
                <div>
                    <h3>Ключевые технологические преимущества</h3>
                    <p>
                        Sed ut perspiciatis, unde omnis iste natus error
                        sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam eaque ipsa, quae
                        ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt, explicabo. Nemo enim
                        ipsam voluptatem, quia voluptas sit, aspernatur
                        aut odit aut fugit.
                    </p>
                    <a href="" class="btnMain">Подробнее</a>
                </div>
                <div>
                    <img src="./img/car4.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Aksiya section  -->
    <section class="promotion"
        style="
                    background: linear-gradient(
                            270deg,
                            rgba(25, 25, 25, 1),
                            rgba(25, 25, 25, 0) 100%
                        ),
                        url('./img/promotionBg.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                ">
        <div class="container">
            <div class="promotion_inner">
                <div>
                    <h2>Акции и специальные предложения</h2>
                    <p>
                        Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis
                        suscipit laboriosam, nisi ut aliquid ex ea
                        commodi consequatur? Quis autem vel eum iure
                        reprehenderit, qui in ea voluptate velit
                        esse, quam nihil molestiae consequatur,
                        vel illum, qui dolorem eum fugiat, quo
                        voluptas nulla pariatur.
                    </p>
                    <a href="" class="btnMain">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
    <!-- last news section  -->
    <section class="lastNews">
        <div class="container">
            <div class="lastNews_inner">
                <div class="lastNews_top">
                    <h2>Последние новости и обновления</h2>
                    <a href="/news.html" class="btnMain">
                        <span>
                            Все новости
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.750001 12.75L6.7751 6.75L0.75 0.75" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="lastNews_cards">
                    <a href="/newsIn.html">
                        <img src="./img/car1.jpg" alt="" />
                        <p>20.11.2025</p>
                        <h3>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                        </h3>
                    </a>
                    <a href="/newsIn.html">
                        <img src="./img/car2.jpg" alt="" />
                        <p>20.11.2025</p>
                        <h3>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                        </h3>
                    </a>
                    <a href="/newsIn.html">
                        <img src="./img/car3.jpg" alt="" />
                        <p>20.11.2025</p>
                        <h3>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CONST all last section -->
    <x-form />
@endsection
