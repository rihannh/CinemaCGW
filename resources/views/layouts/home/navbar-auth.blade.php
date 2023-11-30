<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-50">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="flex py-5">
                <a href="#" class=" font-aquire font-bold text-primary text-3xl block px-2">CGW</a>
            </div>
            <div class="flex items-center">

                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                            class="mx-3 cursor-pointer text-white bg-primary border-transparent hover:border-primary border-2 hover:bg-transparent hover:text-primary hover:scale-[0.9] transition-[0.5s] focus:ring-4 focus:outline-none focus:ring-darkhover font-medium  rounded-full text-sm px-8 py-2 lg:px-12 lg:py-2.5 text-center inline-flex items-center ">
                            Login
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="mr-20 lg:ml-3 lg:mr-0  cursor-pointer text-primary bg-transparent border-primary border-2 hover:bg-primary hover:scale-[0.9] transition-[0.5s] hover:text-white focus:ring-4 focus:outline-none focus:ring-darkhover font-medium  rounded-full text-sm px-8 py-2 lg:px-12 lg:py-2.5 text-center inline-flex items-center ">
                            Register
                        </a>
                    @endif
                @endguest

                <button id="mobile-nav" class="block absolute right-4 lg:hidden" onclick="mobileNavButton()">
                    <span class="mobile-nav-button origin-top-left"></span>
                    <span class="mobile-nav-button"></span>
                    <span class="mobile-nav-button origin-bottom-left"></span>
                </button>
            </div>
        </div>

    </div>
</header>
