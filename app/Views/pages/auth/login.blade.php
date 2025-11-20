@extends('layout.master')

@section('title')
    Login
@endsection


@section('body')
    <div id="login"></div>

    <script type="module" src="{{ base_url('build/login.js') }}"></script>
@endsection