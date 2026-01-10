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
                <h2>Свяжитесь с нами</h2>
                <form action="" class="formSection_form">
                    <input type="text" placeholder="ФИО" />
                    <input type="tel" placeholder="Номер телефона" />
                    <textarea placeholder="Комментарий" rows="5"></textarea>
                    <button class="btnMain" type="submit">
                        <span>Отправить
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