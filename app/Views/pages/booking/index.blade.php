@extends('layout.master')

@section('title')
{{ $title }}
@endsection


@section('body')
    <div id="booking" class="w-full h-full" data-items='@json($piers)'></div>
@endsection


@section('scripts')
    <script type="module" src="{{ base_url('build/booking.js') }}"></script>
@endsection

