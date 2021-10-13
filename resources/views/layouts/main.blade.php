<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fumetti | @yield('title')</title>

    @yield('cdns')
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    {{--HEADER--}}
    @include('includes.header')

    {{--MAIN CONTENT--}}
    <main class="container">
        <section id="@yield('section-id')">{{--mettiamo lo yield nel id cosi possiamo passarlo tramite id il nome della section e la classe --}}
            <div class="card main-card my-5 p-5">
                @yield('content')
            </div>
            
        </section>
        
    </main>

    @include('includes.footer')


    {{--SCRIPT--}}
    @yield('script')
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>