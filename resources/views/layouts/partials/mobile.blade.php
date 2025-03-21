<div id="mobileMenu"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e"
        role="dialog" tabindex="-1" aria-labelledby="mobileMenu-label">
        <div>
            <div class="flex flex-col h-full divide-y-2 divide-default-200">
                <!-- Mobile Menu Topbar Logo (Header) -->
                <div class="p-6 flex items-center justify-between">
                    <a href="/">
                        <img src="/front-page/assets/images/logo-dark.png" class="h-8" alt="Logo">
                    </a>

                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#mobileMenu">
                        <span class="sr-only">Close</span>
                        <i class="i-fa6-solid-xmark text-xl"></i>
                    </button>
                </div>

                <!-- Mobile Menu Link List -->
                <div class="p-6 overflow-scroll h-full">
                    <ul class="navbar-nav flex flex-col gap-2 hs-accordion-group">
                        <!-- Home Page Link -->
                        <li class="nav-item">
                            <a class="{{ Route::is(['welcome']) ? 'nav-link' : '' }}" href="/">Beranda</a>
                        </li>

                        <li class="nav-item hs-accordion">
                            <a href="javascript:void(0)" class="nav-link hs-accordion-toggle">
                                Harga Layanan <i
                                    class="i-fa6-solid-angle-down ms-auto align-middle transition-all hs-accordion-active:rotate-180"></i>
                            </a>

                            <ul
                                class="hs-accordion-content ps-4 hidden overflow-hidden transition-[height] duration-300 space-y-2">
                                <div class="nav-item mt-2">
                                    <a class="{{ Route::is(['pay.employee']) ? 'nav-link' : '' }}" href="{{ route('pay.employee') }}">Per Karyawan</a>
                                </div>

                                <div class="nav-item">
                                    <a class="{{ Route::is(['pay.contract']) ? 'nav-link' : '' }}" href="{{ route('pay.contract') }}">Per Kontrak</a>
                                </div>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Route::is(['discuss']) ? 'nav-link' : '' }}" href="{{ route('discuss') }}">Jadwalkan Diskusi</a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Menu Download Button (Footer) -->
                <div class="p-6 flex items-center justify-center">
                    <a href="#" target="_blank"
                        class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Coba Gratis !</a>
                </div>
            </div>
        </div>
    </div>