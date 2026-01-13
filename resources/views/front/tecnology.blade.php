@extends('layouts.app')

@php
    $locale = app()->getLocale();
@endphp

@section('content')
    <!-- hero section  -->
    <section class="tecnoHero"
        style="
                    background: url('{{ asset('img/tecnologyBg.jpg') }}') center/cover
                        no-repeat;
                ">
        <div class="container">
            <div class="tecnoIn_hero">
                <h2>Технологии</h2>
                <div class="tecnoIcons">
                    @foreach ($tecno1 as $tecno)
                        <div>
                            <img src="{{ asset('storage/' . $tecno->icon) }}" alt="" />
                            <h3>{{ $tecno->{'title_' . $locale} }}</h3>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- 2-section  -->
    <section class="tecno3">
        <div class="container">
            <div class="tecno3In">
                <h2>{{ $tecno2->{'title_' . $locale} }}</h2>
                <p>
                    {!! $tecno2->{'text_' . $locale} !!}
                </p>

                <a href="{{ $tecno2->link }}" data-fancybox>
                    <img alt="Video poster" width="100%" height="100%" src="{{ asset('storage/' . $tecno2->poster) }}" />
                    <img src="{{ asset('img/play.png') }}" class="tecnoplay" alt="" />
                </a>
            </div>
        </div>
    </section>

    <!-- 3-section -->
    <section class="tecno4"
        style="
                    background: url('{{ asset('img/tecnoBg.jpg') }}') center / cover
                        no-repeat;
                ">
        <div class="container">
            <div class="tecno4In">
                <h2>{{ $tecno3->{'title_' . $locale} }}</h2>
                <p>
                    {!! $tecno3->{'text_' . $locale} !!}
                </p>
                <ul>
                    <li>
                        <h3><span>{{ $tecno3->speed }}</span>км/ч</h3>
                        <p>Макс. скорость</p>
                    </li>
                    <li>
                        <h3><span>{{ $tecno3->time }}</span>сек</h3>
                        <p>Ускорение 0-100 (многодвигательный)</p>
                    </li>
                    <li>
                        <h3><span>{{ $tecno3->timeOne }}</span>сек</h3>
                        <p>Ускорение 0-100 (один двигатель)</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 4-section -->
    <section class="tecno5"
        style="
                    background: url('{{ asset('img/tecnoBg2.jpg') }}') center / cover
                        no-repeat;
                ">
        <div class="container">
            <div>
                <h2>Высококлассная электроплатформа</h2>
                <ul class="tecno5List">
                    @foreach ($tecno4 as $tecno)
                        <li>
                            <h3>{{ $tecno->{'title_' . $locale} }}</h3>
                            <p>{!! $tecno->{'text_' . $locale} !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- 5-section -->
    <section class="tecno6">
        <div class="container">
            <h2>{{ $tecno5->{'title_' . $locale} }}</h2>
            <p>
                {!! $tecno5->{'text_' . $locale} !!}
            </p>
        </div>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper swiper-wrap2">
                @foreach ($tecno5->images as $image)
                    <div class="swiper-slide swiper-slide2">
                        <img src="{{ asset('storage/' . $image) }}" />
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- 6-section -->
    <section class="tecno7">
        <div class="container">
            <div class="tecno7In">
                <div>
                    <h2>{{ $tecno6->{'title_' . $locale} }}</h2>
                    <p>
                        {!! $tecno6->{'text_' . $locale} !!}
                    </p>
                </div>
                <div>
                    <img src="{{ asset('storage/' . $tecno6->image) }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- CONST all last section -->
    <x-form />
@endsection
