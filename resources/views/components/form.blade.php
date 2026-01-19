    <section class="formSection"
        style="
                    background: linear-gradient(
                            270deg,
                            rgba(25, 25, 25, 0),
                            rgba(25, 25, 25, 0.9) 57%,
                            rgba(25, 25, 25, 0.9) 100%
                        ),
                        url('{{ asset('img/formBg.jpg') }}') center / cover no-repeat;
                ">
        <div class="container">
            <div class="formSection_in">
                <h2>{{ __('app.contactUs') }}</h2>
                <form action="{{ route('feedback.store') }}" class="formSection_form" method="post">
                    @csrf
                    <input type="text" name="full_name" placeholder="{{ __('app.fullName') }}" />
                    <input type="tel" name="phone" placeholder="{{ __('app.phoneNumber') }}" />
                    <textarea placeholder="{{ __('app.comment') }}" name="comment" rows="5"></textarea>
                    <button class="btnMain" type="submit">
                        <span>{{ __('app.send') }}
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.750001 12.75L6.7751 6.75L0.75 0.75" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>