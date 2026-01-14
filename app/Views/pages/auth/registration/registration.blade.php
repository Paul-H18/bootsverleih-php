@extends('layout.master')

@section('title')
    Registrierung
@endsection


@section('body')
    <div id="registration" class="w-full h-full">

    </div>
@endsection

@section('scripts')
    <script type="module" src="{{ base_url('build/registration.js') }}"></script>
@endsection