@extends('layout.master')

@section('title')
{{ $title }}
@endsection


@section('body')
    <h1>Buchung</h1>
    <div id="Buchung" class="w-full h-full">
        <ul>
            @foreach($piers as $pier)
                <li>{{ $pier['name'] }} - {{ $pier['is_active'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection

