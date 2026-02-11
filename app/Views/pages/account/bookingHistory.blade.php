@extends('layout.master')

@section('title')
    {{ $title }}
@endsection


@section('body')
    <h1 class="text-3xl text-center mb-3">{{ $title }}</h1>

    <div class="flex flex-col items-center gap-10 m-4">
        @foreach($bookings as $index => $booking)
            <div class="flex flex-col gap-2 w-1/3 h-56 bg-green-500">
                <div>
                    Buchung vom: {{ $booking['created_at'] }} - Nr.: {{ $booking['id'] }}
                </div>
                <div>
                    Anleger: {{ $piers[$index]['name'] }}
                </div>
                <div>
                    Ab: {{ $booking['starting_at'] }}
                </div>
                <div>
                    Bis: {{ $booking['ending_at'] }}
                </div>
            </div>
        @endforeach
    </div>



@endsection