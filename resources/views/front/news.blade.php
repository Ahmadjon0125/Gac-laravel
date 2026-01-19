@extends('layouts.app')

@php
    $locale= app()->getLocale()
@endphp

@section('content')
    <!-- hero section  -->
    <section class="product_hero"
        style="
                    background: url('{{ asset('img/newsBg.jpg') }}') center / cover no-repeat;
                ">
        <div class="container">
            <div>
                <h2>Новости</h2>
            </div>
        </div>
        <!-- client2  -->
    </section>

    <section class="news">
        <div class="container">
            <h2>Последние новости и обновления</h2>
            <div class="lastNews_cards">
                @foreach ($news as $new)
                    
               
                <a href="{{ route('newsInPage', [
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
            <div class="showDiv">
                <a class="showMore"> Показать еще</a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(
                ".lastNews_cards > a"
            );
            const showMore = document.querySelector(".showMore");

            let visible = 6;
            const step = 3;

            // 1️⃣ hammasini yashiramiz
            cards.forEach((card) => (card.hidden = true));

            // 2️⃣ birinchi 6 tasini ko‘rsatamiz
            for (let i = 0; i < visible && i < cards.length; i++) {
                cards[i].hidden = false;
            }

            // 3️⃣ Show more bosilganda
            showMore.addEventListener("click", (e) => {
                e.preventDefault();

                for (
                    let i = visible; i < visible + step && i < cards.length; i++
                ) {
                    cards[i].hidden = false;
                }

                visible += step;

                // 4️⃣ hammasi ochilsa — tugma yo‘qolsin
                if (visible >= cards.length) {
                    showMore.style.display = "none";
                }
            });
        });
    </script>

    <!-- CONST all last section -->
    <x-form />
@endsection
