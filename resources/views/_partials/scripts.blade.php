<script src="{{ asset('assets/js/bootstrap.js') }}"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/chartjs.min.js') }}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/admin/js/material-dashboard.min.js?v=3.1.0') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<x-sweetalert2/>
@yield('scripts')
