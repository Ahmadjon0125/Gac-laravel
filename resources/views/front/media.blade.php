@extends('layouts.app')

@section('content')
            <!-- hero section  -->
            <section
                class="product_hero"
                style="
                    background: url('{{ asset('img/mediaBg.jpg') }}') center / cover
                        no-repeat;
                "
            >
                <div class="container">
                    <div>
                        <h2>Фото и видео</h2>
                    </div>
                </div>
                <!-- client2  -->
            </section>

            <section class="modelTab">
                <div class="container">
                    <div class="modelTab_inner mediaTab">
                        <div class="tabs-nav">
                            <a class="tab-button active" data-tab="photo">
                                Фото
                            </a>
                            <span></span>
                            <a class="tab-button" data-tab="video">Видео</a>
                        </div>

                        <div class="tabs-content-wrapper">
                            <div
                                class="tab-content active"
                                data-tab-content="photo"
                            >
                                <div class="model-list photoList">
                                    <!-- Swiper -->

                                    <div class="swiper mySwiper20">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide slide20">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-1.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide20">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-2.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide20">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-3.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide20">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-4.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide20">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-5.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide20">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-5.jpg"
                                                />
                                            </div>
                                        </div>
                                        <div class="swiper-controls">
                                            <div
                                                class="swiper-button-prev prev"
                                            ></div>
                                            <div
                                                class="swiper-pagination"
                                            ></div>
                                            <div
                                                class="swiper-button-next next"
                                            ></div>
                                        </div>
                                    </div>
                                    <div
                                        thumbsSlider=""
                                        class="swiper mySwiper10"
                                    >
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide slide10">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-1.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide10">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-2.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide10">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-3.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide10">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-4.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide10">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-5.jpg"
                                                />
                                            </div>
                                            <div class="swiper-slide slide10">
                                                <img
                                                    src="https://swiperjs.com/demos/images/nature-5.jpg"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" data-tab-content="video">
                                <div class="model-list">
                                    <div class="video-block">
                                        <!-- MAIN VIDEO -->
                                        <a
                                            href="https://www.youtube.com/watch?v=Cgyfk7BKT_E"
                                            data-fancybox="gallery"
                                            class="main-video"
                                            id="mainVideo"
                                        >
                                            <div
                                                class="absolute inset-0 bg-cover bg-center"
                                                style="
                                                    background: linear-gradient(
                                                        180deg,
                                                        rgba(0, 0, 0, 0) 0%,
                                                        rgba(0, 0, 0, 0) 61%,
                                                        rgba(0, 0, 0, 0.8) 100%
                                                    );
                                                "
                                            ></div>
                                            <img
                                                src="./img/contactBg.jpg"
                                                alt=""
                                                id="mainPoster"
                                            />

                                            <img
                                                src="./img/play.png"
                                                class="play-btn"
                                                width="70"
                                                height="70"
                                                alt=""
                                            />

                                            <p
                                                class="main-title"
                                                id="mainTitle"
                                            >
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing
                                            </p>
                                        </a>

                                        <!-- THUMBS -->
                                        <div class="video-thumbs">
                                            <div class="thumb active">
                                                <div
                                                    class="thumbIn"
                                                    data-video="https://www.youtube.com/watch?v=Cgyfk7BKT_E"
                                                    data-poster="./img/contactBg.jpg"
                                                    data-title="Lorem ipsum dolor sit amet, consectetur adipiscing"
                                                >
                                                    <img
                                                        src="./img/contactBg.jpg"
                                                        alt="Video 1 Cover"
                                                    />
                                                    <img
                                                        src="./img/play.png"
                                                        class="play-btn small"
                                                        alt="Play"
                                                    />
                                                </div>
                                                <p class="thumb-title">
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                </p>
                                            </div>

                                            <div class="thumb">
                                                <div
                                                    class="thumbIn"
                                                    data-video="https://www.youtube.com/watch?v=0o877L25dUo&list=RD0o877L25dUo&start_radio=1"
                                                    data-poster="./img/aboutBg3.jpg"
                                                    data-title="Ut enim ad minim veniam, quis nostrud"
                                                >
                                                    <img
                                                        src="./img/aboutBg3.jpg"
                                                        alt="Video 2 Cover"
                                                    />
                                                    <img
                                                        src="./img/play.png"
                                                        class="play-btn small"
                                                        alt="Play"
                                                    />
                                                </div>
                                                <p class="thumb-title">
                                                    Ut enim ad minim veniam,
                                                    quis nostrud
                                                </p>
                                            </div>

                                            <div class="thumb">
                                                <div
                                                    class="thumbIn"
                                                    data-video="https://www.youtube.com/watch?v=DATxgwFcvrA"
                                                    data-poster="./img/aboutBg.jpg"
                                                    data-title="Duis aute irure dolor in reprehenderit"
                                                >
                                                    <img
                                                        src="./img/aboutBg.jpg"
                                                        alt="Video 3 Cover"
                                                    />
                                                    <img
                                                        src="./img/play.png"
                                                        class="play-btn small"
                                                        alt="Play"
                                                    />
                                                </div>
                                                <p class="thumb-title">
                                                    Duis aute irure dolor in
                                                    reprehenderit
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONST all last section -->
          <x-form/>
  @endsection