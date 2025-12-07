<!DOCTYPE html>
<html lang="pl" data-bs-theme="light" @yield('html_attributes')>

<head>
    @include('layouts.partials/title-meta', ['title' => $title])

    @include('layouts.partials/head-css')
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RN4F5GVC4G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RN4F5GVC4G');
    </script>
    {{-- Microsoft Clarity --}}
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "uhslevs7kw");
    </script>
</head>

<body @yield('body_attributes')>

{{-- @include('layouts.partials/loader') --}}

@yield('content')

{{-- @include('layouts.partials/customizer') --}}

@include('layouts.partials/back-to-top')

@include('layouts.partials/footer-scripts')

</body>

</html>
