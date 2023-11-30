@extends('layouts.home.app-auth')


@section('content')
    <div class="container">
        <div class="flex flex-col justify-center items-center w-full mt-24 ">
            <div class="bg-darkhover bg-opacity-70 my -10 px-10 pt-12 pb-32 rounded-xl">
                <form class=" w-80 md:w-96" method="POST" action="{{ route('register') }}">
                    @csrf

                    <h1 class="text-primary text-center text-3xl lg:text-4xl font-aquire font-bold mb-6 ">Register</h1>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium  text-white">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" autocomplete="name"
                            autofocus
                            class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-hover focus:border-primary"
                            placeholder="Your name" required>
                        @error('name')
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium  text-white">Your
                            email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email"
                            autofocus
                            class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-hover focus:border-primary"
                            placeholder="rihannaufal22@gmail.com" required>
                        @error('email')
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium  text-white">
                            password</label>
                        <input type="password" id="password" name="password" autocomplete="current-password"
                            class=" text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-hover focus:border-primary"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="password-confirm" class="block mb-2 text-sm font-medium  text-white">Confirm
                            password</label>
                        <input type="password" id="password-confirm" name="password_confirmation"
                            autocomplete="new-password"
                            class=" text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-hover focus:border-primary"
                            required>
                    </div>

                    <button type="submit"
                        class="cursor-pointer text-white bg-primary hover:bg-transparent hover:text-primary hover:border-primary hover:scale-[0.9] transition-[0.5s] hover:border-2 focus:ring-4 focus:outline-none focus:ring-darkhover font-medium  rounded-full text-lg w-full py-2.5 inline-flex items-center justify-center ">
                        Register
                    </button>

                    <p class="text-white text-sm mt-3">Already have an account? <a class="text-primary"
                            href="{{ Route('login') }}">Login here</a></p>

                </form>
            </div>

        </div>
    </div>
@endsection
