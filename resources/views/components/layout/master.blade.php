<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ Config::get('app.name')  }} | {{ $title }}</title>
    <!-- CSS files -->
    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet"/>

  </head>
  <body >
    <script src="{{ asset('js/demo-theme.min.js') }}"></script>
    <div class="page">
      <!-- Sidebar -->
      <x-layout.sidebar/>
      <!-- Navbar -->
      <x-layout.navbar/>
      <div class="page-wrapper">
        <!-- Page header -->
        {{--<div class="page-header d-print-none">--}}
          {{--<div class="container-xl">--}}
            {{--<div class="row g-2 align-items-center">--}}
              {{--<div class="col">--}}
                {{--<!-- Page pre-title -->--}}
                {{--<div class="page-pretitle">--}}
                  {{--Overview--}}
                {{--</div>--}}
                {{--<h2 class="page-title">--}}
                  {{--Combo layout--}}
                {{--</h2>--}}
              {{--</div>--}}
              {{--<!-- Page title actions -->--}}
              {{--<div class="col-auto ms-auto d-print-none">--}}
                {{--<div class="btn-list">--}}
                  {{--<span class="d-none d-sm-inline">--}}
                    {{--<a href="#" class="btn">--}}
                      {{--New view--}}
                    {{--</a>--}}
                  {{--</span>--}}
                  {{--<a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">--}}
                    {{--<!-- Download SVG icon from http://tabler-icons.io/i/plus -->--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>--}}
                    {{--Create new report--}}
                  {{--</a>--}}
                  {{--<a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">--}}
                    {{--<!-- Download SVG icon from http://tabler-icons.io/i/plus -->--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>--}}
                  {{--</a>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
              {{$slot}}
             </div>
            </div>
          </div>
        </div>
        <x-layout.footer/>
      </div>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('libs/list.js/dist/list.min.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/demo.min.js') }}" defer></script>
  </body>
</html>