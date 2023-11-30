@extends('layouts.home.app')


@section('content')
    {{-- TODO Ngoding dibawh ini --}}

    <div class="pt-24">
        <div class="container">
            {{-- alert --}}

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
            <h1 class="text-primary text-center text-3xl lg:text-5xl font-aquire font-bold mb-6">Detail Transaksi</h1>
            <div class="flex flex-col gap-5  border-gray-200 rounded-lg dark:border-gray-700 mt-3">
                <a
                    class=" grid grid-flow-row lg:grid-cols-3 items-center bg-transparent rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="flex flex-col p-4 leading-normal justify-center">
                        <table class="text-sm text-left text-gray-400 dark:text-gray-400">
                            <tbody>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Film Nama
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $items->schedules->film->film_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Studio
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $items->schedules->studio->studio_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Seats
                                    </th>
                                    <td class="px-6 py-4">
                                        @foreach ($items->seatSelections as $selection)
                                            {{ $selection->seat->row }}{{ $selection->seat->number }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Amount Ticket
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $items->amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                        Total
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $items->total }}
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
            <div class="flex justify-end">
                <a href="{{ route('checkout.success', $items->id) }}">
                    <div onclick="alert('Yeay, Your payment is successful, check your email')"
                        class="cursor-pointer mt-6 text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-12 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Pay Now
                    </div>
                </a>


            </div>
            <div class="flex justify-end">

                <p scope="row" class="px-6 py-4 font-medium text-xs text-gray-500 whitespace-nowrap dark:text-white">
                    Powered by midtrans
                </p>
            </div>
        </div>
    </div>

    {{-- @if (session('success'))
        <div class="flex items-center  w-96 p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
    @endif --}}
@endsection
