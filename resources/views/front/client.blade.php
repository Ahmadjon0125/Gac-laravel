@extends('layouts.app')

@section('content')
            <!-- hero section  -->
            <section
                class="product_hero"
                style="
                    background: url('{{ asset('img/clientBg.jpg') }}') center / cover
                        no-repeat;
                "
            >
                <div class="container">
                    <div>
                        <h2>Для клиентов</h2>
                    </div>
                </div>
                <!-- client2  -->
            </section>
            <!-- Гарантия section  -->
            <section>
                <div class="container">
                    <div class="client1">
                        <h2>Гарантия</h2>
                        <p>
                            Nemo enim ipsam voluptatem, quia voluptas sit,
                            aspernatur aut odit aut fugit, sed quia consequuntur
                            magni dolores eos, qui ratione voluptatem sequi
                            nesciunt, neque porro quisquam est, qui dolorem
                            ipsum, quia dolor sit, amet, consectetur,
                            adipisci velit, sed quia non numquam eius
                            modi tempora incidunt, ut labore et dolore
                            magnam aliquam quaerat voluptatem. Ut enim ad
                            minima veniam, quis nostrum exercitationem ullam
                            corporis suscipit laboriosam, nisi ut aliquid ex ea
                            commodi consequatur.
                        </p>
                        <ul class="client1list">
                            <li>
                                <h3>Lorem ipsum dolor sit amet.doc</h3>
                                <div><span>DOC</span>, <span>120кб</span></div>
                                <a href="">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M8 12.088L3.95543 8.04457L4.76457 7.22171L7.42857 9.88571V0H8.57143V9.88571L11.2343 7.22286L12.0446 8.04457L8 12.088ZM1.84686 16C1.32038 16 0.881143 15.824 0.529143 15.472C0.177143 15.12 0.000761905 14.6804 0 14.1531V11.384H1.14286V14.1531C1.14286 14.3291 1.216 14.4907 1.36229 14.6377C1.50857 14.7848 1.66971 14.8579 1.84571 14.8571H14.1543C14.3295 14.8571 14.4907 14.784 14.6377 14.6377C14.7848 14.4914 14.8579 14.3299 14.8571 14.1531V11.384H16V14.1531C16 14.6796 15.824 15.1189 15.472 15.4709C15.12 15.8229 14.6804 15.9992 14.1531 16H1.84686Z"
                                            fill="#191919"
                                        />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <h3>Lorem ipsum dolor sit amet.doc</h3>
                                <div><span>DOC</span>, <span>120кб</span></div>
                                <a href="">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M8 12.088L3.95543 8.04457L4.76457 7.22171L7.42857 9.88571V0H8.57143V9.88571L11.2343 7.22286L12.0446 8.04457L8 12.088ZM1.84686 16C1.32038 16 0.881143 15.824 0.529143 15.472C0.177143 15.12 0.000761905 14.6804 0 14.1531V11.384H1.14286V14.1531C1.14286 14.3291 1.216 14.4907 1.36229 14.6377C1.50857 14.7848 1.66971 14.8579 1.84571 14.8571H14.1543C14.3295 14.8571 14.4907 14.784 14.6377 14.6377C14.7848 14.4914 14.8579 14.3299 14.8571 14.1531V11.384H16V14.1531C16 14.6796 15.824 15.1189 15.472 15.4709C15.12 15.8229 14.6804 15.9992 14.1531 16H1.84686Z"
                                            fill="#191919"
                                        />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <h3>Lorem ipsum dolor sit amet.doc</h3>
                                <div><span>DOC</span>, <span>120кб</span></div>
                                <a href="">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M8 12.088L3.95543 8.04457L4.76457 7.22171L7.42857 9.88571V0H8.57143V9.88571L11.2343 7.22286L12.0446 8.04457L8 12.088ZM1.84686 16C1.32038 16 0.881143 15.824 0.529143 15.472C0.177143 15.12 0.000761905 14.6804 0 14.1531V11.384H1.14286V14.1531C1.14286 14.3291 1.216 14.4907 1.36229 14.6377C1.50857 14.7848 1.66971 14.8579 1.84571 14.8571H14.1543C14.3295 14.8571 14.4907 14.784 14.6377 14.6377C14.7848 14.4914 14.8579 14.3299 14.8571 14.1531V11.384H16V14.1531C16 14.6796 15.824 15.1189 15.472 15.4709C15.12 15.8229 14.6804 15.9992 14.1531 16H1.84686Z"
                                            fill="#191919"
                                        />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Стать дилером section  -->
            <section>
                <div class="container">
                    <div class="client2">
                        <h2>Стать дилером</h2>
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam
                            rem aperiam eaque ipsa, quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta
                            sunt, explicabo. Nemo enim ipsam voluptatem, quia
                            voluptas sit, aspernatur aut odit aut fugit, sed
                            quia consequuntur magni dolores eos, qui ratione
                            voluptatem sequi nesciunt, neque porro quisquam est,
                            qui dolorem ipsum.
                        </p>
                        <form action="" method="post" class="client2Form">
                            <ul>
                                <li>
                                    <label for="Название компании"
                                        >Название компании *
                                    </label>
                                    <input
                                        type="text"
                                        placeholder="Название компании * "
                                        id="Название компании"
                                    />
                                </li>
                                <li>
                                    <label for="Регион">Регион/область *</label>
                                    <select name="" id="Регион">
                                        <option value="">Ташкент</option>
                                        <option value="">Ташкент2</option>
                                    </select>
                                    <svg
                                        viewBox="0 0 15.5061 8.54834"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="15.506104"
                                        height="8.548340"
                                        fill="none"
                                        customFrame="#000000"
                                    >
                                        <rect
                                            id="Frame 46"
                                            width="14.000000"
                                            height="7.000000"
                                            x="0.000000"
                                            y="0.000000"
                                            transform="matrix(1,0,0,-1,0.753052,7.75293)"
                                        />
                                        <path
                                            id="Vector"
                                            d="M14 7L7 0L0 7"
                                            fill-rule="nonzero"
                                            stroke="rgb(24.5192,24.5192,24.5192)"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            transform="matrix(1,0,0,-1,0.753052,7.75293)"
                                        />
                                    </svg>
                                </li>
                                <li>
                                    <label for="Адрес">Адрес *</label>
                                    <input
                                        type="text"
                                        id="Адрес"
                                        placeholder="Адрес *"
                                    />
                                </li>
                                <li>
                                    <label for="Количество"
                                        >Количество сотрудников *</label
                                    >
                                    <input
                                        type="text"
                                        id="Количество"
                                        placeholder="Количество сотрудников *"
                                    />
                                </li>
                                <li>
                                    <label for="Контактное"
                                        >Контактное лицо *</label
                                    >
                                    <input
                                        type="text"
                                        id="Контактное"
                                        placeholder="ФИО"
                                    />
                                </li>
                                <li>
                                    <label for="contact"
                                        >Контактный номер *</label
                                    >
                                    <input
                                        type="tel"
                                        id="contact"
                                        placeholder="+998 99 999 99 99"
                                    />
                                </li>
                            </ul>
                            <div>
                                <label for="textarea"
                                    >Дополнительная информация</label
                                >
                                <textarea
                                    id="textarea"
                                    placeholder="Дополнительная информация"
                                    rows="5"
                                ></textarea>
                            </div>
                            <button type="submit">
                                <div>
                               <span> Отправить</span>
                                <svg
                                    width="8"
                                    height="14"
                                    viewBox="0 0 8 14"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M0.750001 12.75L6.75 6.75L0.75 0.75"
                                        stroke="#191919"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </section>

            <!-- CONST all last section -->
        <x-form/>
     @endsection