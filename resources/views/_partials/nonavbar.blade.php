<!doctype html>
<html lang="en">
  @include('_partials.header')
  <body class="online-test">

    {{-- Content --}}
    <main>
      @yield('content')
    </main>

    @include('_partials.scripts')
  </body>
</html>