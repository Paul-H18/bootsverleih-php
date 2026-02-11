@extends('layout.master')

@section('title')
    {{ $title }}
@endsection


@section('body')
    <h1 class="text-3xl text-center">{{ $title }}</h1>

    <div class="text-lg text-center">
        <p>Ihre Buchung war erfolgreich!</p>
        <br>
        <p>
            Wir erwarten Sie am {{ $startDate }} bei uns in Plau am See.
            <br>
            Ihr gebuchter Anleger "{{ $pier['name'] }}" steht ab 12 uhr für Sie zur Verfügung.
        </p>
        <p>
            @if($booking['payment_method'] === 'cash')
                Bitte denken Sie daran den Betrag von über {{ $pier['price'] }}€ am Anreisetag vorne am Schalter,
                <br>
                bar ,zu bezahlen.
            @else
                Sie erhalten in kürze Ihre Zahlungsbestätigung per E-Mail. Zeigen Sie diese bitte am Anreisetag
                <br>
                vorne am Schalter vor.
            @endif
            <br>
        </p>





    </div>



@endsection