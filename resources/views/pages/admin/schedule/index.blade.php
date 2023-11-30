@extends('layouts.admin.app')

@section('content')
    <h1 class="text-3xl font-bold text-primary">Schedule</h1>

    <div class="flex justify-center ml-4">
        <a href="{{ Route('schedule.create') }}"
            class=" cursor-pointer text-white bg-primary hover:bg-hover focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium  rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 h-6 me-2 " viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M256 112v288M400 256H112" />
            </svg>
            Add Schedule
        </a>
    </div>
    <div class="relative overflow-x-auto mt-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        film
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Studio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Seats
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $schedule->film->film_name }}
                            {{-- TODO mau ngambil nama film dari tabel film sesuai id film  --}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $schedule->studio->studio_name }}
                            {{-- TODO mau ngambil nama studio dari tabel studio sesuai id studio --}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->amount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $schedule->date }}
                        </td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('schedule.destroy', $schedule->id) }}" method="POST">
                                <a href="{{ route('schedule.edit', $schedule->id) }}"
                                    class="mt-5 text-primary hover:text-hover text-sm px-5 py-2.5 inline-flex items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 h-6 me-2"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32"
                                            d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z" />
                                    </svg></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="mt-5 text-primary hover:text-hover text-sm px-5 py-2.5 inline-flex items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 h-6 me-2"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                            stroke-width="32" d="M80 112h352" />
                                        <path
                                            d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
