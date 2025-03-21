@extends('layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center mt-5">
    <div class="container">
        <div class="bg-white p-12 rounded-s xl:col-span-5 md:col-span-6">
            <div class="mb-12">
                <a href="index.html">
                    <img src="/front-page/assets/images/logo-dark.png" alt="logo-img" class="h-8">
                </a>
            </div>
            <h6 class="text-base/[1.6] font-semibold text-default-600 mb-0 mt-4">Jadwal Diskusi</h6>
            <p class="text-default-500 text-sm/[1.6] mt-1 mb-6">Isi formulir berikut untuk mengatur jadwal diskusi dengan kami.</p>
            <form action="#" method="POST">
                @csrf
                
                <!-- Row for the form inputs -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <label for="full_name" class="block text-sm font-medium mb-1 text-default-600">Nama Lengkap
                            <small>*</small></label>
                        <input type="text" id="full_name" name="full_name"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0"
                            placeholder="Nama Lengkap" required>
                    </div>

                    <!-- WhatsApp -->
                    <div class="mb-4">
                        <label for="whatsapp" class="block text-sm font-medium mb-1 text-default-600">Whatsapp
                            <small>*</small></label>
                        <input type="text" id="whatsapp" name="whatsapp"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0"
                            placeholder="Nomor WhatsApp" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-1 text-default-600">Email
                            <small>*</small></label>
                        <input type="email" id="email" name="email"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0"
                            placeholder="Email" required>
                    </div>

                    <!-- Nama Perusahaan -->
                    <div class="mb-4">
                        <label for="company_name" class="block text-sm font-medium mb-1 text-default-600">Nama Perusahaan
                            <small>*</small></label>
                        <input type="text" id="company_name" name="company_name"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0"
                            placeholder="Nama Perusahaan" required>
                    </div>

                    <!-- Jumlah Karyawan -->
                    <div class="mb-4">
                        <label for="employees_count" class="block text-sm font-medium mb-1 text-default-600">Jumlah Karyawan
                            <small>*</small></label>
                        <input type="number" id="employees_count" name="employees_count"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0"
                            placeholder="Jumlah Karyawan" required>
                    </div>

                    <!-- Dapat Informasi Dari -->
                    <div class="mb-4">
                        <label for="info_source" class="block text-sm font-medium mb-1 text-default-600">Dapat Informasi Dari
                            <small>*</small></label>
                        <select id="info_source" name="info_source"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0" required>
                            <option value="ig">Instagram</option>
                            <option value="website">Website</option>
                            <option value="facebook">Facebook</option>
                            <option value="iklan">Iklan</option>
                            <option value="teman">Teman</option>
                            <option value="sales">Sales</option>
                        </select>
                    </div>

                    <!-- Tanggal Diskusi -->
                    <div class="mb-4">
                        <label for="discussion_date" class="block text-sm font-medium mb-1 text-default-600">Tanggal Diskusi
                            <small>*</small></label>
                        <input type="date" id="discussion_date" name="discussion_date"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0" required>
                    </div>

                    <!-- Waktu Diskusi -->
                    <div class="mb-4">
                        <label for="discussion_time" class="block text-sm font-medium mb-1 text-default-600">Waktu Diskusi
                            <small>*</small></label>
                        <input type="time" id="discussion_time" name="discussion_time"
                            class="py-2 px-4 leading-6 block w-full border-default-300 rounded text-sm focus:border-default-300 focus:ring-0" required>
                    </div>

                </div> <!-- End of Row -->

                <div class="mt-5 mb-0 text-center">
                    <button
                        class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30"
                        type="submit">Kirim Jadwal Diskusi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
