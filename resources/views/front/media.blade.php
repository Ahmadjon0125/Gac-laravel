@extends('layouts.app')
@php
    $locale = app()->getLocale();
@endphp
@section('content')
    <!-- hero section  -->
    <section class="product_hero"
        style="
                    background: url('{{ asset('img/mediaBg.jpg') }}') center / cover
                        no-repeat;
                ">
        <div class="container">
            <div>
                <h2>{{ __('app.photoVideo') }}</h2>
            </div>
        </div>
        <!-- client2  -->
    </section>

    <section class="modelTab">
        <div class="container">
            <div class="modelTab_inner mediaTab">
                <div class="tabs-nav">
                    <a class="tab-button active" data-tab="photo">
                        {{ __('app.photo') }}
                    </a>
                    <span></span>
                    <a class="tab-button" data-tab="video">{{ __('app.video') }}</a>
                </div>

                <div class="tabs-content-wrapper">
                    <div class="tab-content active" data-tab-content="photo">
                        <div class="model-list photoList">
                            <!-- Swiper -->

                            <div class="swiper mySwiper20">
                                <div class="swiper-wrapper">
                                    @foreach ($photos->images as $image)
                                        <div class="swiper-slide slide20">
                                            <img src="{{ asset('storage/' . $image) }}" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-controls">
                                    <div class="swiper-button-prev prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next next"></div>
                                </div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper10">
                                <div class="swiper-wrapper">
                                    @foreach ($photos->images as $image)
                                        <div class="swiper-slide slide10">
                                            <img src="{{ asset('storage/' . $image) }}" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" data-tab-content="video">
                        <div class="model-list">
                            <div class="video-block">
                                <!-- MAIN VIDEO -->
                                <a href="https://www.youtube.com/watch?v=Cgyfk7BKT_E" data-fancybox="gallery"
                                    class="main-video" id="mainVideo">
                                    <div class="absolute inset-0 bg-cover bg-center"
                                        style="
                                                    background: linear-gradient(
                                                        180deg,
                                                        rgba(0, 0, 0, 0) 0%,
                                                        rgba(0, 0, 0, 0) 61%,
                                                        rgba(0, 0, 0, 0.8) 100%
                                                    );
                                                ">
                                    </div>
                                    <img src="./img/contactBg.jpg" style="background: cover / center " alt=""
                                        id="mainPoster" />

                                    <img src="{{ asset('img/play.png') }}" class="play-btn" width="70" height="70"
                                        alt="" />

                                    <p class="main-title" id="mainTitle">
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing
                                    </p>
                                </a>

                                <!-- THUMBS -->
                                <div class="video-thumbs">
                                    @foreach ($videos as $video)
                                        <div class="thumb active">
                                            <div class="thumbIn" data-video="{{ $video->link }}"
                                                data-poster="{{ asset('storage/' . $video->poster) }}"
                                                data-title="{{ $video->{'title_' . $locale} }}">
                                                <img src="{{ asset('storage/' . $video->poster) }}" alt="Video 1 Cover" />
                                                <img src="{{ asset('img/play.png') }}" class="play-btn small"
                                                    alt="Play" />
                                            </div>
                                            <p class="thumb-title">
                                                {{ $video->{'title_' . $locale} }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONST all last section -->
    <x-form />
@endsection
