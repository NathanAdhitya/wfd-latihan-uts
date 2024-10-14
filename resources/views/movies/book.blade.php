@extends('layouts.base')

@section('title', 'Movies')

@section('content')
    <div class="container my-4 mx-auto">
        <form action="{{ route('ticket.submit') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="movie_id" value="{{ $movie->id }}" />

            @csrf
            <div class="border-b border-gray-200 pb-3">
                <h2 class="text-base font-semibold text-gray-700">Order Ticket: {{ $movie->movie_title }}</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <x-input.text-field label="Customer Name" id="customer_name" name="customer_name" maxlength="100" />
                    </div>
                    <div class="sm:col-span-3">
                        <x-input.text-field label="Seat Number" id="seat_number" name="seat_number" maxlength="5" />
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('movies.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                </div>
            </div>
    </div>
@endsection
