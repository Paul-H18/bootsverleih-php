@extends('layout.master')

@section('title')
    {{ $title }}
@endsection


@section('body')
    <h1 class="text-red-500">{{ $title }}</h1>
    <h3 class="text-amber-700">Coole Page!</h3>

{{--    <div id="registration"></div>--}}



{{--    <script type="module" src="{{ base_url('build/registration.js') }}"></script>--}}

@endsection