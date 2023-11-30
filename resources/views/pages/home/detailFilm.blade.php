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
            <h1 class="text-primary text-center text-3xl lg:text-5xl font-aquire font-bold mb-6">Detail Film</h1>
            <div class="flex flex-col gap-5  border-gray-200 rounded-lg dark:border-gray-700 mt-3">
                <a
                    class=" grid grid-flow-row lg:grid-cols-3 items-center bg-transparent rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="md:h-96 md:w-[18rem] md:pl-8">
                        <img class="object-cover w-full h-full rounded-t-lg md:rounded-lg shadow-lg"
                            src="{{ asset('storage/films/' . $film->image) }}">
                    </div>
                    <div class="flex flex-col p-4 leading-norma justify-start">
                        <table class="text-sm text-left text-gray-400 dark:text-gray-400">
                            <tbody>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Name
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $film->film_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Genre
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $film->genre }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Duration
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $film->duration }}

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Age
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $film->age }} +

                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Director
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $film->director }}

                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="pt-12">
        <div class="container">
            <h1 class="text-white text-3xl lg:text-4xl font-aquire font-bold mb-6">Synopsis</h1>
            <p class="text-base text-white">
                {{ $film->synopsis }}
            </p>
        </div>
    </div>
    <div class="pt-12">
        <div class="container">
            <h1 class="text-white text-2xl lg:text-3xl font-bold mb-6">Economy</h1>
            <ul class="flex flex-row gap-5">
                {{-- @foreach ($film->films as $item)
                    <form action="{{ Route('checkout.process', $item->id) }}">
                        @if ($item->studio->type == 'Economy')
                            <li>
                                <input type="radio" id="{{ $item->id }}" name="{{ $item->id }}"
                                    value="{{ $item->time }}" class="hidden peer" required>
                                <label for="{{ $item->id }}"
                                    class="inline-flex items-center justify-center p-3 w-28 text-white border-darkhover bg-darkhover border rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-white hover:text-white hover:bg-primary ">
                                    <div class="block">
                                        <div class="w-full text-base ">{{ $item->time }}</div>
                                    </div>
                                </label>
                            </li>
                        @endif
                @endforeach --}}
                @foreach ($film->films as $item)
                    @if ($item->studio->type == 'Economy')
                        <li>
                            <a href="{{ route('detail-ticket', $item->id) }}"
                                class="inline-flex items-center justify-center p-3 w-28 text-white border-darkhover bg-darkhover border rounded-lg cursor-pointer hover:text-white hover:bg-primary ">
                                {{ $item->time }}</a>
                        </li>
                    @endif
                @endforeach


            </ul>

            <h1 class="text-white text-2xl lg:text-3xl font-bold mb-6 mt-8">VIP</h1>
            <ul class="flex flex-row gap-5">
                {{-- @foreach ($film->films as $item)
                    @if ($item->studio->type == 'VIP')
                        <li>
                            <input type="radio" id="{{ $item->id }}" name="{{ $item->id }}"
                                value="{{ $item->time }}" class="hidden peer" required>
                            <label for="{{ $item->id }}"
                                class="inline-flex items-center justify-center p-3 w-28 text-white border-darkhover bg-darkhover border rounded-lg cursor-pointer peer-checked:border-primary peer-checked:text-white hover:text-white hover:bg-primary ">
                                <div class="block">
                                    <div class="w-full text-base ">{{ $item->time }}</div>
                                </div>
                            </label>
                        </li>
                    @endif
                @endforeach --}}
                @foreach ($film->films as $item)
                    @if ($item->studio->type == 'VIP')
                        <li>
                            <a href="{{ route('detail-ticket', $item->id) }}"
                                class="inline-flex items-center justify-center p-3 w-28 text-white border-darkhover bg-darkhover border rounded-lg cursor-pointer hover:text-white hover:bg-primary ">
                                {{ $item->time }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>




        </div>
    </div>
@endsection
