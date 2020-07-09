@php
    $navThemeItems = 'nav-item nav-link';

    $navActive = function($routeName) {
        return (Route::currentRouteName() === $routeName) ?'active':'';
    };
    $generateNavAttributes = function($routeName) use ($navThemeItems, $navActive) {
        $url = route($routeName);
        $classes = "{$navThemeItems} {$navActive($routeName)}";

        return "class='{$classes}' href='{$url}'";
    };
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">Komplain Apps</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a {!! $generateNavAttributes('komplain') !!}>Komplain <span class="sr-only">(current)</span></a>
            {{-- <a {!! $generateNavAttributes('operator') !!}>Operator</a> --}}
        </div>
    </div>
</nav>