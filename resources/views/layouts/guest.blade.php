<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    {{-- import resource yang sudah di install oleh npm--}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>

<main class="py-5">
    <div class="container">
        <div class="row align-items-center min-vh-100 justify-content-center">
            <div class="col-md-5">
                {{-- $slot akan di isi dengan apa yang ada di vew livewire --}}
                {{ $slot }}
            </div>
        </div>
    </div>
</main>

</body>
</html>
