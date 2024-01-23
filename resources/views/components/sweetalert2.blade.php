@if (session('update-babak'))
    @if (session('update-babak') == 'success')
        <script>
            Swal.fire({
                icon: "success",
                title: "update",
                text: "Berhasil update babak"
            });
        </script>
    @else
        <script>
            Swal.fire({
                icon: "error",
                title: "update",
                text: "Gagal update babak"
            });
        </script>
    @endif
@elseif (session('alert-add-peserta'))
    @if (session('alert-add-peserta') == 'success')
        <script>
            Swal.fire({
                icon: "success",
                title: "Tambah peserta",
                text: "Berhasil tambah peserta"
            });
        </script>
    @else
        <script>
            Swal.fire({
                icon: "error",
                title: "Tambah peserta",
                text: "Gagal tambah peserta"
            });
        </script>
    @endif
@elseif (session('login'))
    @if (session('login') == 'success')
        <script>
            Swal.fire({
                icon: "success",
                title: "Login",
                text: "Berhasil login"
            });
        </script>
    @else
        <script>
            Swal.fire({
                icon: "error",
                title: "Login",
                text: "Gagal login"
            });
        </script>
    @endif
@elseif (session('add-soal'))
    @if (session('add-soal') == 'success')
        <script>
            Swal.fire({
                icon: "success",
                title: "Tambah soal",
                text: "Berhasil"
            });
        </script>
    @else
        <script>
            var sessionValue = @json(session('add-soal'));
            Swal.fire({
                icon: "error",
                title: "Tambah soal",
                text: "Gagal " + sessionValue
            });
        </script>
    @endif
@elseif (session('akses-kode'))
    @if (session('akses-kode') == 'success')
        <script>
            Swal.fire({
                icon: "success",
                title: "Akses kode didapatkan",
                text: "Berhasil"
            });
        </script>
    @else
        <script>
            var sessionValue = @json(session('akses-kode'));
            Swal.fire({
                icon: "error",
                title: "Akses kode salah",
                text: "Akses " + sessionValue,
                footer: "Silahkan hubungi panitia",
                allowOutsideClick: false,
                showCloseButton: false,
                showCancelButton: false,
                confirmButtonText: "Lanjut ke test",
                onClose: function() {

                }
            });
        </script>
    @endif
@elseif (session('jawaban'))
    @if (session('jawaban') == 'success')
        <script>
            Swal.fire({
                icon: "success",
                title: "Jawaban",
                text: "Jawaban sudah di submit"
            });
        </script>
    @else
        <script>
            Swal.fire({
                icon: "error",
                title: "Jawaban",
                text: "Jawaban gagal di",
                footer: "Silahkan hubungi panitia",
            });
        </script>
    @endif
@elseif (session('doTest'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Kode akses tidak di temukan",
            text: "Masukkan kode akses terlebih dahulu",
            footer: "Silahkan hubungi panitia",
            confirmButtonText: "Ok",
        });
    </script>

@endif
