@extends('layouts.base', ['title' => 'Tworzenie Sklepów WooCommerce | Strony WordPress i Rozwiązania Digital - WooSklepy.pl'])

@section('content')

    {{-- <!-- Page wrapper --> --}}
    <main class="page-wrapper">
        @include('layouts.partials/kosmetolog-navbar',['isDark' => false])

        {{-- <!-- Hero --> --}}
        <section class="overflow-hidden">
            <div class="container pt-2 pt-sm-3 pb-sm-2 pb-md-3 py-xl-3">
                <div class="row align-items-center py-5 mt-4 mt-md-4 my-lg-4 my-xl-5 my-xxl-5">
                    <div
                        class="col-lg-7 order-lg-2 d-flex justify-content-center justify-content-lg-end mb-4 mb-md-5 mb-lg-0 pb-3 pb-md-0">
                        <div class="parallax me-lg-n4 me-xl-n5" style="max-width: 667px;">
                            <div class="parallax-layer" data-depth="0.1">
                                <img src="/img/woosklepy/hero-01.png" alt="Layer">
                            </div>
                            {{-- <div class="parallax-layer" data-depth="-0.2">
                                <img src="/img/landing/business-consulting/hero/02.png" alt="Layer">
                            </div>
                            <div class="parallax-layer" data-depth="0.25">
                                <img src="/img/landing/business-consulting/hero/03.png" alt="Layer">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <h1 class="display-3 text-center text-lg-start pb-sm-2 pb-md-3">Skuteczne rozwiązania dla Twojej firmy</h1>
                        <p class="fs-lg text-center text-lg-start pb-xl-2 mx-auto mx-lg-0 mb-5"
                            style="max-width: 420px;">Specjalizujemy się w tworzeniu sklepów WooCommerce, stron WordPress i&nbsp;dedykowanych rozwiązań, które wspierają rozwój Twojego biznesu.</p>
                        {{-- <div class="input-group mx-auto mx-lg-0" style="max-width: 420px;">
                            <span class="input-group-text text-body-secondary">
                                <i class="ai-mail"></i>
                            </span>
                            <input class="form-control" type="email" placeholder="Enter your email">
                            <button class="btn btn-primary" type="button">Book a call</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        {{-- <!-- Services --> --}}
        <section class="container pt-1 mt-lg-1 mt-xl-2 mt-xxl-3" id="uslugi">
            <h2 class="h1 text-center pt-3 pt-sm-3 pt-md-3 pt-xl-3 mt-lg-0 mt-xl-0 mb-5">Nasze usługi</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

                {{-- <!-- Item --> --}}
                <div class="col">
                    <div class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden">
                        <div class="card-body pb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 128 128"><g class="text-primary"><path fill="currentColor" d="M108.6 46.9c-2.3-.2-6.7 1-8.7 10.8c0 5.9 1.4 9.5 3.6 10.8c4.1 1.2 8.9-4.3 8.9-10.2c.2-4.1.4-9.2-3.8-11.4"/><path fill="currentColor" d="M116.3 25.8H11.7C5.2 25.8 0 31 0 37.4v40c0 6.4 5.2 11.7 11.7 11.7h104.7c6.4 0 11.7-5.2 11.7-11.7v-40c-.1-6.4-5.3-11.6-11.8-11.6M44 80s-6.9-9.1-8.5-16c-1.6-6.8-2-3.7-2-3.7S28 72.7 22.3 80.6s-8.5-3.9-8.5-3.9c-2-2.4-7.7-37.3-7.7-37.3c3.2-8.9 8.7-1.6 8.7-1.6l5.5 28.4s8.5-17.4 11.4-21.9c2.8-4.5 7.7-3.2 8.1 1.4c.4 4.7 5.1 17.4 5.1 17.4c.4-13.4 5.9-26.2 6.7-28.2s9.7-4.5 8.1 4.1C55.8 48.5 52 68.6 53 79.6c-2.7 8.3-9 .4-9 .4m35.9-4.5c-2.6 1.2-12.3 7.9-19.2-7.1C56.4 53.3 66 42.2 66 42.2s12.5-10.7 21 3.5c6.9 15.6-4.5 28.6-7.1 29.8m31.8 0c-2.6 1.2-12.3 7.9-19.2-7.1c-4.3-15.1 5.3-26.2 5.3-26.2s12.6-10.8 21.1 3.4c6.9 15.7-4.6 28.7-7.2 29.9"/><path fill="currentColor" d="M76.7 46.9c-2.3-.2-6.7 1-8.7 10.8c0 5.9 1.4 9.5 3.6 10.8c4.1 1.2 8.9-4.3 8.9-10.2c.3-4.1.5-9.2-3.8-11.4M61.3 89.1l22.3 13.1l-4.7-13.1l-12.8-3.6z"/></g></svg>
                            <h3 class="h4">Sklepy internetowe na platformie WooCommerce</h3>
                            <p class="mb-0">Projektujemy i wdrażamy sklepy internetowe oparte na WooCommerce – skalowalne, szybkie i zoptymalizowane pod potrzeby Twojego biznesu.</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Item --> --}}
                <div class="col">
                    <div class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden">
                        <div class="card-body pb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="zoom: 0.9;
    margin-bottom: 5px;"><g class="text-primary"><path fill="currentColor" fill-rule="evenodd" d="M0 12a12 12 0 0 0 6.763 10.799L1.039 7.116A12 12 0 0 0 0 11.999m20.1-.605c0-1.483-.533-2.51-.99-3.309c-.607-.99-1.178-1.826-1.178-2.815c0-1.103.836-2.13 2.015-2.13c.053 0 .104.007.155.01A11.95 11.95 0 0 0 12 0C7.807 0 4.12 2.151 1.973 5.408c.282.01.548.014.773.014c1.255 0 3.198-.152 3.198-.152c.646-.038.723.913.076.989c0 0-.65.076-1.373.114l4.37 12.998l2.626-7.876l-1.869-5.121a22 22 0 0 1-1.26-.115c-.646-.038-.57-1.027.077-.989c0 0 1.982.153 3.16.153c1.256 0 3.199-.153 3.199-.153c.647-.038.723.913.076.989c0 0-.65.076-1.373.114l4.337 12.899l1.197-3.999c.518-1.66.913-2.852.913-3.879m-7.89 1.655L8.61 23.51a12 12 0 0 0 7.374-.192a1 1 0 0 1-.085-.165zm10.32-6.807q.078.573.08 1.234c0 1.217-.228 2.586-.912 4.298l-3.666 10.597A11.99 11.99 0 0 0 24 12c0-2.086-.533-4.047-1.47-5.757"/></g></svg>
                            <h3 class="h4">Strony internetowe WordPress oraz dedykowane</h3>
                            <p class="mb-0">Tworzymy profesjonalne strony internetowe na WordPress oraz dedykowane rozwiązania, które wyróżnią Twoją firmę na rynku.</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Item --> --}}
                <div class="col">
                    <div class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden">
                        <div class="card-body pb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20"><g class="text-primary" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path fill="currentColor" d="M1.59 9.331a1 1 0 0 1 1.412-.074l3.334 3a1 1 0 0 1-1.338 1.486l-3.334-3a1 1 0 0 1-.074-1.412"/><path fill="currentColor" d="M6.41 6.331a1 1 0 0 1-.074 1.412l-3.334 3a1 1 0 1 1-1.338-1.486l3.334-3a1 1 0 0 1 1.412.074m12 3a1 1 0 0 1-.074 1.412l-3.334 3a1 1 0 1 1-1.338-1.486l3.334-3a1 1 0 0 1 1.412.074"/><path fill="currentColor" d="M13.59 6.331a1 1 0 0 1 1.412-.074l3.334 3a1 1 0 0 1-1.338 1.486l-3.334-3a1 1 0 0 1-.074-1.412m-1.827-2.796a1 1 0 0 1 .702 1.228l-3 11a1 1 0 0 1-1.93-.526l3-11a1 1 0 0 1 1.228-.702"/></g></svg>
                            <h3 class="h4">Software Development – dedykowane rozwiązania i&nbsp;rozszerzenia</h3>
                            <p class="mb-0">Projektujemy oprogramowanie dostosowane do Twojego biznesu oraz tworzymy funkcjonalne rozszerzenia dla sklepów WooCommerce i stron internetowych.</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Item --> --}}
                <div class="col">
                    <div class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden">
                        <div class="card-body pb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g class="text-primary" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m17.674 11.408l-1.905 5.715a.6.6 0 0 1-.398.386L3.693 20.98a.6.6 0 0 1-.74-.765L6.745 8.841a.6.6 0 0 1 .34-.365l5.387-2.218a.6.6 0 0 1 .653.13l4.404 4.406a.6.6 0 0 1 .145.614M3.296 20.602l6.364-6.364"/><path d="m17.792 11.056l2.828-2.829a2 2 0 0 0 0-2.828L18.5 3.277a2 2 0 0 0-2.829 0l-2.828 2.829m-1.062 6.01a1.5 1.5 0 1 0-2.121 2.122a1.5 1.5 0 0 0 2.121-2.122"/></g></svg>
                            <h3 class="h4">Branding – grafika kreatywna i projektowanie UI/UX</h3>
                            <p class="mb-0">Budujemy wyjątkowe marki: logotypy, identyfikację wizualną oraz nowoczesne layouty i prototypy z myślą o użytkownikach.</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Item --> --}}
                <div class="col">
                    <div class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden">
                        <div class="card-body pb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g class="text-primary"><path fill="currentColor" d="M7.361 16.596q-.857.721-1.793.646t-1.612-.64t-.913-1.482q-.235-.916.336-1.866l1.952-3.235q-.606-.453-.969-1.152Q4 8.17 4 7.347q0-1.4.973-2.374Q5.946 4 7.346 4t2.373.973t.973 2.373T9.72 9.72t-2.373.973q-.302 0-.584-.044t-.54-.152L4.24 13.785q-.352.585-.214 1.148t.56.914t1.006.4q.584.046 1.125-.4l9.942-8.448q.838-.721 1.758-.653q.919.068 1.615.634q.696.565.948 1.481t-.338 1.886L18.669 14q.606.454.969 1.142T20 16.654q0 1.4-.983 2.373q-.982.973-2.383.973q-1.38 0-2.353-.983t-.973-2.363t.973-2.363t2.353-.983q.302 0 .592.054t.547.161l1.989-3.307q.351-.585.222-1.148t-.55-.914q-.42-.352-1.005-.409t-1.125.409z"/></g></svg>

                            <h3 class="h4">Rozwiązania dla dropshipperów</h3>
                            <p class="mb-0">Integracje z hurtowniami, automatyczna aktualizacja danych i scraping z zewnętrznych źródeł – wszystko, czego potrzebujesz do sprawnego dropshippingu.</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Item --> --}}
                <div class="col">
                    <div class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden">
                        <div class="card-body pb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g class="text-primary"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 17.25v-.228a4.5 4.5 0 0 0-.12-1.03l-2.268-9.64a3.375 3.375 0 0 0-3.285-2.602H7.923a3.375 3.375 0 0 0-3.285 2.602l-2.268 9.64a4.5 4.5 0 0 0-.12 1.03v.228m19.5 0a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3m19.5 0a3 3 0 0 0-3-3H5.25a3 3 0 0 0-3 3m16.5 0h.008v.008h-.008zm-3 0h.008v.008h-.008z"/></g></svg>
                            <h3 class="h4">Hosting – stabilność i&nbsp;bezpieczeństwo</h3>
                            <p class="mb-0">Zapewniamy szybki i bezpieczny hosting dla sklepów i stron, aby Twój biznes działał bez zakłóceń.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <!-- About --> --}}
        <section class="overflow-hidden pb-5 pt-5 mb-lg-3 mb-xl-4 mb-xxl-4 mt-3">
            <div class="container pb-sm-2 pb-md-3 pb-lg-5 mb-md-3 mb-lg-0">

                {{-- <!-- Parallax image --> --}}
                <div class="position-relative mx-auto" style="max-width: 1198px;">
                    <div class="position-relative z-3" data-aos="fade-left" data-aos-duration="600"
                            data-aos-offset="300">
                        <img src="/img/woosklepy/about-01.png" alt="Image">
                    </div>
                    <div class="position-absolute top-0 start-0 z-2" data-aos="fade-right" data-aos-duration="600"
                            data-aos-offset="300">
                        <img src="/img/woosklepy/about-02.png" alt="Image">
                    </div>
                    {{-- <div class="position-absolute top-0 start-0 z-4" data-aos="zoom-in" data-aos-duration="500"
                            data-aos-offset="300" data-aos-delay="900" data-aos-easing="ease-out-back">
                        <svg class="w-100 h-100 text-info" width="1198" height="693" viewBox="0 0 1198 693"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M579.362 65.02c1.689-.051 3.25-1.264 4.785-1.89l2.699-1.2 1.203-.587c-.051.026 1.446-.69.704-.613 3.147-.345 2.571-4.916-.589-4.303-.844.166-1.33.626-2.008 1.098-.909.638-1.907 1.2-2.879 1.711l-2.827 1.443c-.653.409-1.19 1.034-1.881 1.379-1.433.715-.729 3.013.793 2.962zm-27.74-8.747c1.56.357 3.428-.792 4.835-1.405.998-.434 1.945-.983 2.917-1.481.665-.332 1.484-.97 1.983-1.239 1.753-.907 1.036-4.163-1.062-3.907-1.126.14-1.471.587-2.239 1.302-.614.562-1.522 1.073-2.2 1.571l-4.452 3.397c-.678.421-.627 1.57.218 1.762zm22.666-6.037l.077.153c.217.472.908.868 1.433.817 1.356-.141 2.571-.919 3.812-1.481l3.505-1.711c2.546-.958 1.587-4.648-1.125-4.099-1.766.358-3.467 1.941-5.028 2.796-1.177.677-3.441 1.852-2.674 3.524zm29.078 9.805c1.65.69 3.761-.702 5.271-1.328 1.612-.664 3.224-1.073 4.541-2.273 1.766-1.622-1.01-4.38-2.622-2.618-.896.983-2.252 1.328-3.403 1.928l-4.056 2.273c-.882.536-.588 1.66.269 2.017zm7.491 14.504c2.533-1.073 4.555-3.103 6.909-4.469.87-.511.947-1.826.409-2.579-.627-.881-1.727-.907-2.584-.409-1.152.677-2.111 1.698-3.16 2.528-1.062.83-2.431 1.545-3.25 2.617-.857 1.136.269 2.911 1.676 2.311zm-8.731 22.483c2.265-2.464 4.683-4.801 6.909-7.278 2.188-2.439-1.829-5.516-3.544-2.732-.473.779-1.049 1.417-1.471 2.234-.499.945-1.088 1.813-1.715 2.682-.946 1.315-2.418 2.86-2.085 4.584.141.843 1.356 1.111 1.906.511zm-23.927 4.292c1.433-.307 2.814-1.673 3.723-2.771.985-1.187 2.226-2.171 2.904-3.588 1.164-2.439-2.917-4.15-3.877-1.622-.921 2.452-4.311 4.035-4.196 6.87.025.664.806 1.251 1.446 1.111zm-20.46 13.752c-.013.306.55-.588.691-.792.448-.651.832-1.341 1.215-2.018.819-1.468 1.856-2.758 2.726-4.188 1.292-2.094-2.252-4.073-3.263-1.902l-2.597 5.924c-.461 1.213-1.331 2.439-.384 3.64.55.702 1.574.063 1.612-.664zm-15.532-2.812c1.177-.306 2.06-2.209 2.636-3.167.46-.766.831-1.596 1.254-2.387.025-.039.806-1.711.192-.703.217-.357.665-.574.895-.995.665-1.213-.141-3.282-1.765-3.065-2.943.383-2.854 3.831-3.672 6.103-.192.524-1.485 4.725.46 4.214zm17.857-15.767c.243-.204.781-.332 1.1-.485.909-.447 1.728-1.047 2.521-1.647 1.407-1.047 2.981-2.158 4.107-3.499 1.458-1.737-.742-3.92-2.482-2.477-.806.664-1.472 1.507-2.188 2.26l-2.508 2.413c-.819.83-2.392 1.979-1.714 3.294.243.434.831.434 1.164.141zm-14.918-2.936c.602-1.149 1.024-2.273 1.408-3.524.32-1.047.921-1.915 1.228-2.937.448-1.456-1.292-2.771-2.584-1.979-1.433.881-1.484 2.503-1.459 4.022.038 1.392-.294 3.141.294 4.405.205.447.909.421 1.113.013zm57.587-50.408l5.194.306c2.034.051 4.081.741 5.718-.702.563-.498.563-1.545 0-2.056-1.714-1.52-4.35-.868-6.486-.6-1.535.191-3.646.026-5.028.83-1.061.638-.537 2.145.602 2.222zm26.732 4.633c-.409 1.29 1.408 1.839 2.329 2.017l6.946 1.468c2.431.702 3.39-3.345 1.011-3.677-2.072-.294-4.209-.358-6.294-.268-.934.038-2.584.472-3.454.153-.218-.077-.474.102-.538.306zm3.38 14.008c1.753.702 3.377 1.264 5.232 1.647 1.408.294 3.16.792 4.58.677 1.612-.128 2.597-2.03 1.356-3.281-1.356-1.366-3.377-.843-5.117-.932-1.829-.102-4.324-.613-6.064.064-.882.37-.882 1.481.013 1.826zm8.212 14.185c3.365 1.379 7.241.472 10.721 1.328 3.748.932 3.774-5.427 0-4.482-3.48.868-7.356-.051-10.721 1.328-.882.37-.895 1.456 0 1.826zm-50.489 29.84c-.716.038-1.023.319-1.561.766l-2.443 2.069c-1.305 1.187-2.239 2.464-3.288 3.856-1.203 1.583 1.074 3.435 2.584 2.579.755-.421.908-.894 1.267-1.622.409-.829 1.01-1.583 1.586-2.311.973-1.213 2.431-2.592 2.751-4.162.115-.562-.256-1.213-.896-1.175zm-17.324 10.214c-1.023.791-1.356 1.979-1.727 3.166-.575 1.839-.742 3.614-.857 5.542-.153 2.707 4.414 2.681 4.184 0-.154-1.839-.307-3.576-.167-5.414.077-.958.282-2.477-.575-3.18-.218-.178-.602-.306-.858-.114zm-22.837 9.935c-.448 1.341.422 3.052.716 4.379.307 1.354.64 2.746 1.369 3.933 1.894 3.103 6.282-.83 3.711-2.86-.857-.677-1.28-1.507-1.74-2.477l-.806-1.698c-.295-.575-.781-1.009-1.088-1.558-.512-.919-1.842-.651-2.162.281zM531.155 95.51c.806-1.009 1.561-1.954 2.098-3.141l1.689-4.175c1.177-2.911-3.864-4.443-4.811-1.328l-1.139 4.226c-.345 1.251-1.215 2.273-.793 3.626.371 1.162 2.073 1.89 2.956.792zm8.903-21.707c.78-.868 1.74-1.558 2.482-2.477.716-.881 1.369-2.081 2.239-2.809 2.303-1.941-1.165-5.516-3.34-3.333-.524.536-.831 1.111-1.202 1.749-.41.715-.96 1.354-1.357 2.069-.742 1.366-1.573 2.567-1.189 4.188.23.996 1.663 1.392 2.367.613zm42.435 8.175c1.791-.473 3.621-1.456 5.092-2.567 1.279-.97 3.083-1.941 3.991-3.294 1.331-1.979-1.906-3.869-3.211-1.877-.179.281-.831.562-1.113.779l-2.494 2.005c-1.241.945-3.02 1.532-3.787 2.962-.55 1.034.345 2.311 1.522 1.992zm-23.063-3.834c.32-.523.934-.83 1.369-1.251.499-.472.883-1.047 1.318-1.583.959-1.149 2.239-1.979 3.198-3.116 1.548-1.839-.78-4.15-2.622-2.618-1.421 1.175-2.598 2.924-3.493 4.52-.653 1.162-1.971 2.707-1.293 4.048.32.6 1.203.536 1.523 0zm62.284 2.389c1.138.217 2.2.064 3.313-.204 1.152-.268 2.342-.255 3.506-.46 2.239-.383 1.241-4.175-.947-3.422-.921.319-1.906.434-2.815.779-.895.332-1.804.983-2.75 1.098-1.139.153-1.664 1.954-.307 2.209zm36.932-17.275c.256 2.017 2.431 2.796 4.069 3.601l1.765.868c-.102-.051.704.434.512.281-.397-.294.767.728.908.805 1.318.702 3.019.102 3.429-1.392l.038-.141c.217-.779.026-1.826-.627-2.375-1.087-.919-2.264-1.124-3.62-1.341-1.689-.281-3.301-.868-4.887-1.507-.704-.281-1.676.447-1.587 1.2zm-125.755 53.139c-.09 1.673.601 3.626 1.164 5.184.614 1.698 1.766 3.486 3.813 3.077.998-.204 1.407-1.289 1.241-2.183-.141-.766-.614-1.047-1.062-1.596-.32-.396-.563-.932-.806-1.379l-.909-1.698c-.409-.754-.882-1.29-1.356-1.967-.64-.906-2.034-.574-2.085.562z"></path>
                        </svg>
                    </div>
                    <div class="position-absolute top-0 start-0" data-aos="fade-up" data-aos-duration="600"
                            data-aos-offset="300" data-aos-delay="600" data-aos-easing="ease-out-back">
                        <svg class="w-100 h-100 text-warning" width="1198" height="693" viewBox="0 0 1198 693"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M828.762 131.524c-38.952 16.753-134.813 136.894-54.172 163.269 29.536 9.657 62.546 1.819 92.465 13.085 33.408 12.588 60.283 32.772 97.566 29.519 31.269-2.729 42.409-28.44 45.229-56.387 2.93-29.041 12.95-35.606 31.06-57.194 14.93-17.793 25.09-41.532 6.11-59.579-20.29-19.286-53.376-9.385-78.904-10.343-17.496-.656-35.976-2.91-50.929-11.198-8.325-4.62-17.067-11.049-26.502-13.973-19.456-5.976-44.603-4.649-61.923 2.801z"></path>
                        </svg>
                    </div> --}}
                </div>

                {{-- <!-- Content --> --}}
                <div class="row pt-5 mt-md-4" id="technologie">
                    <div class="col-md-6 col-xxl-6 mb-4 mb-md-0">
                        <div class="text-center text-md-start pe-md-4 pe-xl-5 pe-xxl-0">
                            <h2 class="h1 mb-sm-4">Technologie, w których tworzymy</h2>
                            <p class="fs-lg mb-2 mb-sm-3 mb-xl-4 mx-auto mx-md-0" style="max-width: 550px;">Pracujemy w technologiach, które pozwalają nam dostarczać funkcjonalne, estetyczne i skalowalne rozwiązania. Wykorzystujemy sprawdzone narzędzia i&nbsp;platformy, by spełnić wszystkie potrzeby klientów.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-n3">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-2 row-cols-lg-3 gy-md-2 gx-3">
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_woocommerce.png" width="150"
                                                alt="Woocommerce">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_woocommerce.png" width="150"
                                                alt="Woocommerce">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_wordpress.png" width="150"
                                                alt="Wordpress">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_wordpress.png" width="150"
                                                alt="Wordpress">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_chatgpt.png" width="150"
                                                alt="ChatGPT">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_chatgpt.png" width="150"
                                                alt="ChatGPT">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_adobe.png" width="150"
                                                alt="Adobe">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_adobe.png" width="150"
                                                alt="Adobe">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_gutenberg.png" width="150"
                                                alt="Gutenberg">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_gutenberg.png" width="150"
                                                alt="Gutenberg">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_laravel.png" width="150"
                                                alt="Laravel">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_laravel.png" width="150"
                                                alt="Laravel">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_python.png" width="150"
                                                alt="Python">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_python.png" width="150"
                                                alt="Python">
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none d-sm-block d-md-none d-lg-block">
                                <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                    <div
                                        class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                        <img class="d-block d-dark-mode-none"
                                                src="/img/woosklepy/logo_elementor.png" width="150"
                                                alt="Elementor">
                                        <img class="d-none d-dark-mode-block"
                                                src="/img/woosklepy/logo_elementor.png" width="150"
                                                alt="Elementor">
                                    </div>
                                </div>
                            </div>
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                            src="/img/woosklepy/logo_sketch.png" width="150"
                                            alt="Sketch">
                                    <img class="d-none d-dark-mode-block"
                                            src="/img/woosklepy/logo_sketch.png" width="150"
                                            alt="Sketch">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <!-- Korzyści --> --}}
        <section class="container pb-2 mb-lg-3 mb-xl-3 mb-xxl-4" id="korzysci">
            <div class="row gy-3 pb-sm-3 pb-md-4 pb-lg-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 bg-primary rounded-1 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#fff" d="m11.825 6.455l-.009-.006l-.793-.533a3 3 0 0 0-3.626.211L5.45 7.796a.75.75 0 0 1-.488.18H2.75a.75.75 0 0 0-.75.75v6.03c0 .414.336.75.75.75h2.088a.75.75 0 0 1 .563.254l2.339 2.66a2.25 2.25 0 0 0 2.968.365l.684-.473l.734.25a2.25 2.25 0 0 0 2.539-.803l.47-.642l.326.044a2.25 2.25 0 0 0 2.276-1.153l.049-.09h3.464a.75.75 0 0 0 .75-.75V8.727a.75.75 0 0 0-.75-.75h-2.211a.75.75 0 0 1-.49-.182L16.86 6.336a3.75 3.75 0 0 0-5.036.12m-1.64.705l.562.378l-1.96 1.971a2.25 2.25 0 0 0 .044 3.216l.068.064c.81.771 2.062.831 2.941.14l2.079-1.632l2.657 2.555a.75.75 0 0 1 .139.9l-.025.044l-.014.026l-.255.467a.75.75 0 0 1-.758.384l-.769-.103a.75.75 0 0 0-.705.3l-.734 1.002a.75.75 0 0 1-.846.268l-1.09-.37a.75.75 0 0 0-.668.093l-.994.687a.75.75 0 0 1-.99-.122l-2.339-2.66a2.25 2.25 0 0 0-1.69-.763H3.5v-4.53h1.461a2.25 2.25 0 0 0 1.464-.541l1.948-1.669a1.5 1.5 0 0 1 1.813-.106m8.12 7.259a2.25 2.25 0 0 0-.69-1.648l-2.521-2.424a.75.75 0 0 0-1.053-1.053l-.506.397l-.06.047l-2.562 2.013a.75.75 0 0 1-.981-.047l-.068-.065a.75.75 0 0 1-.015-1.072l2.965-2.98a2.25 2.25 0 0 1 3.066-.116l1.687 1.458a2.25 2.25 0 0 0 1.472.547h1.46v4.943z"/></svg>
                        </div>
                        <h3 class="h5 ms-3 mb-0">Indywidualne podejście do Twoich potrzeb</h3>
                    </div>
                    <p class="fs-sm">Każdy projekt dostosowujemy do specyfiki Twojego biznesu, dbając o funkcjonalność i unikalny design.</p>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 bg-primary rounded-1 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 11l9-9M8 2h4v4M2 20h5v-5h5v-5h5V5h5"/></svg>
                        </div>
                        <h3 class="h5 ms-3 mb-0">Kompleksowa obsługa od A do Z</h3>
                    </div>
                    <p class="fs-sm">Od projektu, przez wdrożenie, po wsparcie techniczne – jesteśmy z Tobą na każdym etapie rozwoju Twojego biznesu online.</p>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 bg-primary rounded-1 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15v1.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218H21M3 15V5m0 10l3.853-3.21l.004-.003c.697-.581 1.046-.872 1.425-.99a2 2 0 0 1 1.362.061c.367.153.688.474 1.332 1.118l.006.006c.654.654.981.982 1.354 1.133a2 2 0 0 0 1.385.046c.383-.128.733-.434 1.433-1.046L21 7"/></svg>
                        </div>
                        <h3 class="h5 ms-3 mb-0">Nowoczesne i skalowalne rozwiązania</h3>
                    </div>
                    <p class="fs-sm">Tworzymy rozwiązania, które rosną razem z Twoim biznesem i&nbsp;odpowiadają na dynamiczne zmiany w świecie e-commerce.</p>
                </div>
            </div>
        </section>


        {{-- <!-- Sklepy internetowe na platformie WooCommerce i strony WordPress --> --}}
        <section class="pb-5" id="sklepy-strony">
            <div class="container pb-sm-3 mb-md-2 mb-lg-3">
                <div class="row g-4">
                    <div class="col-md-5" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <img class="object-fit-cover w-100 h-100 rounded-3"
                             src="/img/woosklepy/services-01a.jpg" alt="Image">
                    </div>
                    <div class="col-md-7" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                            <h2 class="mb-xl-4">Sklepy internetowe na platformie WooCommerce i strony WordPress</h2>
                            <p class="mb-4 mb-xl-5">Tworzymy kompleksowe rozwiązania dla e-commerce i stron firmowych. Projektujemy sklepy internetowe na platformie WooCommerce, które są szybkie, skalowalne i w pełni dostosowane do specyfiki Twojego biznesu. Równocześnie specjalizujemy się w budowie stron internetowych na WordPress – intuicyjnych, responsywnych i zoptymalizowanych pod kątem SEO. W zależności od Twojego budżetu, możemy zaoferować pracę na gotowych szablonach, które obniżają koszty projektu, lub tworzyć indywidualne rozwiązania w pełni dopasowane do Twoich potrzeb. Każdy projekt łączy funkcjonalność i estetykę, aby Twoja firma mogła się wyróżniać.</p>
                            <ul class="list-unstyled mb-4 mb-xl-5">
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Dedykowany design i funkcje dopasowane do Twoich potrzeb.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Możliwość wyboru między gotowym szablonem a indywidualnym projektem.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Łatwy w obsłudze panel administracyjny dla WooCommerce i WordPress.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Optymalizacja pod kątem SEO i wydajności strony/sklepu.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Responsywny design, idealny na urządzenia mobilne.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Skalowalność i możliwość rozbudowy w przyszłości.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <!-- Software Development i rozwiązania dla dropshipperów --> --}}
        <section class="pb-5" id="development">
            <div class="container pb-sm-3 mb-md-2 mb-lg-3">
                <div class="row g-4">
                    <div class="col-md-5 order-md-2" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <img class="object-fit-cover w-100 h-100 rounded-3"
                             src="/img/woosklepy/services-02.jpg" alt="Image">
                    </div>
                    <div class="col-md-7 order-md-1" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                            <h2 class="mb-xl-4">Software Development i rozwiązania dla dropshipperów</h2>
                            <p class="mb-4 mb-xl-5">Tworzymy dedykowane rozwiązania IT, które automatyzują i usprawniają procesy w Twoim biznesie. Od oprogramowania i rozszerzeń dla WooCommerce i WordPress po zaawansowane integracje z hurtowniami i scraping danych – nasze projekty dostosowujemy do Twoich indywidualnych potrzeb. Dzięki temu zyskujesz narzędzia, które poprawiają efektywność i pozwalają Ci skupić się na rozwoju swojego e-commerce.</p>
                            <ul class="list-unstyled mb-4 mb-xl-5">
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Dedykowane oprogramowanie szyte na miarę Twojego biznesu.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Automatyzacja procesów, takich jak aktualizacja stanów magazynowych czy cen.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Integracje z zewnętrznymi systemami dostawców.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Wsparcie techniczne i bieżące utrzymanie rozwiązań.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Zwiększenie efektywności zarządzania dropshippingiem i procesami sprzedażowymi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <!-- Branding – grafika kreatywna i projektowanie UI/UXe --> --}}
        <section class="pb-5" id="branding-projektowanie">
            <div class="container pb-sm-3 mb-md-2 mb-lg-3">
                <div class="row g-4">
                    <div class="col-md-5" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <img class="object-fit-cover w-100 h-100 rounded-3"
                             src="/img/woosklepy/services-03.jpg" alt="Image">
                    </div>
                    <div class="col-md-7" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280"
                         data-disable-parallax-down="md">
                        <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                            <h2 class="mb-xl-4">Branding – grafika kreatywna i projektowanie UI/UX</h2>
                            <p class="mb-4 mb-xl-5">Budujemy silne marki poprzez unikalne logotypy, identyfikację wizualną i nowoczesne projekty graficzne. Nasze layouty i prototypy UI/UX są zoptymalizowane pod kątem doświadczeń użytkowników, by zapewnić maksymalną funkcjonalność i estetykę.</p>
                            <ul class="list-unstyled mb-4 mb-xl-5">
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Profesjonalny branding, który buduje zaufanie do marki.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Przyciągające uwagę projekty graficzne.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Nowoczesne prototypy UI/UX zwiększające konwersję.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Pełna zgodność z najnowszymi trendami projektowymi.
                                </li>
                                <li class="d-flex pb-2 mb-1">
                                    <span class="bg-primary mt-2 me-2"
                                          style="width: 10px; height: 10px; border-radius: 2px;"></span>
                                          Kompleksowa identyfikacja wizualna marki.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <!-- Kontakt --> --}}
        <section class="container" data-bs-theme="dark" id="kontakt">
            <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5">

                <div class="card-body position-relative z-2 py-5">
                    <form class="mx-auto" style="max-width: 800px;" method="POST" id="contact-form" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <h2 class="h1 card-title text-center pb-4">Porozmawiajmy o projekcie</h2>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <label class="form-label fs-base" for="name" id="name">Imię i nazwisko</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Imię i nazwisko" required
                                name="name">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fs-base" for="company" id="company">Firma</label>
                                <input class="form-control form-control-lg" type="text" placeholder="nazwa Twojej firmy"
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
                                <label class="form-label fs-base" for="message">Jak możemy Ci pomóc?</label>
                                <textarea class="form-control form-control-lg" rows="6"
                                          placeholder="Opisz swój projekt i zapytaj o ofertę" required name="message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label fs-base d-block">Czego potrzebujesz?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_sklep" id="checkbox_sklep">
                                    <label class="form-check-label fs-base" for="checkbox_sklep">Sklep internetowy</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_strona" id="checkbox_strona">
                                    <label class="form-check-label fs-base" for="checkbox_strona">Strona internetowa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_development" id="checkbox_development">
                                    <label class="form-check-label fs-base" for="checkbox_development">Rozwiązanie dedykowane</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox_gfx" id="checkbox_gfx">
                                    <label class="form-check-label fs-base" for="checkbox_gfx">Projektowanie</label>
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
            <span class="text-primary flex-shrink-0 me-2">
                <svg width="60px" height="60px" id="Warstwa_2" data-name="Warstwa 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 110.13 89.01">
                    <defs>
                      <style>
                        .cls-1 {
                          fill: none;
                        }
                  
                        .cls-2 {
                          fill: url(#Gradient_bez_nazwy_13);
                          opacity: .3;
                        }
                  
                        .cls-3 {
                          fill: url(#Gradient_bez_nazwy_16);
                          opacity: .2;
                        }
                  
                        .cls-4 {
                          fill: url(#Gradient_bez_nazwy_4);
                        }
                  
                        .cls-5 {
                          clip-path: url(#clippath);
                        }
                      </style>
                      <clipPath id="clippath">
                        <path class="cls-1" d="M89.19,44.13c-.39,4.38-1.31,7.4-2.13,11.06-.93,4.2-5.39,13.9-11.96,16.06-2.25.68-4.22.52-6.4-.83-2.59-1.6-3.79-3.2-5.6-6.3-1.08-1.5-2.46-5.04-3.17-6.92-.1-.49-.93-1.83-1.5-1.94-.75-.14-1.08.53-1.37,1.05-.74,1.31-1.31,2.33-2.07,3.99-1.3,2.55-3,5.02-4.48,7.04-3.15,4.28-6.68,6.55-11.71,8.23-.59.2-4.21,1.01-5.91.1-1.63-.98-3.21-2.85-3.98-4.64-2.02-3.85-2.87-7.31-3.78-13.41-.55-3.64-.55-13.12-.55-16.88-.02-6.01.11-12.02.9-18,.23-1.76.6-3.45,1.36-5.05.73-1.54,1.95-2.6,3.5-3.26,2.93-1.26,6.03.51,6.39,3.69.13,1.11.01,2.25-.04,3.38-.11,2.38-.12,4.77-.42,7.12-.39,6.48-.2,11.75-.05,17.62.06,2.37.49,4.73.78,7.09.03.2.24.45.44.55.4.2.76-.02.94-.35.98-1.75,1.94-3.5,2.86-5.28.29-.55,1.29-3.06,1.57-3.61,1.98-4.34,2.52-5.82,3.67-9.34.47-1.89,1.71-4.11,2.33-4.87.92-1.14,3.04-2.11,5.14-1.71,2.35.49,3.57,1.52,5.1,4.31,2.29,4.02,3.18,7.22,5.48,12.29,1.27,3.04,2.05,4.52,3.58,7.4.41.77.83,1.62,1.81,2.5.54.64,1.34.68,1.86.44.17,0,.64-.49.77-1.81.33-2.47.55-6,.47-9.18-.24-5.11-.66-8.04-1.84-13.06-.37-1.59-.67-3.19-1.11-4.76-.87-3.94-1.13-5.77-1.57-9.24-.12-.99-.22-3.14-.16-4.13.14-2.25.87-5.03,3.06-6.47,2.58-1.68,4.6-2.45,7.79-1.68,1.24.3,2.39.83,3.21,1.84,1.5,1.85,2.6,3.65,3.62,6.09,1.05,2.4,1.97,5.67,2.26,8.69,1.03,7.75,1.47,16.17.89,22.17ZM81.17,15.63c-1.41-4.05-5.04-1.86-4.06,1.4,4.09,16.35,4.18,24.26,3.48,30.36-.29,2.48,1,2.79,1.83.83,3.91-10.66.16-28.54-1.25-32.59ZM79.16,55.51c-.38-.17-.87.08-1.11.56-.24.48-.12,1,.25,1.17.38.17.87-.08,1.11-.56.24-.48.12-1-.25-1.17ZM80.62,51.54c-.53-.1-1.09.39-1.24,1.07-.15.69.16,1.33.7,1.43.53.1,1.09-.38,1.24-1.08s-.16-1.33-.7-1.42Z"/>
                      </clipPath>
                      <linearGradient id="Gradient_bez_nazwy_4" data-name="Gradient bez nazwy 4" x1="32.24" y1="-.3" x2="62.23" y2="86.67" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#94d7ed"/>
                        <stop offset=".44" stop-color="#6584d4"/>
                        <stop offset=".82" stop-color="#4043c0"/>
                        <stop offset="1" stop-color="#322ab9"/>
                      </linearGradient>
                      <linearGradient id="Gradient_bez_nazwy_13" data-name="Gradient bez nazwy 13" x1="38.22" y1="75.97" x2="90.66" y2="46.79" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#5243d8"/>
                        <stop offset=".14" stop-color="#534ed9"/>
                        <stop offset=".38" stop-color="#576edb"/>
                        <stop offset=".71" stop-color="#5ea0e0"/>
                        <stop offset="1" stop-color="#65d3e5"/>
                      </linearGradient>
                      <linearGradient id="Gradient_bez_nazwy_16" data-name="Gradient bez nazwy 16" x1="29.38" y1="28.08" x2="91.11" y2="51.68" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#7ad5ee"/>
                        <stop offset=".19" stop-color="#74c9ea"/>
                        <stop offset=".53" stop-color="#66a9e1"/>
                        <stop offset=".99" stop-color="#5077d2"/>
                        <stop offset="1" stop-color="#5076d2"/>
                      </linearGradient>
                    </defs>
                    <g id="Warstwa_1-2" data-name="Warstwa 1">
                      <g class="cls-5">
                        <path class="cls-4" d="M88.33,89.01c12.04,0,21.8-10.43,21.8-23.31,0-2.11-.27-4.15-.76-6.09h0S95.37,0,95.37,0H19.3L0,89.01"/>
                        <path class="cls-2" d="M50.06,77.47c15.23,1.81,15.19-2.44,27.43-3.61,8.1-.77,8.1-1.55,13.09-.52,2.06.43,12.34,2.71,11.61.77l4.13-4.65-9.53-33.23c-59.73,4.21-65.01,9.12-88.28,22.14,8.17,11.96,12.47,12.56,20.65,24.52,4.73.85,11.66-6.52,20.9-5.42Z"/>
                        <path class="cls-3" d="M72.51,75.15c6.71-3.44,13.42-6.88,20.13-10.32l8.19-60.53H35.63c-6.01,11.74-11,43.06-.55,77.05,13.22.12,26.43.24,39.65.36-.74-2.19-1.49-4.37-2.23-6.56Z"/>
                      </g>
                    </g>
                  </svg>
            </span>
                    <span class="text-light opacity-90" style="position: relative; margin-top: -20px;">WooSklepy <em style="position: absolute; left: 0; bottom: -13px; font-size: 11px; font-weight: 300">Agencja Digital & E-commerce</em></span>
                    
                </a>

                <div class="d-flex flex-column align-items-center">
                    <div class="nav mx-n2 mx-lg-n4 mb-1 mb-sm-2">
                      <a class="nav-link text-primary px-2 px-lg-3" href="mailto:&#107;&#111;&#110;&#116;&#097;&#107;&#116;&#064;&#119;&#111;&#111;&#115;&#107;&#108;&#101;&#112;&#121;&#046;&#112;&#108;">&#107;&#111;&#110;&#116;&#097;&#107;&#116;&#064;&#119;&#111;&#111;&#115;&#107;&#108;&#101;&#112;&#121;&#046;&#112;&#108;</a>
                    </div>
                    <div class="nav flex-column mb-3 mb-sm-4">
                      <a class="nav-link py-1 px-0" href="tel:+48606102530">tel. 506&nbsp;102&nbsp;530</a>
                    </div>
                  </div>

                <ul class="nav justify-content-center py-1 pb-sm-2">
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#uslugi">Nasze usługi</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#technologie">Technologie</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#korzysci">Korzyści</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#sklepy-strony">Sklepy i strony internetowe</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#development">Software development</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#branding-projektowanie">Branding i projektowanie UI/UX</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="d-sm-flex align-items-center justify-content-center pt-4 mt-2 mt-sm-0">

                <p class="nav fs-sm order-sm-1 text-center mb-0">
                    <span class="text-body-secondary">&copy; 2024 -  Agencja Woosklepy z siedzibą we Wrocławiu, ul Krzycka 97.</span>
                </p>
            </div>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
