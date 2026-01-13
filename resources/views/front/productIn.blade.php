@extends('layouts.app')

@php
    $locale = app()->getLocale();
@endphp

@section('content')
    <!-- hero section  -->
    <section class="prodInHero"
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
                        url('{{ asset('storage/' . $product->mainBg) }}') center/cover no-repeat;
                ">
        <div class="container">
            <div class="prodIn_hero">
                <h2>{{ $product->{'mainTitle_' . $locale} }}</h2>
                <p>{!! $product->{'mainText_' . $locale} !!}</p>
            </div>
        </div>
    </section>

    <!-- 2-section  -->
    <section>
        <div class="container">
            <div class="prodIn2">
                <h3>{{ $product->{'title_' . $locale} }}</h3>
                <p>
                    {!! $product->{'text_' . $locale} !!}
                </p>
            </div>
        </div>
    </section>
    <!-- 3-section -->
    <section class="prodIn3">
        @foreach ($product->slides1->take(3) as $slide1)
            <img src="{{ asset('storage/' . $slide1) }}" alt="" />
        @endforeach

    </section>

    <!-- 4-section -->
    <section class="prodswiper">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($product->slides1 as $slide1)
                    <div class="swiper-slide"
                        style="
                                background: url('{{ asset('storage/' . $slide1) }}') center/cover
                                    no-repeat;
                            ">
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

    <!-- 5-section -->
    <section class="prodIn3">
        @foreach ($product->slides2->take(3) as $slide2)
            <img src="{{ asset('storage/' . $slide2) }}" alt="" />
        @endforeach

    </section>

    <!-- 6-section -->
    <section class="prodswiper">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($product->slides1 as $slide1)
                    <div class="swiper-slide"
                        style="
                                background: url('{{ asset('storage/' . $slide1) }}') center/cover
                                    no-repeat;
                            ">
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

    <section class="prod8">
        <div class="container">
            <div class="prod8In">
                <div class="prod8Img">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="" />
                </div>
                <div>
                    <h2>{{ $product->{'lastTitle_' . $locale} }}</h2>
                    <p>
                        {!! $product->{'lastText_' . $locale} !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- CONST all last section -->
    <x-form />
@endsection
