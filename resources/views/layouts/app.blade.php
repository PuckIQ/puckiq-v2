<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  @include('components.external.css')
  <title>PuckIQ</title>
</head>
<body>
  @include('inc.navbar')

  <div class="container-fluid mt-2">
    @if (Request::is('/'))
      @include('inc.welcome')
    @endif

    @yield('content')
  </div>

  <script src="/js/app.js"></script>
  @include('components.external.js')
  @yield('scripts')
</body>
</html>