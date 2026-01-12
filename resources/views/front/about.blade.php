@extends('layouts.app')

@php
    $locale = app()->getLocale();
@endphp
@section('content')
    <!-- hero section  -->
    <section class="about_hero"
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
                        url('{{ asset('img/aboutBg.jpg') }}') center/cover no-repeat;
                ">
        <div class="container">
            <div class="about_hero_in">
                <h2>{{ $aboutOne->{'title_' . $locale} }}</h2>
                <h3>{{ $aboutOne->{'title2_' . $locale} }}</h3>
                <p>
                    {!! $aboutOne->{'text_' . $locale} !!}
                </p>
            </div>
        </div>
    </section>

    <!-- 2-section -->
    <section>
        <div class="container">
            <div class="about2">
                <h2>{{ $aboutTwo->{'title_' . $locale} }}</h2>
                <p>

                    {!! $aboutTwo->{'text_' . $locale} !!}
                </p>
                <div>
                    <img src="{{ asset('storage/' . $aboutTwo->image1) }}" alt="" />
                    <img src="{{ asset('storage/' . $aboutTwo->image2) }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- 3-section -->
    <section class="about3"
        style="
                    background: linear-gradient(
                            270deg,
                            rgba(25, 25, 25, 0),
                            rgba(25, 25, 25, 1),
                            rgba(25, 25, 25, 1) 100%
                        ),
                        url('{{ asset('img/aboutBg3.jpg') }}') center / cover no-repeat;
                ">
        <div class="container">
            <div class="about3_in">
                <h2>{{ $aboutThree->{'title_' . $locale} }}</h2>
                <p>
                    {!! $aboutThree->{'text_' . $locale} !!}
                </p>
            </div>
        </div>
    </section>
    <!-- 4-section -->
    <section class="about8">
        <div class="container">
            <div class="about8In">
                <div>
                    <img src="{{ asset('storage/' . $aboutFour->img) }}" alt="" />
                </div>
                <div class="about8div">
                    <h2>{{ $aboutFour->{'title_' . $locale} }}</h2>
                    <p>
                        {!! $aboutFour->{'text_' . $locale} !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONST all last section -->
    <x-form />
@endsection
