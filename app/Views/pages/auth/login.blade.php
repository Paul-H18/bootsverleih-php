@extends('layout.master')

@section('title')
    Login
@endsection


@section('body')
    <div id="login" class="w-full h-full">

    </div>
@endsection


@section('scripts')
    <script type="module" src="{{ base_url('build/login.js') }}"></script>
@endsection