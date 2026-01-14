<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Bootsverleih</title>
    <link rel="stylesheet" href="{{ base_url('build/style.css') }}">


</head>
<body class="bg-gray-900 text-gray-100 ">

@yield('body')


<script>
    window.backend = {
        token: '{{ csrf_token() }}',
        hash: '{{ csrf_hash() }}',
        routes: {
            registration: {
                register: '{{ route_to('registration.register') }}',
            },
            login: {
                login: '{{ route_to('login.login') }}',
            },
        }
    }
</script>

@yield('scripts')

</body>
</html>