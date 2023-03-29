<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="description" content="Mini CRM System">
    <title>@yield('title','Mini CRM Dashboard | Mini CRM System')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('libraries.styles')
    @php
    $curr_url = Route::currentRouteName();
    @endphp

    <link href="{{ asset('img/logo/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo/logo.png') }}" rel="apple-touch-icon">
</head>

<body>
    @include('components.side-bar')
    <div class="main-content" id="panel">
        @include('components.nav')
        @yield('header')
        <div class="container-fluid mt--6">
            @yield('content')
        </div>
        @include('components.footer')
    </div>
    @include('libraries.scripts')
</body>

</html>
