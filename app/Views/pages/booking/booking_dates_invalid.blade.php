@extends('layout.master')

@section('title')
    Fehler
@endsection


@section('body')
    <h1 class="text-3xl text-center">Fehler</h1>

    <div class="text-center m-12">
        <p>
            Das Startdatum muss vor dem Enddatum liegen!
        </p>
    </div>


@endsection