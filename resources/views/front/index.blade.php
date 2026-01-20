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
                            <div class="container">

                                <h2>{{ $slider->{'title_' . $locale} }}</h2>
                                <p>{!! $slider->{'text_' . $locale} !!}</p>
                                <a href="{{ $slider->link }}" class="btnMain">{{ __('app.readMore') }}</a>
                            </div>
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
                <h2>{{ __('app.range') }}</h2>

                <div class="tabs-nav">
                    <a class="tab-button active" data-tab="all">
                        {{ __('app.all') }}
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
                                        class="btnMain">{{ __('app.readMore') }}</a>
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
                                        class="btnMain">{{ __('app.readMore') }}</a>
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
                                        class="btnMain">{{ __('app.readMore') }}</a>
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
                                        class="btnMain">{{ __('app.readMore') }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="modelTab_bottom">
                <div>
                    <h3>{{ $advantages->{'title_' . $locale} }}</h3>
                    <p>
                        {!! $advantages->{'text_' . $locale} !!}
                    </p>
                    <a href="" class="btnMain">{{ __('app.readMore') }}</a>
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
                    <h2>{{ $offer->{'title_' . $locale} }}</h2>
                    <p>
                        {!! $offer->{'text_' . $locale} !!}
                    </p>
                    <a href="" class="btnMain">{{ __('app.readMore') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- last news section  -->
    <section class="lastNews">
        <div class="container">
            <div class="lastNews_inner">
                <div class="lastNews_top">
                    <h2>{{ __('app.latest') }}</h2>
                    <a href="{{ route('newsPage') }}" class="btnMain">
                        <span>
                            {{ __('app.allNews') }}
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.750001 12.75L6.7751 6.75L0.75 0.75" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="lastNews_cards">
                    @foreach ($news as $new)
                        <a
                            href="{{ route('newsInPage', [
                                'id' => $new->id,
                                'slug' => $new->{'slug_' . $locale},
                            ]) }}">
                            <img src="{{ asset('storage/' . $new->img) }}" alt="" />
                            <p>{{ date('d.m.Y', strtotime($new->newsDate)) }}</p>
                            <h3>
                                {{ $new->{'title_' . $locale} }}
                            </h3>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- CONST all last section -->
    <x-form />
@endsection
