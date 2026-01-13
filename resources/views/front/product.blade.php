@extends('layouts.app')

@php
    $locale = app()->getLocale();
@endphp

@section('content')
    <!-- hero section  -->
    <section class="product_hero" style="background: url('{{ asset('img/productBg.jpg') }}') center / cover no-repeat;">
        <div class="container">
            <div>
                <h2>Продукты</h2>
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

        </div>
    </section>

    <!-- CONST all last section -->
    <x-form />
@endsection
