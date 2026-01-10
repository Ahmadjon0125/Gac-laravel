@extends('layouts.app')

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
                    <div>
                        <img src="{{ asset('img/tecno1.svg') }}" alt="" />
                        <h3>Безопасность</h3>
                    </div>
                    <div>
                        <img src="{{ asset('img/tecno2.svg') }}" alt="" />
                        <h3>Двигатель и батарея</h3>
                    </div>
                    <div>
                        <img src="{{ asset('img/tecno3.svg') }}" alt="" />
                        <h3>Интеллектуальная система</h3>
                    </div>
                    <div>
                        <img src="{{ asset('img/tecno4.svg') }}" alt="" />
                        <h3>Передовые технологии</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2-section  -->
    <section class="tecno3">
        <div class="container">
            <div class="tecno3In">
                <h2>Безопасность</h2>
                <p>
                    Sed ut perspiciatis, unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam
                    rem aperiam eaque ipsa, quae ab illo inventore
                    veritatis et quasi architecto beatae vitae dicta
                    sunt, explicabo. Nemo enim ipsam voluptatem, quia
                    voluptas sit, aspernatur aut odit aut fugit, sed
                    quia consequuntur magni dolores eos, qui ratione
                    voluptatem sequi nesciunt, neque porro quisquam est,
                    qui dolorem ipsum, quia dolor sit, amet,
                    consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora incidunt, ut labore et
                    dolore magnam aliquam quaerat voluptatem. Ut enim ad
                    minima veniam, quis nostrum exercitationem ullam
                    corporis suscipit laboriosam, nisi ut aliquid ex ea
                    commodi consequatur? Quis autem vel eum iure
                    reprehenderit, qui in ea voluptate velit esse, quam
                    nihil molestiae consequatur, vel illum,
                    qui dolorem eum fugiat, quo voluptas nulla pariatur.
                </p>

                <a href="https://www.youtube.com/watch?v=4FUnXaq_VWk" data-fancybox>
                    <img alt="Video poster" width="100%" height="100%" src="{{ asset('img/poster.jpg') }}" />
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
