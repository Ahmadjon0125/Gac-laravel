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
                <h2>Двигатель и батарея</h2>
                <p>
                    Nemo enim ipsam voluptatem, quia voluptas sit,
                    aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos, qui ratione voluptatem sequi
                    nesciunt, neque porro quisquam est, qui dolorem
                    ipsum, quia dolor sit, amet, consectetur,
                    adipisci velit, sed quia non numquam eius
                    modi tempora incidunt, ut labore et dolore
                    magnam aliquam quaerat voluptatem. Ut enim ad
                    minima veniam.
                </p>
                <ul>
                    <li>
                        <h3><span>300</span>км/ч</h3>
                        <p>Макс. скорость</p>
                    </li>
                    <li>
                        <h3><span>1.9</span>сек</h3>
                        <p>Ускорение 0-100 (многодвигательный)</p>
                    </li>
                    <li>
                        <h3><span>4.9</span>сек</h3>
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
                    <li>
                        <h3>Уровень суперкара</h3>
                        <p>Технология электропривода</p>
                    </li>
                    <li>
                        <h3>Уровень трека</h3>
                        <p>Технология Заднего привода</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 5-section -->
    <section class="tecno6">
        <div class="container">
            <h2>Интеллектуальная система</h2>
            <p>
                Nemo enim ipsam voluptatem, quia voluptas sit,
                aspernatur aut odit aut fugit, sed quia consequuntur
                magni dolores eos, qui ratione voluptatem sequi
                nesciunt, neque porro quisquam est, qui dolorem ipsum,
                quia dolor sit, amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt, ut
                labore et dolore magnam aliquam quaerat voluptatem. Ut
                enim ad minima veniam.
            </p>
        </div>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper swiper-wrap2">
                <div class="swiper-slide swiper-slide2">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                </div>
                <div class="swiper-slide swiper-slide2">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </div>
                <div class="swiper-slide swiper-slide2">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </div>
                <div class="swiper-slide swiper-slide2">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                </div>
                <div class="swiper-slide swiper-slide2">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                </div>
                <div class="swiper-slide swiper-slide2">
                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- 6-section -->
    <section class="tecno7">
        <div class="container">
            <div class="tecno7In">
                <div>
                    <h2>Передовые технологии</h2>
                    <p>
                        • Nemo enim ipsam voluptatem, quia voluptas sit,
                        aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos
                        <br /> <br>
                        • Qui ratione voluptatem sequi nesciunt, neque
                        porro quisquam est, qui dolorem ipsum,
                        quia dolor sit
                        <br /> <br>
                        • Amet, consectetur, adipisci velit, sed quia
                        non numquam eius modi tempora incidunt
                        <br /> <br>
                        • Ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/aboutBg.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- CONST all last section -->
    <x-form />
@endsection
