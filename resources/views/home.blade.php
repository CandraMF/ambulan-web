<x-home-layout>
        <div id="gallery" class="relative w-full" data-carousel="slide">

            <div class="relative h-screen overflow-hidden rounded-lg">

                <div class="absolute top-0 h-full w-full bg-black z-30 opacity-75">

                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/bat01.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <div class="hidden duration-700 ease-in-out active" data-carousel-item>
                    <img src="{{ asset('assets/images/bat02.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/bat03.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>


            </div>

            <button type="button" class="absolute top-0 left-0 z-40 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-hover:bg-white/50 bg-white/40 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-40 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-hover:bg-white/50 bg-white/40 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="py-10 max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold">Layanan</h1>
            <div class="flex justify-center">
                <div class="grid pt-10 md:grid-cols-4 sm:grid-cols-2 xs:grid-cols-2 gap-5">
                    <x-ambulan-card
                        class="col-span-4"
                        :image="asset('assets/images/bat02.jpg')"
                        :nama="'Mobil Jenazah VIP'"
                        :deskripsi="'Kami menyediakan layanan sewa ambulance VIP dengan fasilitas  lengkap dan kendaraan yang mewah yang siap untuk dalam dan luar kota.'"
                        />
                    <x-ambulan-card
                        class="col-span-4"
                        :image="asset('assets/images/bat01.jpg')"
                        :nama="'Cargo Jenazah'"
                        :deskripsi="'Pengiriman dan penjemputan jenazah via udara (cargo) untuk semua jurusan domestik maupun international seluruh maskapai penerbangan.'"
                        />

                    <x-ambulan-card
                        class="col-span-4"
                        :image="asset('assets/images/bat03.jpg')"
                        :nama="'Ambulance 24 Jam'"
                        :deskripsi="'Pengiriman dan penjemputan jenazah via udara (cargo) untuk semua jurusan domestik maupun international seluruh maskapai penerbangan.'"
                        />
                    <x-ambulan-card
                        class="col-span-4"
                        :image="asset('assets/images/bat03.jpg')"
                        :nama="'Ambulance 24 Jam'"
                        :deskripsi="'Pengiriman dan penjemputan jenazah via udara (cargo) untuk semua jurusan domestik maupun international seluruh maskapai penerbangan.'"
                        />
                    <x-ambulan-card
                        class="col-span-4"
                        :image="asset('assets/images/bat03.jpg')"
                        :nama="'Ambulance 24 Jam'"
                        :deskripsi="'Pengiriman dan penjemputan jenazah via udara (cargo) untuk semua jurusan domestik maupun international seluruh maskapai penerbangan.'"
                        />

                </div>
            </div>
        </div>
        <div class="text-center mt-10 bg-gray-600 h-96 pt-10">
            <div class="flex h-3/5 flex-row justify-center items-center">
                <div>
                    <span class="text-5xl text-white font-extrabold ">Selalu Siap 24/7 Untuk Kamu</span>
                    <div class="mt-5">
                        <span class="text-xl text-white mt-10">Hubungi Kami Kapanpun!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mb-10">
            <div class="grid pt-10 md:grid-cols-2 sm:grid-cols-2 xs:grid-cols-2 -mt-40 gap-5">
                <x-ambulan-card
                    class="col-span-4"
                    :image="asset('assets/images/bat02.jpg')"
                    :nama="'Mobil Jenazah VIP'"
                    :deskripsi="'Kami menyediakan layanan sewa ambulance VIP dengan fasilitas  lengkap dan kendaraan yang mewah yang siap untuk dalam dan luar kota.'"
                    />
                <x-ambulan-card
                    class="col-span-4"
                    :image="asset('assets/images/bat01.jpg')"
                    :nama="'Cargo Jenazah'"
                    :deskripsi="'Pengiriman dan penjemputan jenazah via udara (cargo) untuk semua jurusan domestik maupun international seluruh maskapai penerbangan.'"
                    />

            </div>
        </div>
    <div class="fixed bottom-5 right-0 z-50">
        <div class="mt-6 lg:mb-0 mb-6 grid">
            <button
                class="bg-blue-600 my-1 hover:bg-blue-500 text-lightBlue-400 font-normal h-16 w-16 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                type="button">
                <i class="fas fa-phone text-xl text-white"></i>
                {{-- <span class="text-xl ml-4 m-0">Whatsapp</span> --}}
            </button>
            <button
                class="bg-green-600 my-1 hover:bg-green-500 text-lightBlue-400 font-normal h-16 w-16 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                type="button">
                <i class="fab fa-whatsapp text-3xl text-white"></i>
                {{-- <span class="text-xl ml-4 m-0">Whatsapp</span> --}}
            </button>

        </div>
    </div>
</x-home-layout>
