@extends('layout.master')

@section('title')
    {{ $title }}
@endsection


@section('body')
    <h1 class="">{{ $title }}</h1>
    <h3 class="">Coole Page!</h3>

{{--    <div id="registration"></div>--}}



{{--    <script type="module" src="{{ base_url('build/registration.js') }}"></script>--}}

@endsection