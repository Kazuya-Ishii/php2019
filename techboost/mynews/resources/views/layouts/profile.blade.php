<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devise-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- あとで説明 --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- 各ページごとにtitleタグを入れるために＠yieldで空けておく --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを揉み込ませる --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- この章の後半で作成するCSSを読み込みまセル --}}
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      {{-- 画面上部に表示させるナブバー --}}
      <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name','Laravel') }}
          </a>
          <button class="navbar-toggler" type="button" date-toggler="collapse" date-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expand="fales" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- LEFT SIDE OF nAvbAR -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side of Nav -->
            <ul class="navbar-nav ml-auto">

            </ul>
          </div>
        </div>
      </nav>
      {{-- ここまでナビゲーションバー --}}

      <main class="py-4">
        {{-- ここにコンテンツを入れるため、@yieldで空けておく --}}
        @yield('content')
      </main>
    </div>
  </body>
</html>
