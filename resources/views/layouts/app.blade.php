<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--}}

    {{-- import resource yang sudah di install oleh npm--}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>

    {{-- add component laravel.. ini adalah navbar dari ./components/navigation-menu.blade.php --}}
    <x-navigation-menu />


    <main class="py-5">
        <div class="container">
            {{-- $slot akan di isi dengan apa yang ada di vew livewire --}}
            {{ $slot }}
        </div>
    </main>

    {{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>--}}
</body>
</html>
