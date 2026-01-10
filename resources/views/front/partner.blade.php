@extends('layouts.app')

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
                <ul>
                    <li>
                        <img src="./img/partner1.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner2.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner3.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner4.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner5.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner6.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner7.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner8.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner9.png" alt="" />
                    </li>
                    <li>
                        <img src="./img/partner10.png" alt="" />
                    </li>
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
