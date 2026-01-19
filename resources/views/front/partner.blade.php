@extends('layouts.app')
@php
    $locale = app()->getLocale()
@endphp
@section('content')
    <!-- hero section  -->
    <section class="product_hero"
        style="
                    background: url('{{ asset('img/partnerBg.jpg') }}') center / cover
                        no-repeat;
                ">
        <div class="container">
            <div>
                <h2>Партнеры</h2>
            </div>
        </div>
        <!-- client2  -->
    </section>

    <section>
        <div class="container">
            <div class="partner">
                <p>
    {!! $partner->{'text_' . $locale} !!}
           
                </p>
                <ul>
                    @foreach ($partner->icons as $icon)
                        
          
                    <li>
                        <img src="{{ asset('storage/' . $icon ) }}" alt="" />
                    </li>
           @endforeach

                </ul>
                <div>

                    <a href="">Стать партнером</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONST all last section -->
    <x-form />
@endsection
