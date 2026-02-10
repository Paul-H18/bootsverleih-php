<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Bootsverleih</title>
    <link rel="stylesheet" href="{{ base_url('build/style.css') }}">


</head>
<body class="bg-gray-900 text-gray-100 ">
@if(!url_is('login') && !url_is('registration'))
    @include('layout.navbar')
@endif


@yield('body')


<script>
    window.backend = {
        token: '{{ csrf_token() }}',
        hash: '{{ csrf_hash() }}',
        routes: {
            registration: {
                index: '{{ route_to('registration') }}',
                register: '{{ route_to('registration.register') }}',
            },
            login: {
                index: '{{ route_to('login') }}',
                login: '{{ route_to('login.login') }}',
            },
            booking: {
                pay: '{{ route_to('booking.pay') }}'
            }
        }
    }
</script>
<script type="module" src="{{ base_url('build/navigation.js') }}"></script>
@yield('scripts')

</body>
</html>