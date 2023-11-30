@extends('layouts.home.app')


@section('content')
    {{-- TODO Ngoding dibawh ini --}}
    <div class="pt-24">
        <div class="container">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse px-4">
                    <li class="inline-flex items-center">
                        <a href="{{ Route('home') }}"
                            class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-primary dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ Route('films') }}"
                                class="ms-1 text-sm font-medium text-slate-300 hover:text-primary md:ms-2 dark:text-gray-400 dark:hover:text-white">Films</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href=""
                                class="ms-1 text-sm font-medium text-slate-300 hover:text-primary md:ms-2 dark:text-gray-400 dark:hover:text-white">Detail
                                Film</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="pt-12">
        <div class="container">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">{{ $error }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('checkout.process', $schedule->id) }}" method="POST">
                @csrf
                <h1 class="text-primary text-center text-3xl lg:text-5xl font-aquire font-bold mb-6">Choose your seats</h1>
                <h1 class="text-dark bg-white text-center text-xl lg:text-2xl font-aquire font-bold py-4 mb-6">Screen
                </h1>
                <ul class="grid w-full gap-6 grid-cols-7">
                    @foreach ($seats as $seat)
                        <li>
                            <div
                                class="form-check text-white bg-darkhover p-4 rounded-lg w-24 flex justify-center items-center">
                                <input class="form-check-input" type="checkbox" value="{{ $seat->id }}"
                                    id="seat{{ $seat->id }}" name="seats[]">
                                <label class="form-check-label" for="seat{{ $seat->id }}">
                                    {{ $seat->row }}{{ $seat->number }}
                                </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <button type="submit">
                    <div
                        class="cursor-pointer mt-6 text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Order
                    </div>
                </button>
            </form>
        </div>
    </div>
@endsection
