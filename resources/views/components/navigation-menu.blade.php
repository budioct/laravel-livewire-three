<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{-- add component laravel.. ini adalah link dari /components/nav-link.blade.php --}}
                {{-- href="{{ route('home') }}" route yang di set oleh method ->name('home') --}}
                {{-- :active="request()->routeIs('home')" meng-aktifkan css ketika users di halaman ini navbar akan nyala --}}
                <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link>

{{--                <x-nav-link :active="request()->routeIs('about')" href="{{ route('about') }}">About</x-nav-link>--}}

                {{-- :href adalah route dynamic tanpa {{}} --}}
{{--                <x-nav-link :active="request()->routeIs('contact')" :href="route('contact')">Contact</x-nav-link>--}}

                <x-nav-link :active="request()->routeIs('posts.*')" href="/posts">Posts</x-nav-link>

            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth()
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">
                            Log out
                        </button>
                    </form>

{{--                    <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Log out</x-nav-link>--}}
                @else
                    <x-nav-link href="/login">Login</x-nav-link>
                @endauth
            </ul>

        </div>
    </div>
</nav>
