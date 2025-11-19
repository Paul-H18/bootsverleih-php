@extends('layout.master')

@section('title')
    Registrierung
@endsection


@section('body')
    <div id="registration"></div>


    <script type="module" src="{{ base_url('build/registration.js') }}"></script>

@endsection