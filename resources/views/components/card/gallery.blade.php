@props([
    'title' => 'Karya Tulis Ilmiah (KTI)', 
    'deskripsi' => 'Lomba karya tulis ilmiah merupakan wahana mahasiswa dalam berlatih menuliskan ide-ide kreatif sebagai respon intelektual atas persoalan-persoalan aktual yang dihadapi masyarakat. Ide tersebut seyogyanya unik, kreatif dan bermanfaat sehingga idealisasi kampus sebagai pusat solusi dapat menjadi kenyataan.']
    )
<div class="card" data-aos="fade-up">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">
            {{ $deskripsi }}
        </p>
    </div>
</div>
