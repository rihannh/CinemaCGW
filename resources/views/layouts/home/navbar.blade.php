<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-50">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="flex py-5">
                <a href="#" class=" font-aquire font-bold text-primary text-3xl block px-2">CGW</a>
            </div>
            <div class="flex items-center">
                <nav id="nav-menu"
                    class="hidden lg:block lg:static lg:bg-transparent lg:bg-opacity-100 lg:max-w-full lg:shadow-none lg:rounded-none absolute py-5 shadow-lg rounded-lg max-w-[250px] w-full top-full right-0 bg-darkhover bg-opacity-70">
                    <ul class="block lg:flex">
                        <li class="group"><a href="{{ Route('home') }}"
                                class="flex text-base text-white py-2 px-4 mx-8 rounded-md group-hover:bg-primary lg:group-hover:text-primary lg:group-hover:bg-transparent">Home</a>
                        </li>
                        <li class="group"><a href="#about"
                                class="flex text-base text-white py-2 px-4 mx-8 rounded-md group-hover:bg-primary lg:group-hover:text-primary lg:group-hover:bg-transparent">About</a>
                        </li>
                        <li class="group"><a href="{{ Route('films') }}"
                                class="flex text-base text-white py-2 px-4 mx-8 rounded-md group-hover:bg-primary lg:group-hover:text-primary lg:group-hover:bg-transparent">Films</a>
                        </li>
                        <li class="group"><a href="#contact"
                                class="flex text-base text-white py-2 px-4 mx-8 rounded-md group-hover:bg-primary lg:group-hover:text-primary lg:group-hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </nav>
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
                @else
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex mr-20 lg:mr-0 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Sign
                                        out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
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
