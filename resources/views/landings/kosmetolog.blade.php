@extends('layouts.base', ['title' => 'Kosmetolog Wrocław - Katarzyna Księżyk-Dydak'])

@section('content')

    {{-- <!-- Page wrapper --> --}}
    <main class="page-wrapper">
        @include('layouts.partials/kosmetolog-navbar',['isDark' => false])

        <section class="overflow-hidden mb-md-2 mb-lg-3" style="background-color: #f2f7f6;">
            <div class="container pt-2 pt-sm-3 pb-sm-2 pb-md-3 py-xl-3">
                <div class="kosmetolog-hero row align-items-center py-5 mt-4 mt-md-4 my-lg-4 my-xl-5 my-xxl-5">
                    <div
                        class="col-lg-7 order-lg-2 d-flex justify-content-center justify-content-lg-end mb-4 mb-md-5 mb-lg-0 pb-3 pb-md-0">
                        <div class=" me-lg-n4 me-xl-n5" style="max-width: 667px;">
                            <div class="parallax-layer" data-depth="0.1">
                                <img src="/img/kosmetolog/hero2.png" alt="Layer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <h1 class="display-4 text-center text-lg-start pb-sm-2 pb-md-3">Magister kosmetologii i certyfikowany szkoleniowiec</h1>
                        <p class="fs-lg text-center text-lg-start pb-xl-2 mx-auto mx-lg-0 mb-5"
                            style="max-width: 520px;">Specjalizuję się w indywidualnych terapiach skórnych, łącząc wiedzę naukową z praktyką.<br><br>Stawiam na kompleksową opiekę, profesjonalne doradztwo i&nbsp;najwyższą jakość usług, nieustannie rozwijając swoje kompetencje.</p>
                        <div class="text-center text-lg-start">
                            <a class="btn btn-lg btn-primary" href="#uslugi" rel="noopener">Zacznijmy współpracę</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>



        {{-- Moje usugi --}}
        <section class="pb-5" id="uslugi">
            <div class="container pb-sm-3 pt-5 mb-md-2 mb-lg-3">
                <div class="row g-4">
                    <div class="col-md-5 order-md-2" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <img class="object-fit-cover w-100 h-100 rounded-3"
                             src="/img/kosmetolog/uslugi.webp" alt="Image">
                    </div>
                    <div class="col-md-7 order-md-1" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                            <h2 class="mb-xl-4">Moje usługi</h2>
                            <p class="mb-4 mb-xl-5">Oferuję szeroki zakres zabiegów kosmetologicznych ukierunkowanych na poprawę kondycji, jakości i wyglądu skóry. Każda procedura poprzedzona jest szczegółową konsultacją, podczas której dobieram najbardziej skuteczną i bezpieczną metodę działania.</p>
                            <ul class="list-unstyled mb-4 mb-xl-5">
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Oczyszczanie twarzy</strong> – delikatne, skuteczne metody oczyszczania dopasowane do rodzaju cery.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Peelingi chemiczne</strong> – profesjonalne terapie złuszczające ukierunkowane na trądzik, przebarwienia, nierówną teksturę i oznaki starzenia.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Mezoterapia mikroigłowa</strong> – stymulacja skóry do regeneracji poprzez precyzyjne mikronakłucia.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Mezoterapia igłowa</strong> – intensywne odżywienie i nawilżenie skóry za pomocą substancji aktywnych podawanych śródskórnie.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Stymulatory tkankowe</strong> – zaawansowane preparaty rewitalizujące poprawiające napięcie, jędrność i jakość skóry.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Zabiegi na trądzik</strong> – terapie redukujące zmiany zapalne, przebarwienia pozapalne i&nbsp;blizny.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Zabiegi odmładzające</strong> – procedury wygładzające, rozświetlające i regenerujące skórę, przywracające jej młodzieńczy wygląd.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          <strong>Tworzenie beauty planów</strong> – kompleksowy dobór zabiegów gabinetowych oraz pielęgnacji domowej, oparty na analizie skóry i indywidualnych potrzebach klienta.
                                </li>
                            </ul>
                            <p>Każdy plan zabiegowy tworzę w oparciu o indywidualne potrzeby, analizę skóry i&nbsp;realne oczekiwania klienta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Webinary --}}
        <section class="pb-5" id="webinary">
            <div class="container pb-sm-3 mb-md-2 mb-lg-3">
                <div class="row g-4">
                    <div class="col-md-7 order-2" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                            <h2 class="mb-xl-4">Webinary</h2>
                            <p class="mb-4">Tworzę specjalistyczne webinary dla kosmetologów oraz osób związanych z branżą beauty, które chcą poszerzać swoją wiedzę i rozwijać kompetencje bez względu na miejsce i czas.</p>
                            <p>Moje szkolenia online łączą praktyczną wiedzę, aktualne standardy pracy oraz najnowsze trendy z zakresu terapii skórnych, technik zabiegowych i bezpieczeństwa. Każdy webinar to konkretne, merytoryczne treści i gotowe rozwiązania możliwe do natychmiastowego wdrożenia w gabinecie.</p>
                            <p>Webinary idealne są zarówno dla osób początkujących, jak i doświadczonych specjalistów, którzy chcą aktualizować swoją wiedzę zgodnie z dynamicznie rozwijającą się branżą.</p>
                        </div>
                    </div>
                    <div class="col-md-5 order-1 gallery" data-video="true" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">

                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=t4rh9FfHqPQ&mute=0">
                                    <img class="object-fit-cover w-100 h-100 rounded-3" src="/img/kosmetolog/webinary.webp" alt="Webinary Kosmetolog Wrocław">
                                </a>
                    </div>

                </div>
            </div>
        </section>


        {{-- Szkolenia --}}
        <section class="pb-5" id="szkolenia">
            <div class="container pb-sm-3 mb-md-2 mb-lg-3">
                <div class="row g-4">
                    <div class="col-md-5 order-md-2" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <img class="object-fit-cover w-100 h-100 rounded-3"
                             src="/img/kosmetolog/szkolenia.webp" alt="Image">
                    </div>
                    <div class="col-md-7 order-md-1" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                            <h2 class="mb-xl-4">Szkolenia</h2>
                            <p class="mb-4 mb-xl-5">Prowadzę szkolenia teoretyczne i praktyczne dla kosmetologów oraz specjalistów beauty, skupiając się na nowoczesnych, skutecznych i bezpiecznych technikach pracy. Stawiam na indywidualne podejście, wsparcie na każdym etapie nauki oraz przekazywanie wiedzy, którą można od razu wykorzystać w gabinecie.</p>
                            <p><strong>Zakres szkoleń obejmuje:</strong></p>
                            <ul class="list-unstyled mb-4 mb-xl-5">
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          mezoterapię mikroigłową
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          mezoterapię igłową
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          peelingi chemiczne
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          stymulatory tkankowe
                                </li>
                            </ul>
                            <p>Moim celem jest przygotowanie specjalistów do samodzielnej, pewnej i profesjonalnej pracy z klientem oraz wspieranie ich w rozwoju zawodowym.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statystyki -->
        <section class="bg-secondary position-relative py-4 py-md-5">
            <div class="container position-relative z-2">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col">
                        <div class="py-3 my-lg-2 my-xl-3 text-center">
                            <div class="text-dark display-4 mb-1">13</div>
                            <p class="fs-l mb-0">Lat doświadczenia</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-3 ps-xl-4 my-lg-2 my-xl-3 text-center">
                            <div class="text-dark display-4 mb-1">500+</div>
                            <p class="fs-l mb-0">Przeszkolonych klientek</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center">
                        <div class="py-3 my-lg-2 my-xl-3 text-center">
                            <div class="text-dark display-4 mb-1">50+</div>
                            <p class="fs-l mb-0">Wystąpień publicznych</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-end">
                        <div class="py-3 pe-xl-4 my-lg-2 my-xl-3 text-center">
                            <div class="text-dark display-4 mb-1">1000+</div>
                            <p class="fs-l mb-0">Wykonanych terapii zabiegowych</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Gallery -->
        <section class="container py-5 my-lg-3" id="galeria">
            <div class="py-2 py-sm-3 py-md-4 my-md-2 my-xxl-3">
                <h2 class="h1 text-center pt-xxl-1">Zobacz jak pracuję</h2>
                <p class="fs-lg text-center pb-3">Relacje ze swojej pracy prowadzę często na <a href="https://nstagram.com/kosmetolog.wroclaw.pl" target="_blank">Instagramie</a> - zapraszam!</p>
                <div class="d-flex position-relative align-items-center justify-content-center pb-4 my-4">
                    <a class="btn btn-icon btn-primary stretched-link me-3 me-sm-4" href="https://instagram.com/kosmetolog.wroclaw.pl" aria-label="Instagram" target="_blank">
                        <i class="ai-instagram"></i>
                    </a>
                    <h2 class="mb-0">kosmetolog.wroclaw.pl</h2>
                </div>
                <div class="gallery row g-3 g-md-4" data-video="true">
                    <div class="col-sm-6">
                        <div class="row g-3 g-md-4">
                            <div class="col-6">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="/img/kosmetolog/galeria-3.webp">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/kosmetolog/galeria-3.webp" alt="Jak pracuję">
                                    </div>
                                </a>

                            </div>
                            <div class="col-6">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="/img/kosmetolog/galeria-5.webp">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img"
                                                                                    src="/img/kosmetolog/galeria-5.webp"
                                                                                    alt="Jak pracuję"></div>
                                </a>

                            </div>
                            <div class="col-12">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=Pz6FsBj-mnQ&mute=0">
                                    <div
                                        class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                                        <i class="ai-play-filled"></i>
                                    </div>
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/kosmetolog/galeria-2.webp"
                                             alt="Jak pracuję">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row g-3 g-md-4">
                            <div class="col-6 order-sm-2">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=PwxkCRkMe7c&mute=0">
                                    <div
                                        class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                                        <i class="ai-play-filled"></i>
                                    </div>
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/kosmetolog/galeria-6.webp"
                                             alt="Jak pracuję">
                                    </div>
                                </a>
                           

                            </div>
                            <div class="col-6 order-sm-3">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=ZMMYVyOoTVs&mute=0">
                                    <div
                                        class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                                        <i class="ai-play-filled"></i>
                                    </div>
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/kosmetolog/galeria-4.webp"
                                             alt="Jak pracuję">
                                    </div>
                                </a>

                            </div>
                            <div class="col-12 order-sm-1">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=t4rh9FfHqPQ&mute=0">
                                    <div
                                        class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                                        <i class="ai-play-filled"></i>
                                    </div>
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/kosmetolog/galeria-1.webp"
                                             alt="Jak pracuję">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- Instagram -->
        {{-- <section class="pt-2 pt-sm-4 pt-md-5">
            <div class="container pt-5 mt-1 mt-sm-0 mt-lg-2 mt-xl-4 mt-xxl-5">
                <div class="d-flex position-relative align-items-center">
                    <a class="btn btn-icon btn-primary stretched-link me-3 me-sm-4" href="https://http://instagram.com/kosmetolog.wroclaw.pl" aria-label="Instagram" target="_blank">
                        <i class="ai-instagram"></i>
                    </a>
                    <h2 class="mb-0">kosmetolog.wroclaw.pl</h2>
                </div>
            </div>
            <div class="overflow-auto container" data-simplebar>
                <div class="row row-cols-8 g-0 pt-4 pb-2 pb-xl-0 mt-2 mt-lg-3" style="min-width: 1200px;">

                    <!-- Items -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">2048</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">320</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/01.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">1764</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">283</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/02.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2"><i
                                        class="ai-heart me-1"></i><span class="text-light fs-sm me-3">4560</span><i
                                        class="ai-message me-1"></i><span class="text-light fs-sm">417</span></div>
                            </div>
                            <div class="zoom-effect-wrapper"><img class="zoom-effect-img"
                                                                  src="/img/landing/influencer/instagram/03.webp"
                                                                  alt="Image"></div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">1505</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">274</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/04.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">3708</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">198</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/05.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">2925</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">409</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/06.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">1348</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">120</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/07.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">963</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">98</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/influencer/instagram/08.webp"
                                     alt="Image">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}

 

        {{-- <!-- Kontakt --> --}}
        <section class="container" data-bs-theme="dark" id="kontakt">
            <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5 contact-hero overflow-hidden">

                <div class="card-body position-relative z-2 py-5">
                    <form class="mx-auto" style="max-width: 800px;" method="POST" id="contact-form" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <h2 class="h1 card-title text-center pb-4">Porozmawiajmy</h2>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <label class="form-label fs-base" for="name" id="name">Imię i nazwisko</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Imię i nazwisko" required
                                name="name">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fs-base" for="company" id="company">Firma</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Nazwa Twojej firmy"
                                name="company">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fs-base" for="email" id="email">E-mail</label>
                                <input class="form-control form-control-lg" type="email" placeholder="Adres e-mail"
                                       required name="email">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fs-base" for="phone" id="phone">Telefon</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Numer telefonu" required
                                name="phone">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label fs-base" for="message">Jak mogę Ci pomóc?</label>
                                <textarea class="form-control form-control-lg" rows="6"
                                          placeholder="Opisz swoj sprawę" required name="message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label fs-base d-block">Czego potrzebujesz?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_sklep" id="checkbox_sklep">
                                    <label class="form-check-label fs-base" for="checkbox_sklep">Chcę umówić się na zabieg</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_strona" id="checkbox_strona">
                                    <label class="form-check-label fs-base" for="checkbox_strona">Chcę umówić się na szkolenie</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_development" id="checkbox_development">
                                    <label class="form-check-label fs-base" for="checkbox_development">Potrzebuję konsultacji</label>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center pt-4">
                                {{-- {!! HCaptcha::displayButton('Wyślij formularz', [
                                    'class' => 'btn btn-lg btn-light'
                                ]) !!} --}}
                                <button class="btn btn-lg btn-light" type="submit">Wyślij formularz</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    {{-- <!-- Footer --> --}}
    <footer class="footer bg-dark py-5 mt-4" data-bs-theme="dark">
        <div class="container pt-1 pt-sm-2 pt-md-2 pt-lg-3 pt-xl-3">
            <div class="border-bottom text-center pb-4">
                <a class="navbar-brand d-inline-flex text-nav py-0 mb-3 mb-md-4" href="/">
                    <img src="/img/kosmetolog/kosmetolog_logo_white.svg" alt="" class="kosmetolog-logo-footer">
                </a>

                <div class="d-flex flex-column align-items-center">
                    <div class="nav mx-n2 mx-lg-n4 mb-1 mb-sm-2">
                      <a class="nav-link text-white px-2 px-lg-3" href="mailto:&#107;&#111;&#110;&#116;&#097;&#107;&#116;&#064;&#107;&#111;&#115;&#109;&#101;&#116;&#111;&#108;&#111;&#103;&#046;&#119;&#114;&#111;&#099;&#108;&#097;&#119;&#046;&#112;&#108;;">&#107;&#111;&#110;&#116;&#097;&#107;&#116;&#064;&#107;&#111;&#115;&#109;&#101;&#116;&#111;&#108;&#111;&#103;&#046;&#119;&#114;&#111;&#099;&#108;&#097;&#119;&#046;&#112;&#108;</a>
                    </div>
                    <div class="nav flex-column mb-3 mb-sm-4">
                      <a class="nav-link py-1 px-0" href="tel:+48606102530">tel. 728&nbsp;000&nbsp;590</a>
                    </div>
                  </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-center pt-4 mt-2 mt-sm-0">

                <p class="nav fs-sm order-sm-1 text-center mb-0">
                    <span class="text-body-secondary">&copy; 2025 -  Kosmetolog Wrocław - Katarzyna Księżyk-Dydak </span>
                </p>
            </div>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
