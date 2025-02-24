<!doctype html>
<html lang="en" dir="rtl" lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets/') }}"
    data-template="vertical-menu-template">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('sit.ico') }}" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="CV System">
    <meta name="author" content="Siraj Al-marafa">
    <meta name="Keywords" content="CV System">
    @include('layouts.style')
    <title class="cairo-semi-bold"> @yield('title','Siraj Talent Gateway')</title>
</head>

<body class="main-body app sidebar-gone rtl">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @if (auth()->user()->role != 3)
                @include('layouts.sidebar')
            @endif
            <div class="layout-page @if(auth()->user()->role == 3) p-0 @endif">
                @include('layouts.header')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y" style="padding-inline: 14px;">
                        {{ $slot }}
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-hidden="true">
        @livewire('profile.main')
    </div>
    @include('layouts.script')
</body>

</html>
