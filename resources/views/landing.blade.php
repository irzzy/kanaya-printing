@extends('layouts.app')

@section('content')
<section id="home" class="vh-100 d-flex align-items-center text-center text-white hero-bg">
    <div class="overlay"></div>
    <div class="container animate-on-scroll position-relative">
        <h1 class="display-3 fw-bold">KANAYA</h1>
        <h3>"DIGITAL PRINTING & KONVEKSI"</h3>
        <a href="#produk" class="btn btn-light btn-lg mt-3">Lihat Produk</a>
    </div>
</section>

<style>
    .hero-bg {
        position: relative;
        background-size: cover;
        background-position: center;
        transition: opacity 1s ease-in-out;
    }

    .hero-bg .overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .hero-bg .container {
        z-index: 2;
        position: relative;
    }

    .fade-out {
        opacity: 0;
    }
    .fade-in {
        opacity: 1;
    }
</style>

<script>
    const images = [
        "/images/hero/slide1.jpg",
        "/images/hero/slide2.jpg",
        "/images/hero/slide3.jpg",
        "/images/hero/slide4.jpg",
        "/images/hero/slide5.jpg",
        "/images/hero/slide6.jpg"
    ];

    let current = 0;
    const hero = document.querySelector(".hero-bg");

    hero.style.backgroundImage = `url(${images[current]})`;

    setInterval(() => {
        hero.classList.add("fade-out");

        setTimeout(() => {
            current = (current + 1) % images.length;
            hero.style.backgroundImage = `url(${images[current]})`;

            hero.classList.remove("fade-out");
            hero.classList.add("fade-in");

            setTimeout(() => hero.classList.remove("fade-in"), 1000);
        }, 1000);
    }, 5000);
</script>
<section id="about" class="py-5 bg-light animate-on-scroll">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary fw-bold">Tentang Kami</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    PT. Kanaya adalah mitra terpercaya Anda untuk solusi cetak digital, offset, dan desain grafis. 
                    Berdiri sejak tahun 2016, kami didukung oleh tim profesional berpengalaman serta teknologi cetak modern 
                    untuk menghadirkan hasil terbaik bagi setiap klien.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100 hover-card text-center">
                        <div class="icon-circle mb-3">
                            <i class="bi bi-bullseye text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold text-dark">Visi</h5>
                        <p class="text-muted">
                            Menjadi perusahaan percetakan dan desain grafis terpercaya yang memberikan solusi kreatif, 
                            inovatif, dan berkualitas tinggi.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100 hover-card">
                        <div class="icon-circle mb-3 text-center">
                            <i class="bi bi-lightbulb text-warning fs-1"></i>
                        </div>
                        <h5 class="fw-bold text-dark text-center">Misi</h5>
                        <ul class="text-muted">
                            <li>Memberikan layanan berkualitas terbaik.</li>
                            <li>Menghadirkan produk inovatif dan presisi.</li>
                            <li>Membangun hubungan jangka panjang dengan klien.</li>
                            <li>Meningkatkan efisiensi dan kreativitas.</li>
                            <li>Menyediakan solusi ramah lingkungan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="produk" class="py-5 bg-light animate-on-scroll">
    <section id="produk-digital" class="py-5 text-white animate-on-scroll h1-bg">
        <div class="overlay"></div>
        <div class="container text-center position-relative">
            <h2 class="mb-5">Digital Printing</h2>

            <div id="carouselDigital" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $digitalList = [
                            ['nama' => 'Kartu Nama', 'foto' => 'products/kartu-nama.jpg'],
                            ['nama' => 'Poster A3', 'foto' => 'products/poster-a3.png'],
                            ['nama' => 'Brosur/Flyer', 'foto' => 'products/brosur-flyer.jpg'],
                            ['nama' => 'Kalender Dinding', 'foto' => 'products/kalender-dinding.png'],
                            ['nama' => 'Nota', 'foto' => 'products/nota.png'],
                            ['nama' => 'Banner', 'foto' => 'products/banner.png'],
                        ];
                        $chunks = array_chunk($digitalList, 3); // tampilkan 3 per slide
                    @endphp

                    @foreach ($chunks as $key => $chunk)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="row g-4">
                                @foreach ($chunk as $produk)
                                    <div class="col-md-4">
                                        <div class="card h-100 shadow-sm border-0">
                                            <img src="{{ asset('images/' . $produk['foto']) }}" 
                                                class="card-img-top" alt="{{ $produk['nama'] }}">
                                            <div class="card-body">
                                                <h5 class="card-title text-dark">{{ $produk['nama'] }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDigital" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDigital" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section id="produk-konveksi" class="py-5 text-white animate-on-scroll h2-bg">
        <div class="overlay"></div>
        <div class="container text-center position-relative">
            <h2 class="mb-5">Konveksi</h2>

            <div id="carouselKonveksi" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $konveksiList = [
                            ['nama' => 'Kaos', 'foto' => 'products/kaos.png'],
                            ['nama' => 'Polo', 'foto' => 'products/polo.png'],
                            ['nama' => 'Seragam sekolah', 'foto' => 'products/sekolah.png'],
                            ['nama' => 'Kemeja', 'foto' => 'products/kemeja.png'],
                            ['nama' => 'Seragam Olahraga', 'foto' => 'products/raga.png'],
                            ['nama' => 'Hoodie', 'foto' => 'products/hoodie.png'],
                        ];
                        $chunks = array_chunk($konveksiList, 3);
                    @endphp

                    @foreach ($chunks as $key => $chunk)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="row g-4">
                                @foreach ($chunk as $produk)
                                    <div class="col-md-4">
                                        <div class="card h-100 shadow-sm border-0">
                                            <img src="{{ asset('images/' . $produk['foto']) }}" 
                                                class="card-img-top" alt="{{ $produk['nama'] }}">
                                            <div class="card-body">
                                                <h5 class="card-title text-dark">{{ $produk['nama'] }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselKonveksi" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselKonveksi" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <a href="{{ route('catalog') }}" class="btn btn-primary mt-4">Lihat Semua Produk</a>
        </div>
    </section>
</section>

<style>
    .h1-bg {
        position: relative;
        background: url("{{ asset('images/h1-bg.jpg') }}") center/cover no-repeat;
    }
    .h1-bg .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.6);
    }
    .h2-bg {
        position: relative;
        background: url("{{ asset('images/h2-bg.jpg') }}") center/cover no-repeat;
    }
    .h2-bg .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.6);
    }
