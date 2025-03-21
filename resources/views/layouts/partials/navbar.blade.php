<header id="navbar"
        class="light fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="/">
                    <img src="/front-page/assets/images/logo-dark.png" class="h-8 logo-dark" alt="Logo Dark">
                    <img src="/front-page/assets/images/logo-light.png" class="h-8 logo-light" alt="Logo Light">
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block ms-auto">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                        <!-- Home Page Link -->
                        <li class="nav-item">
                            <a class="{{ Route::is(['welcome']) ? 'nav-link' : '' }}" href="{{ route('welcome') }}">Beranda</a>
                        </li>

                        <!-- Inner Page Dropdown -->
                        <li class="nav-item">
                            <div class="hs-dropdown [--trigger:hover] relative">
                                <a href="javascript:void(0);"
                                    class="{{ Route::is(['pay.employee','pay.contract']) ? 'nav-link' : '' }} hs-dropdown-toggle after:absolute hover:after:-bottom-10 after:inset-0">
                                    Harga Layanan
                                    <i class="i-fa6-solid-angle-down ms-2 align-middle"></i>
                                </a>

                                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 hs-dropdown-open:translate-y-0 translate-y-3 origin-center opacity-0 hidden w-48 min-w-48 border p-2 bg-white shadow-lg rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
                                    <div class="space-y-0.5">
                                        

                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ route('pay.employee') }}">Per Karyawan</a>
                                        </div>

                                        <div class="nav-item">
                                            <a class="nav-link" href="{{ route('pay.contract') }}">Per Kontrak</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Contact Page Link -->
                        <li class="nav-item">
                            <a class="{{ Route::is(['discuss']) ? 'nav-link' : '' }}" href="{{ route('discuss') }}">Jadwalkan Diskusi</a>
                        </li>
                    </ul>
                </div>

                <!-- Download Button -->
                <div class="hidden lg:flex items-center ms-3">
                    <a href="#" target="_blank"
                        class="bg-primary text-white px-4 py-2 rounded inline-flex items-center text-sm">Coba Gratis !</a>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" class="py-3 px-4 inline-flex items-center" aria-haspopup="dialog"
                        aria-expanded="false" aria-controls="mobileMenu" data-hs-overlay="#mobileMenu">
                        <i class="i-fa6-solid-bars text-2xl text-default-500"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>