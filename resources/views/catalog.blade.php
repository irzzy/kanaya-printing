@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h1 class="text-center text-primary mb-5 animate-on-scroll">Catalog Produk</h1>

        <h2 class="text-center text mb-4">Digital Printing</h2>
        <div class="row g-4 mb-5">
            @php
                $digitalProducts = [
                    ['name' => 'Kartu Nama (1 box isi 100)', 'image' => 'kartu-nama.jpg'],
                    ['name' => 'Poster A3', 'image' => 'poster-a3.png'],
                    ['name' => 'Brosur / Flyer', 'image' => 'brosur-flyer.jpg'],
                    ['name' => 'Kalender Meja', 'image' => 'kalender-meja.jpg'],
                    ['name' => 'Sertifikat (A4)', 'image' => 'sertifikat-a4.png'],
                    ['name' => 'Kalender Dinding', 'image' => 'kalender-dinding.png'],
                    ['name' => 'Nota (rangkap 2, 1 buku isi 50 set)', 'image' => 'nota.png'],
                    ['name' => 'ID Card + Tali Lanyard', 'image' => 'lanyard.png'],
                    ['name' => 'Stiker Label (rangkap 2, 1 buku isi 50 set)', 'image' => 'stiker-label.png'],
                    ['name' => 'Cutting Sticker (10x10 cm)', 'image' => 'cutting-sticker.png'],
                    ['name' => 'Banner', 'image' => 'banner.png'],
                    ['name' => 'Box Custom Ukuran Kecil', 'image' => 'box-custom.png'],
                    ['name' => 'Sleeve Kemasan', 'image' => 'sleeve-kemasan.png'],
                    ['name' => 'Print Dokumen Warna (A4, 1 lembar)', 'image' => 'print-dokumen.png'],
                    ['name' => 'Cetak Buklet / Booklet (A5, 12 halaman)', 'image' => 'booklet.png'],
                ];
            @endphp

            @foreach ($digitalProducts as $index => $product)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('images/products/' . $product['image']) }}"
                             onerror="this.src='https://picsum.photos/400/250?random={{ $index + 1 }}';"
                             class="card-img-top"
                             alt="Gambar {{ $product['name'] }}"
                             style="height: 200px; object-fit: scale-down;">
                        <div class="card-body text-center">
                            <h6 class="card-title">{{ $product['name'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-center text mb-4">Konveksi</h2>
        <div class="row g-4">
            @php
                $konveksiProducts = [
                    ['nama' => 'Kaos', 'foto' => 'products/kaos.png'],
                    ['nama' => 'Polo', 'foto' => 'products/polo.png'],
                    ['nama' => 'Seragam sekolah', 'foto' => 'products/sekolah.png'],
                    ['nama' => 'Kemeja', 'foto' => 'products/kemeja.png'],
                    ['nama' => 'Seragam Olahraga', 'foto' => 'products/raga.png'],
                    ['nama' => 'Hoodie', 'foto' => 'products/hoodie.png'],
                    ['nama' => 'Jaket', 'foto' => 'products/jaket.png'],
                    ['nama' => 'Baju. Bayi', 'foto' => 'products/bayi.png'],
                    ['nama' => 'Seragam Komunitas', 'foto' => 'products/pemudapancasila.png'],
                ];
            @endphp

            @foreach ($konveksiProducts as $index => $product)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('images/' . $product['foto']) }}"
                             onerror="this.src='https://picsum.photos/400/250?random={{ $index + 20 }}';"
                             class="card-img-top"
                             alt="Gambar {{ $product['nama'] }}"
                             style="height: 200px; object-fit: scale-down;">
                        <div class="card-body text-center">
                            <h6 class="card-title">{{ $product['nama'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="https://drive.google.com/file/d/1rGdKzzsfKJ_2Az13Mj4TjgzcJcO_k7Xz/view?usp=sharing" 
               target="_blank" 
               class="btn btn-primary btn-lg">
                <i class="bi bi-file-earmark-pdf"></i> Unduh Katalog Lengkap (PDF)
            </a>
        </div>
    </div>
</section>

<button id="scrollTopBtn"><i class="bi bi-arrow-up"></i></button>
<a href="https://wa.me/6281234567890" target="_blank" id="whatsappBtn"><i class="bi bi-whatsapp"></i></a>

<style>
    .text {
        color: #0077b6;
    }
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }
    .animate-on-scroll.animate {
        opacity: 1;
        transform: translateY(0);
    }
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0px 10px 20px rgba(0,0,0,0.2);
    }
    #scrollTopBtn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        background: #1976d2;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    }
    #whatsappBtn {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        padding: 12px 14px;
        font-size: 24px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        z-index: 9999;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    #whatsappBtn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
</style>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate");
            }
        });
    }, { threshold: 0.2 });
    document.querySelectorAll(".animate-on-scroll").forEach((el) => observer.observe(el));

    const scrollBtn = document.getElementById("scrollTopBtn");
    window.addEventListener("scroll", () => {
        scrollBtn.style.display = window.scrollY > 300 ? "block" : "none";
    });
    scrollBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>
@endsection
