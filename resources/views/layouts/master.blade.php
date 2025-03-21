<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Karyax | Solusi HRIS & Productivity Management Outsourcing Anda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive Tailwind CSS Multipurpose agency, application, business, clean, creative, cryptocurrency, it solutions, startup, career, blog, modern, creative, multipurpose, portfolio, saas, software, tailwind css, etc." name="description" />
    <meta content="coderthemes" name="author" />

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="/front-page/assets/images/favicon.png">

    <!--Swiper slider css-->
    <link href="/front-page/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="/front-page/assets/libs/aos/aos.css" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="/front-page/assets/css/style.min.css" rel="stylesheet" type="text/css">

    <!-- Head.js -->
    <script src="/front-page/assets/js/head.js"></script>
</head>

<body class="text-default-800">

    <!-- Navbar Start -->
    @include('layouts.partials.navbar')
    <!-- Navbar End -->


    <!-- Mobile Menu Start (Offcanvas) -->
    @include('layouts.partials.mobile')
    <!-- Mobile Menu End -->

    @yield('content')

    <!-- footer Section start -->
    <footer class="bg-default-100">
        <div class="container">
            <div class="grid xl:grid-cols-5 gap-6 py-12">
                <div class="xl:col-span-2">
                    <a href="/">
                        <img src="/front-page/assets/images/logo-dark.png" class="h-8">
                    </a>
                    <p class="text-default-500/80 mt-5 lg:w-4/5">Solusi terbaik untuk mengelola HRIS dan Produktivitas</p>
                </div>
                <div class="xl:col-span-3 col-span-4">
                    <div class="flex flex-col sm:flex-row gap-6 flex-wrap justify-between">
                        <div>
                            <h5 class="font-semibold mb-5">Kontak</h5>
                            <p class="text-default-500/80 text-sm mb-3">Jakarta, Indonesia</p>
                            <p class="text-default-500/80 text-sm mb-3">support@karyax.com</p>
                            <p class="text-default-500/80 text-sm">+62 812-3456-7890</p>
                        </div>
            
                        <!-- Jam Operasional -->
                        <div>
                            <h5 class="font-semibold mb-5">Jam Operasional</h5>
                            <p class="text-default-500/80 text-sm mb-3">Senin - Jumat</p>
                            <p class="text-default-500/80 text-sm">08.00 - 17.00 WIB</p>
                        </div>

                        <div class="flex sm:justify-end justify-center items-start gap-5">
                            <a href="#" aria-label="Facebook">
                                <i class="i-tabler-brand-facebook size-5 hover:text-primary transition-all"></i>
                            </a>
                            <a href="#" aria-label="X / Twitter">
                                <i class="i-tabler-brand-x size-5 hover:text-primary transition-all"></i>
                            </a>
                            <a href="#" aria-label="Instagram">
                                <i class="i-tabler-brand-instagram size-5 hover:text-primary transition-all"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t py-6">
                <div class="grid sm:grid-cols-2 text-center sm:text-start gap-6">
                    <div>
                        <div class="border-t mt-10 pt-5 text-center text-sm text-default-500/70">
                            <script>document.write(new Date().getFullYear())</script> © Karyax - PT. Indolat Digital Teknologi. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer Section end -->

    <!-- Back To Top Start -->
    <button data-toggle="back-to-top"
        class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="i-fa6-solid-arrow-up text-base"></i>
    </button>
    <!-- Back To Top End -->

    <!-- Preline Js -->
    <script src="/front-page/assets/libs/preline/index.js"></script>

    <!-- Swiper Plugin Js -->
    <script src="/front-page/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Animation on Scroll Plugin Js -->
    <script src="/front-page/assets/libs/aos/aos.js"></script>

    <!-- Theme Js -->
    <script src="/front-page/assets/js/theme.min.js"></script>

</body>

</html>