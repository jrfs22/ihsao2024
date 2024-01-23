<!doctype html>
<html lang="en">
  @include('_partials.header')
  <body>
    @include('_partials.navbar')

    {{-- Content --}}
    <main>
      @yield('content')
    </main>

    @include('_partials.scripts')
  </body>
</html>