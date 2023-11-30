@extends('layouts.home.app')


@section('content')
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[80vh] overflow-hidden rounded-lg md:h-[85vh]">
            <!-- Item 1 -->
            <div class="duration-[2s] ease-in-out" data-carousel-item>
                <div class="container">
                    <div class="absolute z-10 top-1/2 -translate-y-1/2 w-[75%] md:w-[50%] lg:w-[30%] ">
                        <h1 class="text-white text-4xl lg:text-5xl font-aquire font-bold ">Marvel</h1>
                        <p class=" text-slate-300 font-medium text-base mt-5 mb-5">Carol Danvers, alias Captain Marvel,
                            sedang menyelidiki lubang cacing yang terkait dengan ras alien Kree.
                            Selama misinya, ia menemukan bahwa kekuatannya terhubung dengan Ms. Marvel dan Monica Rambeau
                        </p>
                        <a href="{{ Route('films') }}"
                            class="cursor-pointer text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Order
                        </a>
                    </div>
                </div>
                <img src="{{ asset('images/Marvels.jpeg') }}"
                    class="absolute block object-cover w-full h-full -translate-x-1/2  left-1/2 brightness-[0.6] z-0"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="duration-[2s] ease-in-out" data-carousel-item>
                <div class="container">
                    <div class="absolute z-10 top-1/2 -translate-y-1/2 w-[75%] md:w-[50%] lg:w-[30%] ">
                        <h1 href="" class="text-white text-4xl lg:text-5xl font-aquire font-bold ">GRAN TURISMO</h1>
                        <p href="" class=" text-slate-300 font-medium text-base mt-5 mb-5">
                            Gran Turismo mengisahkan perjalanan seorang pemain gim, mantan pebalap mobil, dan eksekutif
                            olahraga balap yang mengambil risiko besar untuk masuk dalam olahraga elit.
                        </p>
                        <a href="{{ Route('films') }}"
                            class="cursor-pointer text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Order
                        </a>
                    </div>
                </div>

                <img src="{{ asset('images/GRANTURISMO.jpg') }}"
                    class="absolute block object-cover w-full h-full -translate-x-1/2  left-1/2 brightness-[0.6] z-0"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="duration-[2s] ease-in-out" data-carousel-item>
                <div class="container">
                    <div class="absolute z-10 top-1/2 -translate-y-1/2 w-[75%] md:w-[50%] lg:w-[30%] ">
                        <h1 href="" class="text-white text-4xl lg:text-5xl font-aquire font-bold ">Mission:
                            Impossible </h1>
                        <p href="" class=" text-slate-300 font-medium text-base mt-5 mb-5">
                            Ethan Hunt dan tim IMF beraksi dalam misi paling berbahaya dari yang pernah ada: Melacak sebuah
                            senjata jenis baru yang dapat mengancam kelangsungan umat manusia, sebelum jatuh ke tangan yang
                            salah.
                        </p>
                        <a href="{{ Route('films') }}"
                            class="cursor-pointer text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Order
                        </a>
                    </div>
                </div>

                <img src="{{ asset('images/mission.jpeg') }}"
                    class="absolute block object-cover w-full h-full -translate-x-1/2  left-1/2 brightness-[0.6] z-0"
                    alt="...">
            </div>
            <!-- Item 4 -->
            <div class="duration-[2s] ease-in-out" data-carousel-item>
                <div class="container">
                    <div class="absolute z-10 top-1/2 -translate-y-1/2 w-[75%] md:w-[50%] lg:w-[30%] ">
                        <h1 href="" class="text-white text-4xl lg:text-5xl font-aquire font-bold ">Fate/Grand Order
                        </h1>
                        <p href="" class=" text-slate-300 font-medium text-base mt-5 mb-5">
                            Ritsuka Fujimaru dan Mash Kyrielight baru saja menyelesaikan misi di Mesopotamia kuno abad 2655
                            SM tepatnya di Uruk, tempat Raja Gilgamesh berkuasa.
                        </p>
                        <a href="{{ Route('films') }}"
                            class="cursor-pointer text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Order
                        </a>
                    </div>
                </div>

                <img src="{{ asset('images/fate.jpeg') }}"
                    class="absolute block object-cover w-full h-full -translate-x-1/2  left-1/2 brightness-[0.6] z-0"
                    alt="...">
            </div>
            <!-- Item 5 -->
            <div class="duration-[2s] ease-in-out" data-carousel-item>
                <div class="container">
                    <div class="absolute z-10 top-1/2 -translate-y-1/2 w-[75%] md:w-[50%] lg:w-[30%] ">
                        <h1 href="" class="text-white text-4xl lg:text-5xl font-aquire font-bold ">Alena Anak Ratu
                            Iblis</h1>
                        <p href="" class=" text-slate-300 font-medium text-base mt-5 mb-5">
                            Hendra dan Maya mengadopsi seorang anak bernama Alena, yang awalnya membawa dampak positif
                            terhadap keluarga mereka.
                        </p>
                        <a href="{{ Route('films') }}"
                            class="cursor-pointer text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Order
                        </a>
                    </div>
                </div>

                <img src="{{ asset('images/alena.jpeg') }}"
                    class="absolute block object-cover w-full h-full -translate-x-1/2  left-1/2 brightness-[0.6] z-0"
                    alt="...">
            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 lg:flex items-center justify-center h-full px-2 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="lg:inline-flex items-center hidden justify-center w-10 h-10 rounded-full   group-focus:outline-none">
                <svg class="w-4 h-4 text-white hover:text-primary dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="lg:inline-flex hidden items-center justify-center w-10 h-10 rounded-full  dark:bg-gray-800/30  dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white hover:text-primary dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <div class="pt-24">
        <div class="container">
            <h1 class="text-primary text-center text-3xl lg:text-5xl font-aquire font-bold mb-2  ">Now Playing</h1>
            <p class="text-md text-white text-center mb-7 font-semibold hover:text-primary">
                <a href="{{ Route('films') }}">See all</a>
            </p>
            <div class="flex justify-center flex-wrap gap-3 w-full">
                @foreach ($films as $film)
                    <div>
                        <a href="{{ route('detail.film', $film->id) }}">
                            <div class=" h-80 w-[16rem] md:pl-8 overflow-hidden hover:brightness-[0.6]">
                                <img class="object-cover w-full h-full rounded-lg"
                                    src="{{ asset('storage/films/' . $film->image) }}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="mt-24 py-20 bg-[#3844CE]" id="about">
        <div class="container">
            <div class="flex justify-center flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col items-center text-center lg:px-5 mt-16 md:mt-0">
                    <svg viewBox="0 0 24 24" fill="none" class="text-white w-24 h-24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.99999 12L10.7528 13.4022C11.1707 13.7365 11.7777 13.6826 12.1301 13.2799L15 9.99999M5.37761 4.94327L10.3754 2.72201C11.4097 2.26234 12.5903 2.26234 13.6245 2.72201L18.6025 4.93446C20.0582 5.58144 21.0138 7.03555 20.9118 8.62529C20.5205 14.7231 18.7772 17.4796 14.0646 20.6776C12.821 21.5216 11.1804 21.5195 9.93579 20.6769C5.23767 17.4963 3.42962 14.7781 3.06999 8.6039C2.978 7.02461 3.93199 5.58577 5.37761 4.94327Z"
                            stroke="#ffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h1 class="text-white font-aquire text-xl tracking-wider font-bold mt-8">Customer Support</h1>
                    <p class="text-white text-md lg:text-base mt-1 ">Tim Layanan Profesional tersedia untuk membantu anda
                        terkait
                        pemesanan film.</p>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col items-center text-center lg:px-5 mt-16 md:mt-0">
                    <svg viewBox="0 0 61 61" fill="none" class="text-white w-24 h-24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.598 37.6634L37.6634 22.598" stroke="#ffff" stroke-width="2.52178"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M23.8535 25.1089C24.5468 25.1089 25.1089 24.5468 25.1089 23.8535C25.1089 23.1601 24.5468 22.598 23.8535 22.598C23.1601 22.598 22.598 23.1601 22.598 23.8535C22.598 24.5468 23.1601 25.1089 23.8535 25.1089Z"
                            fill="black" stroke="#ffff" stroke-width="2.52178" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M36.4079 37.6634C37.1013 37.6634 37.6634 37.1013 37.6634 36.4079C37.6634 35.7145 37.1013 35.1525 36.4079 35.1525C35.7146 35.1525 35.1525 35.7145 35.1525 36.4079C35.1525 37.1013 35.7146 37.6634 36.4079 37.6634Z"
                            fill="black" stroke="#ffff" stroke-width="2.52178" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12.5545 18.0784C12.5545 16.6133 13.1365 15.2083 14.1724 14.1723C15.2083 13.1364 16.6134 12.5544 18.0784 12.5544H20.5893C22.0479 12.5536 23.4469 11.9759 24.4812 10.9474L26.2388 9.1898C26.7522 8.67357 27.3625 8.26389 28.0347 7.98434C28.7069 7.70479 29.4278 7.56088 30.1558 7.56088C30.8838 7.56088 31.6047 7.70479 32.2769 7.98434C32.9491 8.26389 33.5595 8.67357 34.0728 9.1898L35.8304 10.9474C36.8647 11.9759 38.2637 12.5536 39.7223 12.5544H42.2332C43.6983 12.5544 45.1033 13.1364 46.1392 14.1723C47.1752 15.2083 47.7572 16.6133 47.7572 18.0784V20.5893C47.758 22.0478 48.3357 23.4469 49.3641 24.4811L51.1218 26.2388C51.638 26.7521 52.0477 27.3624 52.3272 28.0347C52.6068 28.7069 52.7507 29.4277 52.7507 30.1557C52.7507 30.8838 52.6068 31.6046 52.3272 32.2768C52.0477 32.9491 51.638 33.5594 51.1218 34.0727L49.3641 35.8304C48.3357 36.8646 47.758 38.2637 47.7572 39.7222V42.2331C47.7572 43.6982 47.1752 45.1032 46.1392 46.1392C45.1033 47.1751 43.6983 47.7571 42.2332 47.7571H39.7223C38.2637 47.7579 36.8647 48.3356 35.8304 49.3641L34.0728 51.1217C33.5595 51.6379 32.9491 52.0476 32.2769 52.3272C31.6047 52.6067 30.8838 52.7506 30.1558 52.7506C29.4278 52.7506 28.7069 52.6067 28.0347 52.3272C27.3625 52.0476 26.7522 51.6379 26.2388 51.1217L24.4812 49.3641C23.4469 48.3356 22.0479 47.7579 20.5893 47.7571H18.0784C16.6134 47.7571 15.2083 47.1751 14.1724 46.1392C13.1365 45.1032 12.5545 43.6982 12.5545 42.2331V39.7222C12.5536 38.2637 11.976 36.8646 10.9475 35.8304L9.18987 34.0727C8.67363 33.5594 8.26396 32.9491 7.98441 32.2768C7.70486 31.6046 7.56095 30.8838 7.56095 30.1557C7.56095 29.4277 7.70486 28.7069 7.98441 28.0347C8.26396 27.3624 8.67363 26.7521 9.18987 26.2388L10.9475 24.4811C11.976 23.4469 12.5536 22.0478 12.5545 20.5893V18.0784Z"
                            stroke="#ffff" stroke-width="2.52178" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h1 class="text-white font-aquire text-xl tracking-wider font-bold mt-8">Keamanan Transaksi</h1>
                    <p class="text-white text-md lg:text-base mt-1 ">CGW hadir dengan berbagai jenis pembayaran
                        di bawah platform yang aman dan terjamin.</p>
                </div>
                <div
                    class="w-full md:w-1/2 lg:w-1/3 flex flex-col items-center text-center lg:px-5 mt-16 md:mt-16 lg:mt-0">
                    <svg class="w-24 h-24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="12" cy="17.5664" rx="7" ry="3.5" stroke="#ffff"
                            stroke-width="1.5" stroke-linejoin="round" />
                        <circle cx="12" cy="7.06641" r="4" stroke="#ffff" stroke-width="1.5"
                            stroke-linejoin="round" />
                    </svg>
                    <h1 class="text-white font-aquire text-xl tracking-wider font-bold mt-8">Harga Terbaik</h1>
                    <p class="text-white text-md lg:text-base mt-1 ">Harga yang kompetitif dengan pelayanan
                        terbaik terhadap pelanggan kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
