@extends('layouts.base')

@section('title', 'Tickets')

@section('content')
    <div class="container my-4 mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
            Tickets for: {{ $movie->movie_title }}
        </h2>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Seat Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Customer Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Check In
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movie->tickets as $ticket)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $ticket->seat_number }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $ticket->customer_name }}
                        </td>
                        <td class="px-6 py-4">
                            @if($ticket->is_checked_in)
                                {{ $ticket->checked_in_time }}
                            @else
                                <form method="POST" action="{{ route('ticket.checkin', $ticket) }}">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Check In
                                    </button>
                                </form>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if(!$ticket->is_checked_in)
                                <form method="POST" action="{{ route('ticket.delete', $ticket) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

