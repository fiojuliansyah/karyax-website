@extends('layouts.master')

@section('content')
        <!-- Hero Section Start -->
        <section class="bg-gradient-to-t from-default-500/10 relative">

            <section class="relative pt-44 pb-36">
                <div class="container">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-16 items-center">
        
                        <div class="order-2 lg:order-1">
                            <div class="text-center sm:text-start">
        
                                <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">
                                    Solusi terbaik untuk
                                    <span
                                        class="relative z-0 bg-primary text-white after:bg-green-500/50 after:-z-10 after:absolute md:after:h-6 after:h-4 after:w-full after:bottom-0 after:end-0">mengelola</span>
                                    HRIS dan Produktivitas
                                </h1>
                                <p class="sm:text-lg text-default-500">Tingkatkan manajemen SDM dan produktivitas perusahaan Anda dengan
                                    solusi HRIS & outsourcing yang dirancang dan dikembangkan oleh profesional kami.</p>
                                <div class="flex flex-wrap gap-3 mt-16">
                                    <a href="#feature" for="Email"
                                        class="bg-black flex items-center text-white rounded-lg text-sm font-semibold flex-none hover:shadow-lg  hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-6 py-3">Pelajari Selengkapnya</a>
                                    <a href="#" for="Email"
                                        class="bg-primary flex items-center text-white rounded-lg text-sm font-semibold flex-none hover:shadow-lg  hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-6 py-3">Daftar
                                        Sekarang</a>
                                </div>
                                <div class="flex flex-wrap items-center gap-5 mt-5">
                                    <div class="flex items-center gap-2">
                                        <i class="i-tabler-check size-5 text-green-500"></i>
                                        <p class="text-sm text-default-700">Demo 14 hari Gratis</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="i-tabler-check size-5 text-green-500"></i>
                                        <p class="text-sm text-default-700">Tanpa kartu kredit diperlukan</p>
                                    </div>
                                </div>
        
                            </div>
                        </div>
        
                        <div class="order-1 lg:order-2">
                            <div class="relative">
        
                                <div class="hidden sm:block">
                                    <div
                                        class="before:w-24 before:h-24 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('../images/pattern/dot2.svg')]">
                                    </div>
                                    <div
                                        class="after:w-24 after:h-24 after:absolute after:-top-10 after:end-10 2xl:after:end-0 after:rotate-45 after:bg-[url('../images/pattern/dot5.svg')]">
                                    </div>
                                </div>
        
                                <div id="swiper_one" class="swiper border-[6px] border-white bg-white 2xl:w-[140%]"
                                    data-aos="fade-left" data-aos-duration="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            
                                            <img src="/front-page/assets/images/hero/saas1.png" alt="saas1"
                                                class="w-full h-full rounded-md">
                                        </div>
        
                                        <div class="swiper-slide">
                                            
                                            <img src="/front-page/assets/images/hero/saas2.png" alt="saas2"
                                                class="w-full h-full rounded-md">
                                        </div>
        
                                        <div class="swiper-slide">
                                            
                                            <img src="/front-page/assets/images/hero/saas3.png" alt="saas3"
                                                class="w-full h-full rounded-md">
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
        
                    </div>
                </div>
            </section>
        
            <div class="absolute bottom-0 inset-x-0 hidden sm:block">
                <img src="/front-page/assets/images/shapes/white-wave.svg" alt="white-wave-svg"
                    class="w-full -scale-x-100 -scale-y-100">
            </div>
        
        </section>
        
        <!-- Hero Section End -->
    
        <!-- feature Section Start -->
        <section class="overflow-hidden" id="feature">
            <div class="xl:py-24 py-16">
                <div class="container">
        
                    <div class="text-center">
                        <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Fitur</span>
                        <h1 class="text-3xl/tight font-medium mt-3 mb-4">Manajemen yang Lebih Baik. Kinerja yang Lebih Baik</h1>
                        <p class="text-default-500">Mulai bekerja dengan <span class="text-primary">Karyax</span> untuk
                            mengelola tenaga kerja Anda dengan lebih baik</p>
                    </div>
        
                    <div class="xl:pt-16 xl:pb-28 py-16">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">
        
                            <div class="relative">
                                <div class="hidden sm:block">
                                    <div
                                        class="after:w-20 after:h-20 after:absolute after:-top-8 after:-start-8 2xl:after:end-0 after:bg-[url('../images/pattern/dot5.svg')]">
                                    </div>
                                    <div
                                        class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-end-8 before:bg-[url('../images/pattern/dot2.svg')]">
                                    </div>
                                </div>
                                <img src="/front-page/assets/images/hero/saas1.png" alt="saas1" data-aos="fade-right"
                                    data-aos-duration="400">
                            </div>
        
                            <div class="lg:ms-24">
                                <div class="hs-accordion-group" data-aos="fade-up" data-aos-duration="500">
                                    <!-- 1 -->
                                    <div class="hs-accordion active">
                                        <button
                                            class="hs-accordion-toggle active pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-default-800 transition-all hover:text-default-500 dark:text-default-200 dark:hover:text-default-400">
                                            <div
                                                class="bg-blue-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                                <span class="i-solar-shield-user-bold-duotone size-6 text-blue-500"></span>
                                            </div>
                                            <h1 class="font-medium mb-4 mt-2">Tingkatkan Pengalaman Karyawan</h1>
                                        </button>
        
                                        <div
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 ps-16">
                                            <p class="text-default-700 dark:text-default-300">
                                                Sebelum kita membahas mengapa perusahaan harus berinvestasi pada pengalaman
                                                karyawan (EX), penting untuk memahami apa yang dimaksud dengan konsep ini.
                                            </p>
                                            <div class="mt-7 flex items-center">
                                                <a href="#" class="text-primary flex items-center">Pelajari lebih lanjut
                                                    <i class="i-fa6-solid-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="border-b my-6"></div>
        
                                    <!-- 2 -->
                                    <div class="hs-accordion">
                                        <button
                                            class="hs-accordion-toggle pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-default-800 transition hover:text-default-500 dark:text-default-200 dark:hover:text-default-400">
                                            <div
                                                class="bg-green-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                                <span class="i-solar-user-plus-bold-duotone size-6 text-green-500"></span>
                                            </div>
                                            <h1 class="font-medium mb-4 mt-2">Rekrutmen & Onboarding</h1>
                                        </button>
        
                                        <div
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 ps-16">
                                            <p class="text-default-700 dark:text-default-300">
                                                Pasang lowongan pekerjaan, wawancarai kandidat, dan buat tawaran, semua di
                                                Karyax. Mulai merekrut hari ini.
                                            </p>
                                            <div class="mt-7 flex items-center">
                                                <a href="#" class="text-primary flex items-center">
                                                    Pelajari lebih lanjut <i class="i-fa6-solid-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="border-b my-6"></div>
        
                                    <!-- 3 -->
                                    <div class="hs-accordion">
                                        <button
                                            class="hs-accordion-toggle pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-default-800 transition hover:text-default-500 dark:text-default-200 dark:hover:text-default-400">
                                            <div
                                                class="bg-orange-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                                <span
                                                    class="i-solar-chart-square-bold-duotone size-6 text-orange-500"></span>
                                            </div>
                                            <h1 class="font-medium mb-4 mt-2">Data & Analisis Karyawan</h1>
                                        </button>
                                        <div
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 ps-16">
                                            <p class="text-default-700 dark:text-default-300">
                                                Menemukan karyawan yang berdedikasi adalah salah satu prioritas utama bagi
                                                organisasi publik dan swasta.
                                            </p>
                                            <div class="mt-7 flex items-center">
                                                <a href="#" class="text-primary flex items-center">
                                                    Pelajari lebih lanjut <i class="i-fa6-solid-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
        
                    <div>
                        <div class="grid lg:grid-cols-2 grid-cols-1n gap-6 items-center">
                            <div class="order-2 lg:order-1 2xl:w-9/12" data-aos="fade-up" data-aos-duration="500">
        
                                <div class="h-12 w-12 bg-primary/10 flex items-center justify-center rounded-lg">
                                    <span class="i-solar-star-circle-bold-duotone size-7 text-primary"></span>
                                </div>
        
                                <h1 class="text-3xl/tight font-medium mt-6 mb-4">Penggajian Cerdas. Membayar karyawan Anda menjadi
                                    lebih mudah</h1>
                                <p class="text-default-500">Anda dapat memodifikasi halaman Anda dengan drag-and-drop, mengimpor
                                    demo hanya dengan "Satu Klik", dan memodifikasi pengaturan tema dengan panel opsi yang mudah
                                    digunakan.</p>
                                <div class="flex items-center mt-12">
                                    <a href="#" class="text-primary flex items-center">Pelajari lebih lanjut <i
                                            class="i-fa6-solid-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
        
                            <div class="relative order-1 lg:order-2">
                                <div class="hidden sm:block">
                                    <div
                                        class="after:w-20 after:h-20 after:absolute after:-top-8 after:-end-8 2xl:after:-end-8 after:bg-[url('../images/pattern/dot2.svg')]">
                                    </div>
                                    <div
                                        class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('../images/pattern/dot5.svg')]">
                                    </div>
                                </div>
        
                                <img src="/front-page/assets/images/hero/saas3.png" alt="saas2" data-aos="fade-left"
                                    data-aos-duration="400">
                            </div>
        
                        </div>
                    </div>
        
                </div>
            </div>
        
            <div class="xl:py-24 py-16">
                <div class="container" data-aos="fade-up" data-aos-duration="600">
        
                    <div class="text-center">
                        <h1 class="text-2xl font-medium">Dan banyak fitur powerful lainnya</h1>
                    </div>
        
                    <div class="py-16">
                        <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-5">
                            <div class="order-1">
                                <div class="flex flex-col gap-5">
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Rekrut dan Pertahankan Talenta
                                        Terbaik
                                    </p>
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Manajemen Tim</p>
                                </div>
                            </div>
        
                            <div class="order-3 xl:order-2">
                                <div class="flex flex-col gap-5">
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Tetap Mematuhi Aturan</p>
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Tingkatkan Produktivitas</p>
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Tingkatkan Pengalaman</p>
                                </div>
                            </div>
        
                            <div class="order-4 xl:order-3">
                                <div class="flex flex-col gap-5">
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Self-service Time Tracking
                                    </p>
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Manajemen Kinerja</p>
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> HR Profesional</p>
                                </div>
                            </div>
        
                            <div class="order-2 xl:order-4">
                                <div class="flex flex-col gap-5">
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Daftar Cek Karyawan Baru</p>
                                    <p class="flex items-center gap-3"> <i
                                            class="i-fa6-solid-check text-green-500 text-xl"></i> Kalkulator Pajak</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <button class="flex items-center justify-center mx-auto">
                        <a href="{{ route('discuss') }}"
                            class="bg-primary flex items-center text-white rounded-lg text-sm font-semibold flex-none hover:shadow-lg  hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-6 py-3">Daftar
                            Sekarang <i class="i-fa6-solid-arrow-right ms-2"></i> </a>
                    </button>
        
                </div>
            </div>
        
        </section>
        
        <!-- feature Section end -->
    
        <!-- clients Section Start -->
        <section class="bg-gradient-to-r from-default-100/70 to-default-100 relative xl:py-24 py-16">
    
            <div class="absolute top-0 inset-x-0 hidden sm:block">
                <img src="/front-page/assets/images/shapes/white-wave.svg" alt="svg" class="w-full -scale-x-100">
            </div>
        
            <div class="py-5">
                <div class="container" data-aos="fade-up" data-aos-duration="300">
        
                    <div class="text-center">
                        <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Klien Kami</span>
                        <h1 class="text-3xl/tight font-medium mt-3 mb-4">Manajemen SDM Pintar yang Anda Butuhkan</h1>
                        <p class="text-default-500">Lebih dari 1.000 perusahaan mempercayai <span class="text-primary">Karyax</span>
                            untuk meningkatkan kinerja & keterlibatan tim</p>
                    </div>
        
                    <div class="flex flex-wrap items-center justify-center lg:gap-24 gap-10 mt-14">
                        <div>
                            <img src="/front-page/assets/images/brands/uob.png" class="h-8" alt="UOB">
                        </div>
                        <div>
                            <img src="/front-page/assets/images/brands/dbs.png" class="h-8" alt="DBS">
                        </div>
                        <div>
                            <img src="/front-page/assets/images/brands/kimia-farma.png" class="h-8" alt="Kimia Farma">
                        </div>
                        <div>
                            <img src="/front-page/assets/images/brands/sinarmas.png" class="h-8" alt="Sinarmas">
                        </div>
                        <div>
                            <img src="/front-page/assets/images/brands/msig.png" class="h-8" alt="MSIG">
                        </div>
                    </div>
        
                </div>
            </div>
        
        </section>
        
        <!-- clients Section end -->
    
        <!-- testimonial Section Start -->
        <section class="py-16 sm:py-24 overflow-x-hidden">
            <div class="container" data-aos="fade-up" data-aos-duration="600">
        
                <div class="grid xl:grid-cols-4 grid-cols-3 gap-6">
                    <div class="col-span-3 lg:col-span-1">
                        <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Umpan Balik</span>
                        <h1 class="text-3xl/tight font-medium mt-3 mb-4">Apa Kata Mereka</h1>
                        <p class="text-default-500">Beberapa kata berharga dari pelanggan kami</p>
        
                        <div class="flex gap-4 mt-10">
                            <div class="button-prev text-xl transition-all duration-300 hover:text-primary"><i
                                    class="i-fa6-solid-arrow-left"></i></div>
                            <div class="button-next text-xl transition-all duration-300 hover:text-primary"><i
                                    class="i-fa6-solid-arrow-right"></i></div>
                        </div>
                    </div>
        
                    <div class="col-span-3 lg:col-span-2 xl:col-span-3">
                        <div class="relative">
        
                            <div class="hidden sm:block">
                                <div
                                    class="before:w-24 before:h-24 before:absolute before:-top-8 before:-end-8 before:bg-[url('../images/pattern/dot5.svg')]">
                                </div>
                                <div
                                    class="after:w-24 after:h-24 after:absolute after:-bottom-8 after:-start-8 after:bg-[url('../images/pattern/dot2.svg')]">
                                </div>
                            </div>
        
                            <div id="swiper_one" class="swiper relative">
                                <div class="swiper-wrapper z-10">
        
                                    <!-- 1 -->
                                    <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                        <i class="i-fa6-solid-quote-left text-default-500 text-5xl"></i>
                                        <p class="my-4">Karyax telah mengubah cara kami mengelola SDM. Dengan kemudahan dalam
                                            pengelolaan data karyawan dan gaji, semuanya menjadi lebih efisien dan transparan.
                                            Saya sangat merekomendasikan Karyax!</p>
                                        <div class="border-b border-default-200 w-full my-7"></div>
                                        <div class="flex items-center gap-2">
                                            <div>
                                                <h1 class="text-sm mb-1">Arief Wijaya</h1>
                                                <p class="text-default-500 text-xs">HR Manager, PT. Sukses Bersama</p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- 2 -->
                                    <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                        <i class="i-fa6-solid-quote-left text-default-500 text-5xl"></i>
                                        <p class="my-4">Dengan Karyax, proses payroll dan PPh 21 di perusahaan kami menjadi jauh lebih
                                            cepat dan mudah. Kami tidak perlu lagi khawatir tentang perhitungan yang salah. Luar biasa!</p>
                                        <div class="border-b border-default-200 w-full my-7"></div>
                                        <div class="flex items-center gap-2">
                                            <div>
                                                <h1 class="text-sm mb-1">Lina Kusuma</h1>
                                                <p class="text-default-500 text-xs">Finance Director, PT. Maju Terus</p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <!-- 3 -->
                                    <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                        <i class="i-fa6-solid-quote-left text-default-500 text-5xl"></i>
                                        <p class="my-4">Fitur produktivitas Karyax membantu tim kami bekerja lebih efisien. Dengan manajemen
                                            absensi dan pelaporan kinerja yang terintegrasi, kami bisa mengelola tim dengan lebih baik dan lebih transparan.</p>
                                        <div class="border-b border-default-200 w-full my-7"></div>
                                        <div class="flex items-center gap-2">
                                            <div>
                                                <h1 class="text-sm mb-1">Dimas Setiawan</h1>
                                                <p class="text-default-500 text-xs">Operations Manager, PT. Inovasi Digital</p>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- testimonial Section end -->
    
        <!-- faq Section start -->
        <section class="py-16 sm:py-24">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
        
                <div class="text-center">
                    <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Pertanyaan Umum</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">Pertanyaan yang Sering Diajukan</h1>
                    <p class="text-default-500">Berikut adalah beberapa pertanyaan umum yang sering diajukan oleh pelanggan kami tentang layanan HRIS, Payroll, PPh 21, dan produktivitas</p>
                </div>
        
                <div class="hs-accordion-group mt-14 lg:w-3/4 lg:mx-auto 2xl:w-2/3">
                    <!-- 1 -->
                    <div class="hs-accordion active border border-default-300 rounded-lg">
                        <button
                            class="hs-accordion-toggle p-5 inline-flex items-center justify-between w-full font-semibold text-left transition">
                            Apa itu Karyax dan bagaimana solusi HRIS kami bekerja?
                            <span
                                class="i-fa6-solid-angle-down text-xl block transition-all hs-accordion-active:rotate-180"></span>
                        </button>
                        <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300">
                            <p class="text-default-700 dark:text-default-300 pt-3 p-5">
                                Karyax adalah solusi HRIS yang dirancang untuk membantu perusahaan dalam mengelola sumber daya manusia secara efektif dan efisien. Solusi kami mencakup pengelolaan data karyawan, absensi, gaji, PPh 21, dan lainnya.
                            </p>
                        </div>
                    </div>
        
                    <!-- 2 -->
                    <div class="hs-accordion border border-default-300 rounded-lg mt-4">
                        <button
                            class="hs-accordion-toggle p-5 inline-flex items-center justify-between w-full font-semibold text-left transition">
                            Apakah Karyax mendukung pengelolaan Payroll dan PPh 21?
                            <span
                                class="material-symbols-rounded text-xl block transition-all hs-accordion-active:rotate-180">
                                <i class="i-fa6-solid-angle-down"></i>
                            </span>
                        </button>
                        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                            <p class="text-default-700 dark:text-default-300 pt-3 p-5">
                                Ya, Karyax menyediakan fitur lengkap untuk pengelolaan payroll, termasuk perhitungan PPh 21, tunjangan, potongan, dan pencetakan slip gaji yang otomatis. Anda dapat dengan mudah mengelola gaji dan memastikan kepatuhan terhadap peraturan pajak.
                            </p>
                        </div>
                    </div>
        
                    <!-- 3 -->
                    <div class="hs-accordion border border-default-300 rounded-lg mt-4">
                        <button
                            class="hs-accordion-toggle p-5 inline-flex items-center justify-between w-full font-semibold text-left transition">
                            Bagaimana Karyax dapat membantu meningkatkan produktivitas tim?
                            <span
                                class="material-symbols-rounded text-xl block transition-all hs-accordion-active:rotate-180">
                                <i class="i-fa6-solid-angle-down"></i>
                            </span>
                        </button>
                        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                            <p class="text-default-700 dark:text-default-300 pt-3 p-5">
                                Karyax membantu meningkatkan produktivitas dengan memberikan alat manajemen waktu, pelaporan kinerja, dan integrasi dengan berbagai aplikasi yang digunakan oleh tim Anda. Kami juga menyediakan fitur manajemen absensi yang memungkinkan pemantauan kinerja secara real-time.
                            </p>
                        </div>
                    </div>
        
                    <!-- 4 -->
                    <div class="hs-accordion border border-default-300 rounded-lg mt-4">
                        <button
                            class="hs-accordion-toggle p-5 inline-flex items-center justify-between w-full font-semibold text-left transition">
                            Apakah Karyax dapat diintegrasikan dengan sistem lain yang saya gunakan?
                            <span
                                class="material-symbols-rounded text-xl block transition-all hs-accordion-active:rotate-180">
                                <i class="i-fa6-solid-angle-down"></i>
                            </span>
                        </button>
                        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                            <p class="text-default-700 dark:text-default-300 pt-3 p-5">
                                Ya, Karyax dapat diintegrasikan dengan berbagai sistem yang sudah ada, seperti software akuntansi, sistem absensi, dan aplikasi lain yang Anda gunakan di perusahaan. Kami menyediakan API dan dukungan integrasi untuk memudahkan proses tersebut.
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class="text-center mt-14">
                    <p class="inline-flex flex-wrap gap-1 bg-default-100 text-sm rounded-lg py-2 px-5">Masih ada pertanyaan yang belum terjawab? <a href="#" class="hover:text-primary transition-all"> Hubungi Kami</a></p>
                </div>
        
            </div>
        </section>
        
        <!-- faq Section end -->
@endsection