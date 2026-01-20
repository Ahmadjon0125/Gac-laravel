@extends('layouts.app')

@php
    $locale= app()->getLocale()
@endphp

@section('content')

            <!-- hero section  -->
            <section
                class="product_hero"
                style="
                    background: url('{{ asset('img/newsBg.jpg') }}') center / cover no-repeat;
                "
            >
                <div class="container">
                    <div>
                        <h2>{{ __('app.news') }}</h2>
                    </div>
                </div>
                <!-- client2  -->
            </section>

            <section>
                <div class="container">
                    <div class="newsIn">
                        <p>{{ date('d.m.Y', strtotime($new->newsDate)) }}</p>
                        <h2>{{ $new->{'title_' . $locale} }}</h2>
                        <img src="{{ asset('storage/' . $new->img) }}" alt="" />
                        <p>
   {!! $new->{'text_' .$locale} !!}
                        </p>
                    </div>
                </div>
            </section>

            <!-- CONST all last section -->
<x-form/>
       @endsection