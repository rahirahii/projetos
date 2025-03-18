<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title ?? 'Smart Study' }}</title>
    @livewireStyles
</head>

<body style="background-color: rgb(251, 251, 236)">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Smart Study</a>
    
        </div>
    </nav>
    
    <div class='container'>
        {{ $slot }}
    </div>

    <div>
        <br>
        <footer class="bg-dark text-center text-lg-start" data-bs-theme="dark">
            <div class="text-center p-3">© 2025 Copyright:
                <a class="text-body" href="...">Smart Study</a>
            </div>
        </footer>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
