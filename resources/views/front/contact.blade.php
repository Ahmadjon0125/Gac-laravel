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
                        <h2>{{ __('app.contact') }}</h2>
                    </div>
                </div>
                <!-- client2  -->
            </section>

            <section>
                <div class="container">
                    <div class="contact">
                        <ul>
                            <li>
                                <h3>{{ __('app.phone') }}</h3>
                                <a href="tel:{{ $info->phone }}"
                                    >{{ $info->phone }}</a
                                >
                            </li>
                            <li>
                                <h3>{{ __('app.email') }}</h3>
                                <a href="mailto:{{ $info->mail }}">{{ $info->mail }}</a>
                            </li>
                            <li>
                                <h3>{{ __('app.address') }}</h3>
                                <p>
                                    {{ $info->address }}
                                </p>
                            </li>
                            <li>
                                <h3>{{ __('app.point') }}</h3>
                                <p>{{ $info->point }}</p>
                            </li>
                        </ul>
                        <div class="contactDiv">
                            <h2>{{ __('app.contactUs') }}</h2>
                            <form action="{{ route('feedback.store') }}" method="POST" class="contact_form">
                                @csrf
                                <input type="text" name="full_name" placeholder="{{ __('app.fullName') }}" />
                                <input
                                    type="tel"
                                    placeholder="{{ __('app.contactNumber') }}"
                                    name="phone"
                                />
                                <textarea
                                    placeholder="{{ __('app.comment') }}"
                                    rows="7"
                                    name="comment"
                                ></textarea>
                                <button
                                    class="btnMain contactBtn"
                                    type="submit"
                                >
                                    <span
                                        >{{ __('app.send') }}
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
                    src="{{ $info->map }}"
                    width="100%"
                    height="100%"
                    style="border: 0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </section>
      @endsection