.carousel-control-prev,
.carousel-control-next {
    width: auto;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
}

.carousel-control-prev {
    left: -60px;
}
.carousel-control-next {
    right: -60px;
}

@media (max-width: 768px) {
    .carousel-control-prev {
        left: 10px;
    }
    .carousel-control-next {
        right: 10px;
    }
}


.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-image: none;
    width: 40px;
    height: 40px;
}

.carousel-control-prev-icon::after,
.carousel-control-next-icon::after {
    content: '';
    display: inline-block;
    width: 100%;
    height: 100%;
    mask-size: cover;
    mask-position: center;
    -webkit-mask-size: cover;
    -webkit-mask-position: center;
    background-color: #fff;
}

.carousel-control-prev-icon::after {
    mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 16 16'%3e%3cpath fill='white' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
    -webkit-mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 16 16'%3e%3cpath fill='white' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon::after {
    mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 16 16'%3e%3cpath fill='white' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    -webkit-mask-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 16 16'%3e%3cpath fill='white' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

</style>



    <section id="mesin" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-5 text-center text-primary">Mesin Pendukung</h2>

            <div class="mesin-slider">
                <div class="mesin-track">
                    @php
                        $mesinList = [
                            ['nama' => 'Mesin Cetak GTO 52', 'foto' => 'mesin/kertas.jpg'],
                            ['nama' => 'Mesin CTCP', 'foto' => 'mesin/Mesin CTCP.jpg'],
                            ['nama' => 'Mesin Cetak Offset Toko 820', 'foto' => 'mesin/toko820.png'],
                            ['nama' => 'Mesin Cetak Offset GTO 52', 'foto' => 'mesin/Mesin Cetak Offset GTO 52.png'],
                            ['nama' => 'Mesin Cetak Offset Ryobi 520', 'foto' => 'mesin/Mesin Cetak Offset Ryobi 520.png'],
                            ['nama' => 'Mesin Cutting Sticker atau Vinyl Cutter', 'foto' => 'mesin/Mesin Cutting Sticker atau Vinyl Cutter.png'],
                            ['nama' => 'Mesin Heat Press (Pressing Machine)', 'foto' => 'mesin/Mesin Heat Press (Pressing Machine).png'],
                        ];
                    @endphp

                    @foreach ($mesinList as $mesin)
                        <div class="mesin-card">
                            <div class="card border-0 shadow h-100 text-center hover-card">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center p-3">
                                    <div class="icon-wrapper mb-3">
                                        <img src="{{ asset('images/' . $mesin['foto']) }}" class="img-fluid rounded" alt="{{ $mesin['nama'] }}">
                                    </div>
                                    <h6 class="fw-bold text-dark">{{ $mesin['nama'] }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($mesinList as $mesin)
                        <div class="mesin-card">
                            <div class="card border-0 shadow h-100 text-center hover-card">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center p-3">
                                    <div class="icon-wrapper mb-3">
                                        <img src="{{ asset('images/' . $mesin['foto']) }}" class="img-fluid rounded" alt="{{ $mesin['nama'] }}">
                                    </div>
                                    <h6 class="fw-bold text-dark">{{ $mesin['nama'] }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="klien" class="py-5 animate-on-scroll">
    <div class="container text-center">
        <h2 class="mb-5 text-primary">Klien Kami</h2>
        <div class="logo-slider">
        <div class="logo-track">
            @foreach (['client1.png','client2.png','client3.png','client4.png','client5.png'] as $client)
            <img src="{{ asset('images/clients/' . $client) }}" alt="Logo {{ $client }}">
            @endforeach
            @foreach (['client1.png','client2.png','client3.png','client4.png','client5.png'] as $client)
            <img src="{{ asset('images/clients/' . $client) }}" alt="Logo {{ $client }}">
            @endforeach
        </div>
        </div>
    </div>
    </section>

    <section id="kontak" class="py-5 bg-light animate-on-scroll">
        <div class="container">
            <h2 class="mb-4 text-primary text-center">Kontak Kami</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="p-4 shadow-sm bg-white rounded">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>

                    <div class="mt-3">
                        <a href="https://drive.google.com/file/d/1lZiccY4PgWUnheTjqR7OaUntvDXpQefQ/view?usp=sharing" target="_blank" class="btn btn-outline-primary btn-lg w-100"> <i class="bi bi-file-earmark-pdf-fill me-2"></i> Unduh Compro (PDF) </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <h5>Alamat</h5>
                        <p>JL KH HASYIM ASHARI NO 26, Desa/Kelurahan Pondok Pucung, Kec. Karang Tengah, Kota Tangerang, Banten, 15158</p>
                    </div>

                    <div class="mb-3">
                        <h5>Email</h5>
                        <a href="mailto:kanaya.printing2010@gmail.com">kanaya.printing2010@gmail.com</a>
                    </div>

                    <div class="mb-3">
                        <h5>Telp</h5>
                        <a href="https://wa.me/6285178089774" target="_blank">085178089774</a>
                    </div>

                    <div class="mb-3">
                        <h5>Sosial Media</h5>
                        <a href="https://www.tiktok.com/@kanaya_konveksi" target="_blank" class="me-3"><i class="bi bi-tiktok fs-4"></i></a>
                        <a href="https://www.instagram.com/kanaya.printing/" target="_blank" class="me-3"><i class="bi bi-instagram fs-4"></i></a>
                    </div>

                    <div class="mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.2347533987577!2d106.70177497411379!3d-6.224426993763651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa1e92ba1693%3A0x981b7c8fc03d043d!2sJl.%20KH.%20Hasyim%20Ashari%20No.26%2C%20RT.001%2FRW.002%2C%20Karang%20Tengah%2C%20Kec.%20Karang%20Tengah%2C%20Kota%20Tangerang%2C%20Banten%2015157!5e1!3m2!1sid!2sid!4v1757871936457!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <button id="scrollTopBtn"><i class="bi bi-arrow-up"></i></button>
    <a href="https://api.whatsapp.com/send/?phone=6285178089774&text=Halo%2C+saya+ingin+bertanya+tentang+produk+Anda&type=phone_number&app_absent=0" target="_blank" id="whatsappBtn"><i class="bi bi-whatsapp"></i></a>

    <style>
        .icon-circle {
        width: 70px;
        height: 70px;
        background: #f1f5f9;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        }
        .hover-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }

        .mesin-slider {
        overflow: hidden;
        position: relative;
        width: 100%;
        }

        .mesin-track {
            width: calc(280px * 14); 
            display: flex;
            animation: scroll-right 40s linear infinite;
        }

        @keyframes scroll-right {
            0% {
                transform: translateX(calc(-280px * 7));
            }
            100% {
                transform: translateX(0);
            }
        }

        .mesin-card {
            width: 250px;
            margin: 0 15px;
            flex-shrink: 0;
        }

        .mesin-card img {
            height: 150px;
            width: 100%;
            object-fit: cover;
        }

        
        .mesin-slider:hover .mesin-track {
            animation-play-state: paused;
        }

        .logo-slider {
        overflow: hidden;
        position: relative;
        }
        .logo-slider:hover .logo-track {
        animation-play-state: paused;
        }
        .logo-track {
        display: flex;
        width: calc(200px * 10);
        animation: scroll 25s linear infinite;
        }
        .logo-track img {
        height: 80px;
        margin: 0 40px;
        flex: 0 0 auto;
        filter: grayscale(0%);
        transition: transform 0.3s ease;
        }

        .logo-track img:hover {
        transform: scale(1.1);
        }

        @keyframes scroll {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
        }

        .navbar .nav-link.active {
            color: #0d47a1 !important;
            font-weight: bold;
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
            transform: translateY(-8px);
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
        document.addEventListener("scroll", function () {
            let scrollPos = window.scrollY + 100;
            document.querySelectorAll("section").forEach((section) => {
                if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                    document.querySelectorAll(".navbar .nav-link").forEach((link) => {
                        link.classList.remove("active");
                        if (link.getAttribute("href").includes(section.getAttribute("id"))) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        });

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animate");
                    }
                });
            },
            { threshold: 0.2 }
        );
        document.querySelectorAll(".animate-on-scroll").forEach((el) => observer.observe(el));

        const scrollBtn = document.getElementById("scrollTopBtn");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        });
        scrollBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
@endsection