@extends('layouts.master')

@section('content')
    <!-- Hero Section Start -->
    <section class="pt-36 pb-24 bg-default-100">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="md:text-5xl/tight text-3xl font-semibold mb-5">Paket Fleksibel yang Berkembang Bersama Anda</h2>
                <p class="md:text-lg text-default-500 leading-7">Solusi lengkap untuk manajemen SDM, payroll, absensi, PPh 21, e-recruitment, dan lainnya, yang memudahkan pekerjaan Anda.</p>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- pricing Section Start -->
    <section class="py-20">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Paket</span>
                <h2 class="md:text-3xl/tight text-3xl font-semibold my-4">Paket Harga</h2>
                <p class="md:text-lg text-default-500 leading-7">Paket harga yang <span class="text-primary">terjangkau</span> untuk berbagai jenis perusahaan.</p>
            </div>

            <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 gap-6 items-center mt-16">
                <!-- Plan 4: Kontrak Khusus -->
                <div>
                    <div class="border p-6 rounded hover:shadow-lg bg-primary/5">
                        <h4 class="text-lg text-primary text-center">Enterprise / Kontrak</h4>
                        <h1 class="mt-3 mb-8 text-center">
                            <span class="text-xl font-medium text-default-500">Hubungi Kami</span>
                        </h1>
                        <hr>
                        <div class="grid gap-y-4 mt-8">
                            <div class="flex items-center gap-2">
                                <i class="i-tabler-check size-5 text-green-500"></i>
                                <span>Solusi custom sesuai kebutuhan perusahaan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="i-tabler-check size-5 text-green-500"></i>
                                <span>Paket untuk lebih dari 5000 karyawan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="i-tabler-check size-5 text-green-500"></i>
                                <span>Integrasi sistem tambahan (API, SSO, dll)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="i-tabler-check size-5 text-green-500"></i>
                                <span>Support khusus dan SLA kontraktual</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="i-tabler-check size-5 text-green-500"></i>
                                <span>Konsultasi & pelatihan onboarding personal</span>
                            </div>
                        </div>

                        <div class="mt-14 text-center">
                            <a href="{{ route('discuss') }}"
                                class="py-3 px-6 inline-flex items-center justify-center rounded bg-primary text-white hover:shadow-lg hover:shadow-primary/30 transition-all duration-500">
                                Jadwalkan Diskusi <i class="i-fa6-solid-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- pricing Section End -->

    <!-- benefits Section Start -->
    <section class="py-20">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Keuntungan</span>
                <h2 class="md:text-3xl/tight text-3xl font-semibold my-4">Semua paket termasuk keuntungan berikut</h2>
                <p class="md:text-lg text-default-500 leading-7">Beberapa manfaat dari langganan bulanan/tahunan</p>
            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 gap-y-10 mt-16">
                <div>
                    <div class="flex items-center lg:justify-center gap-6">
                        <div>
                            <div class="size-16 bg-primary/20 rounded-md flex items-center justify-center">
                                <i class="i-solar-incoming-call-rounded-bold-duotone size-10 text-primary"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="text-base">Dukungan Teknis</h5>
                            <p class="text-default-400 mt-2">Tim dukungan teknis profesional kami akan membantu Anda di setiap langkah</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center lg:justify-center gap-6">
                        <div>
                            <div class="size-16 bg-primary/20 rounded-md flex items-center justify-center">
                                <i class="i-solar-compass-bold-duotone size-10 text-primary"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="text-base">Teknologi</h5>
                            <p class="text-default-400 mt-2">Pelatihan khusus untuk memulai dengan platform oleh profesional kami</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center lg:justify-center gap-6">
                        <div>
                            <div class="size-16 bg-primary/20 rounded-md flex items-center justify-center">
                                <span class="i-solar-chart-2-bold-duotone size-10 text-primary"></span>
                            </div>
                        </div>
                        <div>
                            <h5 class="text-base">Analisis Pertumbuhan</h5>
                            <p class="text-default-400 mt-2">Tim khusus untuk mendapatkan wawasan mengenai pertumbuhan Anda setiap bulan</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center lg:justify-center gap-6">
                        <div>
                            <div class="size-16 bg-primary/20 rounded-md flex items-center justify-center">
                                <span class="i-solar-cup-star-bold-duotone size-10 text-primary"></span>
                            </div>
                        </div>
                        <div>
                            <h5 class="text-base">Reward</h5>
                            <p class="text-default-400 mt-2">Reward khusus untuk akun dengan performa terbaik setiap bulan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits Section End -->
@endsection
