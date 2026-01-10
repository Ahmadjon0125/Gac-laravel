@extends('layouts.app')

@section('content')
            <!-- hero section  -->
            <section
                class="product_hero"
                style="
                    background: url('{{ asset('img/contactBg.jpg') }}') center / cover
                        no-repeat;
                "
            >
                <div class="container">
                    <div>
                        <h2>Контакты</h2>
                    </div>
                </div>
                <!-- client2  -->
            </section>

            <section>
                <div class="container">
                    <div class="contact">
                        <ul>
                            <li>
                                <h3>Телефон</h3>
                                <a href="tel:+99 893 505 45 05"
                                    >+99 893 505 45 05</a
                                >
                            </li>
                            <li>
                                <h3>Электронная почта</h3>
                                <a href="mailto:gac@info.com">gac@info.com</a>
                            </li>
                            <li>
                                <h3>Адрес</h3>
                                <p>
                                    Узбекистан, г. ТашкентУл. Темур Малик, дом
                                    17а
                                </p>
                            </li>
                            <li>
                                <h3>Ориентиры</h3>
                                <p>Ресторан Хон-Атлас, ТРЦ Чимган, Экобазар</p>
                            </li>
                        </ul>
                        <div class="contactDiv">
                            <h2>Свяжитесь с нами</h2>
                            <form action="" class="contact_form">
                                <input type="text" placeholder="ФИО" />
                                <input
                                    type="tel"
                                    placeholder="Номер телефона"
                                />
                                <textarea
                                    placeholder="Комментарий"
                                    rows="7"
                                ></textarea>
                                <button
                                    class="btnMain contactBtn"
                                    type="submit"
                                >
                                    <span
                                        >Отправить
                                        <svg
                                            width="8"
                                            height="14"
                                            viewBox="0 0 8 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0.750001 12.75L6.7751 6.75L0.75 0.75"
                                                stroke="white"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONST all last section -->
            <section class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.095335550496!2d69.35291769999999!3d41.3502815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef52b68c4277b%3A0x704a52cfbe784a9!2zU09TIC0g0YDQsNC30YDQsNCx0L7RgtC60LAg0YHQsNC50YLQvtCyINCyINGC0LDRiNC60LXQvdGC0LUsINGB0L7Qt9C00LDQvdC40LUg0YHQsNC50YLQvtCyINCyINGC0LDRiNC60LXQvdGC0LUsIHNlbyDQsiDRgtCw0YjQutC10L3RgtC1LCDRgdC-0LfQtNCw0L3QuNC1INGB0LDQudGC0L7QsiDQsiDRgtCw0YjQutC10L3RgtC1!5e0!3m2!1sen!2s!4v1766667305402!5m2!1sen!2s"
                    width="100%"
                    height="100%"
                    style="border: 0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </section>
      @endsection
