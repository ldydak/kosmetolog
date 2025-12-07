@php
    if (!isset($isDark)){
       $isDark = false;
    }
    if (!isset($isLight)){
       $isLight = false;
    }
     if (!isset($navClass)){
       $navClass = '';
    }
@endphp

<header {{ $isDark ? 'data-bs-theme=dark' : '' }} >

    <div class="navbar navbar-expand-lg fixed-top {{$navClass}}" {{ $isLight ? 'data-bs-theme=light' : '' }} >
        <div class="container">

            <img src="/img/kosmetolog/kosmetolog_logo.svg" alt="" class="kosmetolog-logo">

            <div class="d-flex order-lg-3 ">
                <a class="btn btn-primary btn-sm fs-sm d-none d-sm-inline-flex"
                href="tel:506102530" rel="noopener">
                 <i class="ai-phone fs-xl me-2 ms-n1"></i>
                 728 000 590
                </a>
 
                {{-- <!-- Mobile menu toggler (Hamburger) --> --}}
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>


            {{-- <!-- Navbar collapse (Main navigation) --> --}}
            <nav class="collapse navbar-collapse ms-3" id="navbarNav">
                <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#uslugi">Moje usługi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#webinary">Webinary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#szkolenia">Szkolenia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Jak pracuję</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false">Więcej</a>
                        <div class="dropdown-menu overflow-hidden p-0">
                            <div class="d-lg-flex">
                                <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4" style="min-width: 270px">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a class="dropdown-item" href="#sklepy-strony">Sklepy i strony internetowe</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#development">Software development</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#branding-projektowanie">Branding i projektowanie UI/UX</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#kontakt">Kontakt</a>
                    </li>
                </ul>
                <div class="d-sm-none p-3 mt-n3">
                    <a class="btn btn-primary w-100 mb-1"
                    href="tel:506102530" rel="noopener">
                    <i class="ai-phone fs-xl me-2 ms-n1"></i>
                    728 000 590
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
