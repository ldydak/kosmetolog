<!-- Theme switcher (color modes) -->
@vite(['resources/js/theme-switcher.js'])

<!-- Import Google font (Inter) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"
      id="google-font">


@vite([
    'node_modules/img-comparison-slider/dist/styles.css',
    'node_modules/swiper/swiper-bundle.min.css',
    // 'node_modules/aos/dist/aos.css',
    'node_modules/lightgallery/css/lightgallery-bundle.min.css',
    'node_modules/leaflet/dist/leaflet.css',
    // 'node_modules/flatpickr/dist/flatpickr.min.css',
    'node_modules/jarallax/dist/jarallax.min.css',
    // 'node_modules/simplebar/dist/simplebar.min.css',
    // 'node_modules/prismjs/themes/prism.min.css',
    // 'node_modules/prismjs/plugins/toolbar/prism-toolbar.min.css',
    // 'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.min.css',
    // 'node_modules/nouislider/dist/nouislider.min.css'
])

@yield('css')

@vite(['resources/scss/theme.scss','resources/icons/around-icons.min.css'])
