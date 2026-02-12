@extends('layout.master')

@section('title')
    {{ $title }}
@endsection

@section('body')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl text-center mb-8">{{ $title }}</h1>

        @if(empty($bookings))
            <div class="text-center py-12">
                <p class="text-gray-400 text-lg">Sie haben noch keine Buchungen.</p>
            </div>
        @else
            <div class="flex flex-col items-center gap-6">
                @foreach($bookings as $booking)
                    <div class="w-full max-w-2xl bg-emerald-500 rounded-3xl p-6">
                        <div class="text-white">
                            <p class="text-lg font-semibold mb-2">
                                Buchung vom {{ $booking['created_at_formatted'] }} - Nr. {{ $booking['id'] }}
                            </p>
                            <p class="mb-1">
                                Anleger: {{ $booking['pier']['name'] }}
                            </p>
                            <p class="mb-1">
                                Ab: {{ $booking['starting_at_formatted'] }}
                            </p>
                            <p class="mb-1">
                                Bis: {{ $booking['ending_at_formatted'] }}
                            </p>
                            <p>
                                Dauer: {{ $booking['duration_days'] }} Tag(e)
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection