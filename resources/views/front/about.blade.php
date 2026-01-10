@extends('layouts.app')

@section('content')
    <!-- hero section  -->
    <section class="about_hero"
        style="
                    background: linear-gradient(
                            180deg,
                            rgba(0, 0, 0, 0.4),
                            rgba(0, 0, 0, 0) 40%
                        ),
                        linear-gradient(
                            rgba(0, 0, 0, 0.08),
                            rgba(0, 0, 0, 0.08)
                        ),
                        url('{{ asset('img/aboutBg.jpg') }}') center/cover no-repeat;
                ">
        <div class="container">
            <div class="about_hero_in">
                <h2>О нас</h2>
                <h3>Немного о нашей компании</h3>
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
                    reprehenderit.
                </p>
            </div>
        </div>
    </section>

    <!-- 2-section -->
    <section>
        <div class="container">
            <div class="about2">
                <h2>Lorem ipsum dolor sit amet, consectetur</h2>
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
                    qui dolorem eum fugiat, quo voluptas nulla pariatur?
                    At vero eos et accusamus et iusto odio dignissimos
                    ducimus, qui blanditiis praesentium voluptatum
                    deleniti atque corrupti, quos dolores et quas
                    molestias excepturi sint, obcaecati cupiditate non
                    provident, similique sunt in culpa, qui officia
                    deserunt mollitia animi, id est laborum et dolorum
                    fuga. Et harum quidem rerum facilis est et expedita
                    distinctio. Nam libero tempore, cum soluta nobis est
                    eligendi optio, cumque nihil impedit, quo minus id,
                    quod maxime placeat, facere possimus, omnis voluptas
                    assumenda est, omnis dolor repellendus. Temporibus
                    autem quibusdam et aut officiis debitis aut rerum
                    necessitatibus saepe eveniet, ut et voluptates
                    repudiandae sint et molestiae non recusandae. Itaque
                    earum rerum hic tenetur a sapiente delectus, ut aut
                    reiciendis voluptatibus maiores alias consequatur
                    aut perferendis doloribus asperiores repellat.
                </p>
                <div>
                    <img src="{{ asset('img/car1.jpg') }}" alt="" />
                    <img src="{{ asset('img/car2.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- 3-section -->
    <section class="about3"
        style="
                    background: linear-gradient(
                            270deg,
                            rgba(25, 25, 25, 0),
                            rgba(25, 25, 25, 1),
                            rgba(25, 25, 25, 1) 100%
                        ),
                        url('{{ asset('img/aboutBg3.jpg') }}') center / cover no-repeat;
                ">
        <div class="container">
            <div class="about3_in">
                <h2>Lorem ipsum dolor sit amet</h2>
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
                    commodi consequatur.
                </p>
            </div>
        </div>
    </section>
    <!-- 4-section -->
    <section class="about8">
        <div class="container">
            <div class="about8In">
                <div>
                    <img src="{{ asset('img/about8.jpg') }}" alt="" />
                </div>
                <div class="about8div">
                    <h2>Ut enim ad minim veniam</h2>
                    <p>
                        Quis autem vel eum iure
                        reprehenderit, qui in ea voluptate velit esse,
                        quam nihil molestiae consequatur, vel illum,
                        qui dolorem eum fugiat, quo voluptas nulla
                        pariatur? At vero eos et accusamus et iusto odio
                        dignissimos ducimus, qui blanditiis praesentium
                        voluptatum deleniti atque corrupti, quos dolores
                        et quas molestias excepturi sint,
                        obcaecati cupiditate non provident,
                        similique sunt in culpa, qui officia deserunt
                        mollitia animi, id est laborum et dolorum fuga.
                        Et harum quidem rerum facilis est et expedita
                        distinctio. Nam libero tempore, cum soluta nobis
                        est eligendi optio, cumque nihil impedit, quo
                        minus id, quod maxime placeat, facere possimus,
                        omnis voluptas assumenda est, omnis dolor
                        repellendus.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONST all last section -->
    <x-form/>
@endsection
