@extends('layouts.admin.app')

@section('content')
    <h1 class="text-3xl font-bold text-primary">transaction</h1>
    <div class="relative overflow-x-auto mt-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Transaction ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Schedule ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Film
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Seats
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $transaction->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $transaction->user_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->schedule_id }} - time: {{ $transaction->schedules->time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->schedules->film->film_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->amount }}
                        </td>

                        <td class="px-6 py-4">
                            @foreach ($transaction->seatSelections as $selection)
                                {{ $selection->seat->row }}{{ $selection->seat->number }}
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->total }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->status }}
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
