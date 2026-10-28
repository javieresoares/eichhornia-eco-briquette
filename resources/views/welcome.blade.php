<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eichhornia Eco Briquette | Biomass Innovation Project</title>

    <meta
        name="description"
        id="meta-description"
        content="Eichhornia Eco Briquette adalah proyek kewirausahaan mahasiswa tahun 2025 yang mengeksplorasi pemanfaatan sekam padi dan tempurung kelapa sebagai biomassa."
        data-description-id="Eichhornia Eco Briquette adalah proyek kewirausahaan mahasiswa tahun 2025 yang mengeksplorasi pemanfaatan sekam padi dan tempurung kelapa sebagai biomassa."
        data-description-en="Eichhornia Eco Briquette is a 2025 student entrepreneurship project exploring the use of rice husks and coconut shells as biomass resources."
    >

    <meta name="theme-color" content="#FBF9FA">
    <meta name="color-scheme" content="light">

    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FBF9FA] text-[#2B2024] antialiased">
    {{-- Header Section --}}
    <header class="site-header" id="site-header">
        <div class="header-container">

            {{-- Brand Identity --}}
            <a class="brand-logo" href="#beranda" aria-label="Eichhornia Eco Briquette">
                <img src="{{ asset('images/eichhornia-logo.png') }}" alt="" class="brand-image" width="42"
                    height="42" fetchpriority="high">

                <span class="brand-wordmark">
                    EICHHORNIA
                    <span>ECO BRIQUETTE</span>
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="main-navigation" id="main-navigation" aria-label="Navigasi utama">
                <a class="nav-link active" href="#beranda" data-nav="beranda" data-i18n="nav.home" aria-current="page">
                    Beranda
                </a>

                <a class="nav-link" href="#tentang-proyek" data-nav="tentang-proyek" data-i18n="nav.about">
                    Tentang
                </a>

                <a class="nav-link" href="#potensi-proyek" data-nav="potensi-proyek" data-i18n="nav.potential">
                    Potensi
                </a>

                <a class="nav-link" href="#eksplorasi-produk" data-nav="eksplorasi-produk" data-i18n="nav.products">
                    Produk
                </a>

                <a class="nav-link" href="#proses-pengembangan" data-nav="proses-pengembangan" data-i18n="nav.process">
                    Proses
                </a>

                <a class="nav-link" href="#pertanyaan-umum" data-nav="pertanyaan-umum" data-i18n="nav.faq">
                    Pertanyaan
                </a>

                <a class="nav-link" href="#informasi-proyek" data-nav="informasi-proyek" data-i18n="nav.information">
                    Informasi
                </a>
            </nav>

            {{-- Header Actions --}}
            <div class="header-actions">

                {{-- Language Switch --}}
                <div class="language-switch" role="group" aria-label="Pilihan bahasa"
                    data-i18n-aria-label="nav.language">
                    <button class="language-button is-active" type="button" data-language="id" aria-pressed="true">
                        ID
                    </button>

                    <span class="language-divider" aria-hidden="true">|</span>

                    <button class="language-button" type="button" data-language="en" aria-pressed="false">
                        EN
                    </button>
                </div>

                {{-- Mobile Menu Toggle --}}
                <button class="mobile-menu-toggle" id="mobile-menu-button" type="button"
                    aria-label="Buka menu navigasi" data-i18n-aria-label="nav.openMenu" aria-expanded="false"
                    aria-controls="main-navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </div>
    </header>
    {{-- Akhir Header Section --}}

    <main id="home">
        {{-- Beranda / Hero Section --}}
        <section class="hero-section" id="beranda">

            {{-- Full-section Background Image --}}
            <div class="hero-visual" aria-hidden="true">
                <img src="{{ asset('images/hero-briquette.png') }}" alt="" class="hero-product-image"
                    width="1648" height="928" fetchpriority="high">
            </div>

            {{-- Background Fade Overlay --}}
            <div class="hero-background-overlay" aria-hidden="true"></div>

            {{-- Hero Content --}}
            <div class="hero-container">
                <div class="hero-content scroll-reveal">

                    {{-- Eyebrow --}}
                    <div class="hero-eyebrow">
                        <span class="hero-eyebrow-dot" aria-hidden="true"></span>
                        <span data-i18n="hero.eyebrow">
                            INOVASI BRIKET BERBASIS BIOMASSA
                        </span>
                    </div>

                    {{-- Main Heading --}}
                    <h1 class="hero-title">
                        <span data-i18n="hero.title">
                            Biomassa Menjadi
                        </span>

                        <span class="hero-title-highlight" data-i18n="hero.titleHighlight">
                            Inovasi Briket.
                        </span>
                    </h1>

                    {{-- Description --}}
                    <p class="hero-description" data-i18n="hero.description">
                        Eichhornia Eco Briquette adalah inovasi briket biomassa
                        dari eceng gondok, sekam padi, dan residu arang tempurung
                        kelapa yang dikembangkan melalui proyek kewirausahaan mahasiswa.
                    </p>

                    {{-- Hero Actions --}}
                    <div class="hero-actions">

                        <a href="#tentang-proyek" class="hero-button-primary">
                            <span data-i18n="hero.buttonAbout">
                                Kenali Proyek
                            </span>

                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>

                        <a href="#eksplorasi-produk" class="hero-button-secondary" data-i18n="hero.buttonProducts">
                            Jelajahi Produk
                        </a>

                    </div>

                    {{-- Project Note --}}
                    <div class="hero-note">
                        <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>

                        <span data-i18n="hero.note">
                            Proyek Program Kreativitas Mahasiswa —
                            Bidang Kewirausahaan, 2025.
                        </span>
                    </div>

                </div>
            </div>
        </section>
        {{-- Akhir Beranda / Hero Section --}}

        {{-- Project Highlights --}}
        <section class="project-highlights" aria-label="Sorotan Eichhornia Eco Briquette"
            data-i18n-aria-label="highlights.ariaLabel">
            <div class="highlights-container">

                {{-- Highlight 1: Biomass Composition --}}
                <article class="highlight-item scroll-reveal">
                    <div class="highlight-icon" aria-hidden="true">
                        <i class="fa-solid fa-leaf"></i>
                    </div>

                    <div class="highlight-copy">
                        <h3 data-i18n="highlights.composition.title">
                            Komposisi Biomassa
                        </h3>

                        <p data-i18n="highlights.composition.description">
                            Mengombinasikan eceng gondok, sekam padi, dan tempurung
                            kelapa dalam satu formulasi produk briket.
                        </p>
                    </div>
                </article>

                {{-- Highlight 2: Product Forms --}}
                <article class="highlight-item scroll-reveal" data-delay="1">
                    <div class="highlight-icon" aria-hidden="true">
                        <i class="fa-solid fa-cubes"></i>
                    </div>

                    <div class="highlight-copy">
                        <h3 data-i18n="highlights.forms.title">
                            Tiga Variasi Bentuk
                        </h3>

                        <p data-i18n="highlights.forms.description">
                            Mengeksplorasi bentuk kubus, heksagonal, dan oktagonal
                            sebagai variasi desain produk.
                        </p>
                    </div>
                </article>

                {{-- Highlight 3: Product Development --}}
                <article class="highlight-item scroll-reveal" data-delay="2">
                    <div class="highlight-icon" aria-hidden="true">
                        <i class="fa-solid fa-box-open"></i>
                    </div>

                    <div class="highlight-copy">
                        <h3 data-i18n="highlights.development.title">
                            Pengembangan Produk
                        </h3>

                        <p data-i18n="highlights.development.description">
                            Mendokumentasikan proses perancangan dan pembuatan
                            briket berbasis kombinasi biomassa.
                        </p>
                    </div>
                </article>

            </div>
        </section>
        {{-- Akhir Project Highlights --}}

        {{-- Tentang Proyek --}}
        <section class="about-section" id="tentang-proyek">
            <div class="about-container">

                {{-- Left: Product Visual --}}
                <div class="about-visual">
                    <img src="{{ asset('images/about-briquette.png') }}"
                        alt="Ilustrasi konseptual briket biomassa dari sekam padi dan tempurung kelapa"
                        data-i18n-alt="about.imageAlt" width="1405" height="1024" loading="lazy">
                </div>

                {{-- Right: About Content --}}
                <div class="about-content scroll-reveal">

                    {{-- Eyebrow --}}
                    <div class="about-eyebrow">
                        <span class="about-eyebrow-line" aria-hidden="true"></span>

                        <span data-i18n="about.eyebrow">
                            TENTANG PROYEK
                        </span>
                    </div>

                    {{-- Heading --}}
                    <h2 class="about-title">
                        <span data-i18n="about.title">
                            Mengoptimalkan potensi biomassa untuk
                        </span>
                        <span data-i18n="about.titleHighlight">
                            nilai yang lebih bermakna.
                        </span>
                    </h2>

                    {{-- Description --}}
                    <p class="about-description" data-i18n="about.description1">
                        Dikembangkan pada 2025 melalui Program Kreativitas Mahasiswa
                        bidang Kewirausahaan (PKM-K), Eichhornia Eco Briquette
                        mengeksplorasi pemanfaatan eceng gondok, sekam padi, dan
                        residu arang tempurung kelapa dalam satu formulasi briket.
                    </p>

                    <p class="about-description" data-i18n="about.description2">
                        Proyek ini mencakup pengembangan produk hingga pemasaran,
                        menjadi pengalaman dalam mengolah potensi material lokal
                        menjadi produk yang memiliki nilai guna.
                    </p>

                    {{-- Key Values --}}
                    <div class="about-values">

                        {{-- Value 1 --}}
                        <article class="about-value">
                            <span class="about-value-icon" aria-hidden="true">
                                <i class="fa-solid fa-earth-asia"></i>
                            </span>

                            <div class="about-value-copy">
                                <h3 data-i18n="about.value1.title">
                                    Potensi Biomassa
                                </h3>

                                <p data-i18n="about.value1.description">
                                    Eksplorasi material lokal sebagai bahan briket.
                                </p>
                            </div>
                        </article>

                        {{-- Value 2 --}}
                        <article class="about-value">
                            <span class="about-value-icon" aria-hidden="true">
                                <i class="fa-solid fa-layer-group"></i>
                            </span>

                            <div class="about-value-copy">
                                <h3 data-i18n="about.value2.title">
                                    3 Material
                                </h3>

                                <p data-i18n="about.value2.description">
                                    Satu formulasi dalam pengembangan produk.
                                </p>
                            </div>
                        </article>

                        {{-- Value 3 --}}
                        <article class="about-value">
                            <span class="about-value-icon" aria-hidden="true">
                                <i class="fa-solid fa-people-group"></i>
                            </span>

                            <div class="about-value-copy">
                                <h3 data-i18n="about.value3.title">
                                    Pengalaman PKM-K
                                </h3>

                                <p data-i18n="about.value3.description">
                                    Pengembangan produk dan pengalaman pemasaran.
                                </p>
                            </div>
                        </article>

                    </div>

                    {{-- Explore Project Potential --}}
                    <a class="about-button" href="#potensi-proyek">
                        <span data-i18n="about.button">
                            Jelajahi Potensi Proyek
                        </span>

                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
        </section>
        {{-- Akhir Tentang Proyek --}}

        {{-- Karakteristik & Potensi --}}
        <section class="advantages-section" id="potensi-proyek" aria-label="Karakteristik dan potensi proyek"
            data-i18n-aria-label="advantages.ariaLabel">
            <div class="advantages-container">

                {{-- Section Heading --}}
                <div class="advantages-heading scroll-reveal">

                    <div class="advantages-heading-main">
                        <div class="advantages-eyebrow">
                            <span aria-hidden="true"></span>
                            <span data-i18n="advantages.eyebrow">
                                POTENSI PROYEK
                            </span>
                        </div>

                        <h2 class="advantages-title">
                            <span data-i18n="advantages.title">
                                Dari tantangan lingkungan menuju
                            </span>
                            <span data-i18n="advantages.titleHighlight">
                                peluang penciptaan nilai.
                            </span>
                        </h2>
                    </div>

                    <p class="advantages-intro" data-i18n="advantages.intro">
                        Berangkat dari persoalan eceng gondok di Danau Rawa Pening,
                        Eichhornia Eco Briquette mengeksplorasi potensi biomassa
                        sebagai bahan baku produk, sumber energi alternatif,
                        dan peluang pengembangan nilai ekonomi berbasis sumber
                        daya lokal.
                    </p>
                </div>

                {{-- Characteristic Cards --}}
                <div class="advantages-grid">

                    {{-- Card 1: Environmental Challenge --}}
                    <article class="advantage-card scroll-reveal">
                        <div class="advantage-icon" aria-hidden="true">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>

                        <h3 data-i18n="advantages.card1.title">
                            Tantangan Ekosistem Perairan
                        </h3>

                        <p data-i18n="advantages.card1.description">
                            Pertumbuhan eceng gondok yang tidak terkendali
                            menjadi salah satu tantangan pengelolaan Danau
                            Rawa Pening. Kondisi ini mendorong eksplorasi
                            pemanfaatan tanaman air tersebut sebagai bahan
                            baku produk alternatif.
                        </p>
                    </article>

                    {{-- Card 2: Biomass Utilization --}}
                    <article class="advantage-card scroll-reveal" data-delay="1">
                        <div class="advantage-icon" aria-hidden="true">
                            <i class="fa-solid fa-gear"></i>
                        </div>

                        <h3 data-i18n="advantages.card2.title">
                            Optimalisasi Biomassa
                        </h3>

                        <p data-i18n="advantages.card2.description">
                            Eceng gondok, sekam padi, dan residu arang
                            tempurung kelapa dipadukan dalam satu formulasi
                            untuk mengeksplorasi pemanfaatan biomassa dan
                            peningkatan nilai guna material.
                        </p>
                    </article>

                    {{-- Card 3: Alternative Energy --}}
                    <article class="advantage-card scroll-reveal" data-delay="2">
                        <div class="advantage-icon" aria-hidden="true">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>

                        <h3 data-i18n="advantages.card3.title">
                            Potensi Energi Alternatif
                        </h3>

                        <p data-i18n="advantages.card3.description">
                            Pengembangan briket biomassa mengeksplorasi
                            pemanfaatan bahan baku terbarukan sebagai
                            alternatif bahan bakar, khususnya untuk
                            kebutuhan pembakaran pada sektor rumah tangga
                            dan usaha kuliner.
                        </p>
                    </article>

                    {{-- Card 4: Local Economic Potential --}}
                    <article class="advantage-card scroll-reveal" data-delay="3">
                        <div class="advantage-icon" aria-hidden="true">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                        </div>

                        <h3 data-i18n="advantages.card4.title">
                            Potensi Nilai Ekonomi Lokal
                        </h3>

                        <p data-i18n="advantages.card4.description">
                            Pengembangan produk, pengemasan, dan pemasaran
                            membuka ruang untuk mengeksplorasi nilai ekonomi
                            biomassa serta peluang keterlibatan masyarakat
                            dan pelaku UMKM dalam rantai pemanfaatannya.
                        </p>
                    </article>

                </div>
            </div>
        </section>
        {{-- Akhir Karakteristik & Potensi --}}

        {{-- Eksplorasi Produk --}}
        <section class="products-section" id="eksplorasi-produk">
            <div class="products-container">

                {{-- Section Introduction --}}
                <div class="products-intro scroll-reveal">

                    <div class="products-eyebrow">
                        <span class="products-eyebrow-line" aria-hidden="true"></span>

                        <span data-i18n="products.eyebrow">
                            EKSPLORASI PRODUK
                        </span>
                    </div>

                    <h2 class="products-title">
                        <span data-i18n="products.title">
                            Satu formulasi biomassa,
                        </span>
                        <span data-i18n="products.titleHighlight">
                            tiga variasi bentuk.
                        </span>
                    </h2>

                    <p class="products-description" data-i18n="products.description">
                        Eichhornia Eco Briquette dikembangkan melalui satu
                        formulasi biomassa yang memadukan residu arang tempurung
                        kelapa, sekam padi, dan eceng gondok. Formulasi tersebut
                        dieksplorasi dalam tiga rancangan bentuk: kubus,
                        heksagonal, dan oktagonal.
                    </p>

                    <a href="#tentang-proyek" class="products-button">
                        <span data-i18n="products.button">
                            Kenali Latar Belakang Proyek
                        </span>

                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                {{-- Product Variants --}}
                <div class="products-grid">

                    {{-- Variant 1: Cube --}}
                    <article class="product-card scroll-reveal">
                        <div class="product-image">
                            <img src="{{ asset('images/briquette-cube.png') }}"
                                alt="Visual konseptual Eichhornia Eco Briquette berbentuk kubus"
                                data-i18n-alt="products.cube.imageAlt" class="product-card-image" width="1024"
                                height="1024" loading="lazy" decoding="async">
                        </div>

                        <div class="product-card-content">
                            <span class="product-category" data-i18n="products.cube.category">
                                VARIASI BENTUK 01
                            </span>

                            <h3 data-i18n="products.cube.title">
                                Briket Kubus
                            </h3>

                            <p data-i18n="products.cube.description">
                                Bentuk kubus dengan bidang sisi tegas
                                sebagai salah satu eksplorasi desain briket.
                            </p>

                            <div class="product-tags">
                                <span data-i18n="products.cube.tag1">Bentuk Kubus</span>
                                <span data-i18n="products.cube.tag2">Empat Sisi Tampak</span>
                            </div>
                        </div>
                    </article>

                    {{-- Variant 2: Hexagonal --}}
                    <article class="product-card scroll-reveal" data-delay="1">
                        <div class="product-image">
                            <img src="{{ asset('images/briquette-hexagonal.png') }}"
                                alt="Visual konseptual Eichhornia Eco Briquette berbentuk heksagonal"
                                data-i18n-alt="products.hexagonal.imageAlt" class="product-card-image" width="1024"
                                height="1024" loading="lazy" decoding="async">
                        </div>

                        <div class="product-card-content">
                            <span class="product-category" data-i18n="products.hexagonal.category">
                                VARIASI BENTUK 02
                            </span>

                            <h3 data-i18n="products.hexagonal.title">
                                Briket Heksagonal
                            </h3>

                            <p data-i18n="products.hexagonal.description">
                                Bentuk bersisi enam yang memperlihatkan
                                variasi geometri dalam rancangan produk.
                            </p>

                            <div class="product-tags">
                                <span data-i18n="products.hexagonal.tag1">Enam Sisi</span>
                                <span data-i18n="products.hexagonal.tag2">Desain Geometris</span>
                            </div>
                        </div>
                    </article>

                    {{-- Variant 3: Octagonal --}}
                    <article class="product-card scroll-reveal" data-delay="2">
                        <div class="product-image">
                            <img src="{{ asset('images/briquette-octagonal.png') }}"
                                alt="Visual konseptual Eichhornia Eco Briquette berbentuk oktagonal"
                                data-i18n-alt="products.octagonal.imageAlt" class="product-card-image" width="1024"
                                height="1024" loading="lazy" decoding="async">
                        </div>

                        <div class="product-card-content">
                            <span class="product-category" data-i18n="products.octagonal.category">
                                VARIASI BENTUK 03
                            </span>

                            <h3 data-i18n="products.octagonal.title">
                                Briket Oktagonal
                            </h3>

                            <p data-i18n="products.octagonal.description">
                                Bentuk bersisi delapan yang melengkapi
                                eksplorasi variasi desain briket.
                            </p>

                            <div class="product-tags">
                                <span data-i18n="products.octagonal.tag1">Delapan Sisi</span>
                                <span data-i18n="products.octagonal.tag2">Variasi Bentuk</span>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>
        {{-- Akhir Eksplorasi Produk --}}

        {{-- Proses Pengembangan --}}
        <section class="process-section" id="proses-pengembangan">
            <div class="process-container">

                {{-- Section Introduction --}}
                <div class="process-intro scroll-reveal">

                    <div class="process-eyebrow">
                        <span class="process-eyebrow-line" aria-hidden="true"></span>

                        <span data-i18n="process.eyebrow">
                            PROSES PENGEMBANGAN
                        </span>
                    </div>

                    <h2 class="process-title">
                        <span data-i18n="process.title">
                            Dari bahan baku menuju
                        </span>
                        <span data-i18n="process.titleHighlight">
                            briket siap digunakan.
                        </span>
                    </h2>

                    <p class="process-description" data-i18n="process.description">
                        Pengembangan Eichhornia Eco Briquette melalui serangkaian
                        tahapan pengolahan, mulai dari persiapan dan karbonisasi
                        bahan biomassa, formulasi campuran, pencetakan, hingga
                        pengeringan akhir untuk menghasilkan briket dalam tiga
                        variasi bentuk.
                    </p>
                </div>

                {{-- Process Steps --}}
                <div class="process-steps">

                    {{-- Step 1: Raw Material Preparation --}}
                    <article class="process-step scroll-reveal">
                        <div class="process-step-visual">
                            <span class="process-step-icon" aria-hidden="true">
                                <i class="fa-solid fa-seedling"></i>
                            </span>

                            <span class="process-step-number">01</span>
                        </div>

                        <h3 data-i18n="process.step1.title">
                            Persiapan Bahan Baku
                        </h3>

                        <p data-i18n="process.step1.description">
                            Eceng gondok dari Rawa Pening dicuci dan dijemur
                            hingga kering. Sekam padi dan residu arang tempurung
                            disiapkan sebagai bahan formulasi.
                        </p>
                    </article>

                    <div class="process-arrow scroll-reveal" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                    {{-- Step 2: Carbonization and Refinement --}}
                    <article class="process-step scroll-reveal" data-delay="1">
                        <div class="process-step-visual">
                            <span class="process-step-icon" aria-hidden="true">
                                <i class="fa-solid fa-fire-flame-curved"></i>
                            </span>

                            <span class="process-step-number">02</span>
                        </div>

                        <h3 data-i18n="process.step2.title">
                            Karbonisasi & Penghalusan
                        </h3>

                        <p data-i18n="process.step2.description">
                            Eceng gondok dan sekam padi dikarbonisasi,
                            dihaluskan, lalu diayak. Residu arang tempurung
                            kelapa disaring sebelum dicampurkan.
                        </p>
                    </article>

                    <div class="process-arrow scroll-reveal" data-delay="1" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                    {{-- Step 3: Formulation and Molding --}}
                    <article class="process-step scroll-reveal" data-delay="2">
                        <div class="process-step-visual">
                            <span class="process-step-icon" aria-hidden="true">
                                <i class="fa-solid fa-cube"></i>
                            </span>

                            <span class="process-step-number">03</span>
                        </div>

                        <h3 data-i18n="process.step3.title">
                            Formulasi & Pencetakan
                        </h3>

                        <p data-i18n="process.step3.description">
                            Serbuk biomassa dicampur dengan air dan tepung
                            tapioka sebagai perekat, lalu diolah dan dicetak
                            menjadi bentuk kubus, heksagonal, dan oktagonal.
                        </p>
                    </article>

                    <div class="process-arrow scroll-reveal" data-delay="2" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                    {{-- Step 4: Final Drying --}}
                    <article class="process-step scroll-reveal" data-delay="3">
                        <div class="process-step-visual">
                            <span class="process-step-icon" aria-hidden="true">
                                <i class="fa-solid fa-sun"></i>
                            </span>

                            <span class="process-step-number">04</span>
                        </div>

                        <h3 data-i18n="process.step4.title">
                            Pengeringan Akhir
                        </h3>

                        <p data-i18n="process.step4.description">
                            Briket hasil cetakan dijemur kembali untuk
                            mengurangi kadar air hingga siap memasuki tahap
                            akhir pengembangan dan persiapan pemasaran.
                        </p>
                    </article>

                </div>
            </div>
        </section>
        {{-- Akhir Proses Pengembangan --}}

        {{-- Pertanyaan Umum --}}
        <section class="faq-section" id="pertanyaan-umum">
            <div class="faq-container">

                {{-- FAQ Introduction --}}
                <div class="faq-intro scroll-reveal">

                    <div class="faq-eyebrow">
                        <span class="faq-eyebrow-line" aria-hidden="true"></span>
                        <span data-i18n="faq.eyebrow">PERTANYAAN UMUM</span>
                    </div>

                    <h2 class="faq-title">
                        <span data-i18n="faq.title">Mengenal lebih dekat</span>
                        <span data-i18n="faq.titleHighlight">Eichhornia Eco Briquette.</span>
                    </h2>

                    <p class="faq-description" data-i18n="faq.description">
                        Kenali latar belakang proyek, formulasi material,
                        karakteristik produk, tahapan pembuatan, serta
                        pengalaman pemasaran Eichhornia Eco Briquette
                        dalam program kewirausahaan tahun 2025.
                    </p>

                    <a href="#proses-pengembangan" class="faq-contact-link">
                        <span data-i18n="faq.processLink">Lihat Proses Pengembangan</span>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                {{-- FAQ Accordion --}}
                <div class="faq-list scroll-reveal" data-delay="1">

                    {{-- FAQ 1 --}}
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span data-i18n="faq.q1">Apa itu Eichhornia Eco Briquette?</span>
                            <span class="faq-toggle" aria-hidden="true">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </summary>

                        <div class="faq-answer">
                            <p data-i18n="faq.a1">
                                Eichhornia Eco Briquette adalah produk briket
                                berbasis biomassa yang dikembangkan pada tahun
                                2025 melalui Program Kreativitas Mahasiswa bidang
                                Kewirausahaan (PKM-K). Proyek ini menggabungkan
                                eceng gondok, sekam padi, dan residu arang
                                tempurung kelapa dalam satu formulasi produk.
                            </p>
                        </div>
                    </details>

                    {{-- FAQ 2 --}}
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span data-i18n="faq.q2">Bagaimana komposisi material briket ini?</span>
                            <span class="faq-toggle" aria-hidden="true">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </summary>

                        <div class="faq-answer">
                            <p data-i18n="faq.a2">
                                Formulasi yang dikembangkan terdiri dari 80%
                                residu arang tempurung kelapa, 18,73% sekam padi,
                                dan 1,27% eceng gondok. Campuran ditambahkan air
                                dan tepung tapioka sebagai perekat sebelum
                                memasuki proses pencetakan.
                            </p>
                        </div>
                    </details>

                    {{-- FAQ 3 --}}
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span data-i18n="faq.q3">Apa karakteristik dan variasi produknya?</span>
                            <span class="faq-toggle" aria-hidden="true">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </summary>

                        <div class="faq-answer">
                            <p data-i18n="faq.a3">
                                Produk memiliki warna hitam pekat dengan tekstur
                                padat dan halus, serta dikembangkan dalam tiga
                                bentuk: kubus, heksagonal, dan oktagonal.
                                Berdasarkan dokumentasi proyek, briket dilaporkan
                                menghasilkan panas stabil selama 2–3 jam tanpa
                                percikan api atau asap berlebih.
                            </p>
                        </div>
                    </details>

                    {{-- FAQ 4 --}}
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span data-i18n="faq.q4">Bagaimana proses pembuatan briketnya?</span>
                            <span class="faq-toggle" aria-hidden="true">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </summary>

                        <div class="faq-answer">
                            <p data-i18n="faq.a4">
                                Proses pembuatan meliputi pengeringan eceng gondok,
                                karbonisasi eceng gondok dan sekam padi,
                                penghalusan serta pengayakan bahan, pencampuran
                                formulasi dengan perekat, pencetakan, dan
                                pengeringan akhir.
                            </p>
                        </div>
                    </details>

                    {{-- FAQ 5 --}}
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span data-i18n="faq.q5">Di mana produk ini pernah dipasarkan?</span>
                            <span class="faq-toggle" aria-hidden="true">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </summary>

                        <div class="faq-answer">
                            <p data-i18n="faq.a5">
                                Selama pelaksanaan PKM-K tahun 2025, Eichhornia Eco
                                Briquette dipasarkan melalui penjualan langsung dan
                                platform e-commerce, termasuk Tokopedia. Tautan
                                berikut merupakan dokumentasi toko yang pernah
                                digunakan selama kegiatan proyek berlangsung.
                            </p>

                            {{-- Project Status Notice --}}
                            <div class="faq-project-notice" role="note">
                                <div class="faq-project-notice-icon" aria-hidden="true">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>

                                <div class="faq-project-notice-content">
                                    <strong data-i18n="faq.noticeTitle">
                                        Informasi Riwayat Proyek
                                    </strong>

                                    <p data-i18n="faq.noticeDescription">
                                        Program kewirausahaan ini telah berakhir dan
                                        kegiatan operasional tidak lagi dilanjutkan.
                                        Tautan Tokopedia tersedia sebagai dokumentasi
                                        riwayat pemasaran, bukan sebagai informasi
                                        ketersediaan produk saat ini.
                                    </p>
                                </div>
                            </div>

                            {{-- Historical Marketplace Link --}}
                            <a href="https://tk.tokopedia.com/ZSgbJYhyb/" class="faq-marketplace-link"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fa-solid fa-store" aria-hidden="true"></i>
                                <span data-i18n="faq.marketplaceLink">
                                    Lihat Arsip Toko Tokopedia
                                </span>
                            </a>
                        </div>
                    </details>

                </div>
            </div>
        </section>
        {{-- Akhir Pertanyaan Umum --}}

        {{-- Informasi Proyek --}}
        <section class="contact-section" id="informasi-proyek">
            <div class="contact-container">

                {{-- Kolom Kiri: Konteks dan Pengalaman Proyek --}}
                <div class="contact-intro scroll-reveal">

                    <div class="contact-eyebrow">
                        <span class="contact-eyebrow-line" aria-hidden="true"></span>
                        <span data-i18n="contact.eyebrow">INFORMASI PROYEK</span>
                    </div>

                    <h2 class="contact-title">
                        <span data-i18n="contact.title">
                            Sebuah ide, proses, dan pengalaman
                        </span>
                        <span data-i18n="contact.titleHighlight">
                            kewirausahaan.
                        </span>
                    </h2>

                    <p class="contact-description" data-i18n="contact.description">
                        Eichhornia Eco Briquette menjadi bagian dari pengalaman
                        menerjemahkan gagasan menjadi produk nyata. Melalui proyek
                        ini, kami mengeksplorasi pengembangan produk, pengelolaan
                        kegiatan usaha, dan pemasaran dalam Program Kreativitas
                        Mahasiswa bidang Kewirausahaan (PKM-K) tahun 2025.
                    </p>

                    <div class="contact-info-grid">

                        {{-- Informasi Program --}}
                        <article class="contact-info-card">
                            <span class="contact-info-icon" aria-hidden="true">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>

                            <div>
                                <h3 data-i18n="contact.programTitle">
                                    Program Pengembangan
                                </h3>
                                <p data-i18n="contact.programName">
                                    Program Kreativitas Mahasiswa
                                </p>
                                <small data-i18n="contact.programDetail">
                                    Bidang Kewirausahaan · 2025
                                </small>
                            </div>
                        </article>

                        {{-- Fokus Proyek --}}
                        <article class="contact-info-card">
                            <span class="contact-info-icon" aria-hidden="true">
                                <i class="fa-solid fa-bullseye"></i>
                            </span>

                            <div>
                                <h3 data-i18n="contact.focusTitle">
                                    Fokus Proyek
                                </h3>
                                <p data-i18n="contact.focusName">
                                    Pengembangan produk biomassa
                                </p>
                                <small data-i18n="contact.focusDetail">
                                    Dari konsep hingga pemasaran
                                </small>
                            </div>
                        </article>

                    </div>
                </div>

                {{-- Kolom Kanan: Navigasi Dokumentasi --}}
                <aside class="contact-form-card scroll-reveal" data-delay="1"
                    aria-label="Jelajahi dokumentasi proyek" data-i18n-aria-label="contact.exploreAriaLabel">
                    <div class="contact-form-heading">

                        <span class="contact-info-icon contact-heading-icon" aria-hidden="true">
                            <i class="fa-solid fa-compass"></i>
                        </span>

                        <h3 data-i18n="contact.exploreTitle">
                            Jelajahi perjalanan proyek.
                        </h3>

                        <p data-i18n="contact.exploreDescription">
                            Telusuri tahapan yang menghubungkan gagasan,
                            pengolahan material, dan pembentukan produk
                            Eichhornia Eco Briquette.
                        </p>
                    </div>

                    <div class="contact-form-actions">
                        <a href="#proses-pengembangan" class="contact-submit">
                            <span data-i18n="contact.processLink">
                                Lihat Proses Pengembangan
                            </span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </aside>

                {{-- Metadata Dokumentasi --}}
                <div class="contact-project-note">
                    <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                    <span data-i18n="contact.archiveNote">
                        Arsip Proyek PKM-K · 2025
                    </span>
                </div>

            </div>
        </section>
        {{-- Akhir Informasi Proyek --}}

        {{-- Footer --}}
        <footer class="site-footer">
            <div class="footer-container">

                {{-- Kolom 1: Identitas Proyek --}}
                <div class="footer-brand scroll-reveal">

                    <a href="#beranda" class="footer-brand-link" data-i18n-aria-label="footer.brandAriaLabel">

                        <img src="{{ asset('images/eichhornia-logo.png') }}" alt="" class="footer-logo-image"
                            width="42" height="42" loading="lazy">

                        <span class="footer-brand-name">
                            EICHHORNIA
                            <strong>ECO BRIQUETTE</strong>
                        </span>
                    </a>

                    <p class="footer-brand-description" data-i18n="footer.description">
                        Dokumentasi proyek pengembangan briket biomassa yang
                        menggabungkan potensi eceng gondok, sekam padi, dan
                        tempurung kelapa melalui pengalaman inovasi produk
                        dan kewirausahaan mahasiswa.
                    </p>

                    <div class="footer-brand-tagline">
                        <span data-i18n="footer.taglineInnovation">INOVASI PRODUK</span>
                        <span aria-hidden="true">·</span>
                        <span data-i18n="footer.taglineBiomass">BIOMASSA</span>
                        <span aria-hidden="true">·</span>
                        <span data-i18n="footer.taglineEntrepreneurship">KEWIRAUSAHAAN</span>
                    </div>

                </div>

                {{-- Kolom 2: Navigasi Website --}}
                <nav class="footer-navigation" aria-label="Navigasi footer"
                    data-i18n-aria-label="footer.navigationAriaLabel">

                    <h3 data-i18n="footer.explore">Jelajahi Website</h3>

                    <ul>
                        <li>
                            <a href="#beranda" data-i18n="footer.home">Beranda</a>
                        </li>
                        <li>
                            <a href="#tentang-proyek" data-i18n="footer.about">Tentang Proyek</a>
                        </li>
                        <li>
                            <a href="#potensi-proyek" data-i18n="footer.potential">Potensi Proyek</a>
                        </li>
                        <li>
                            <a href="#eksplorasi-produk" data-i18n="footer.products">Eksplorasi Produk</a>
                        </li>
                        <li>
                            <a href="#proses-pengembangan" data-i18n="footer.process">Proses Pengembangan</a>
                        </li>
                        <li>
                            <a href="#pertanyaan-umum" data-i18n="footer.faq">Pertanyaan Umum</a>
                        </li>
                        <li>
                            <a href="#informasi-proyek" data-i18n="footer.information">Informasi Proyek</a>
                        </li>
                    </ul>
                </nav>

                {{-- Kolom 3: Media Sosial dan Konteks Proyek --}}
                <div class="footer-social scroll-reveal" data-delay="1">

                    <h3 data-i18n="footer.follow">Ikuti Dokumentasi Kami</h3>

                    <p class="footer-social-description" data-i18n="footer.socialDescription">
                        Kunjungi kanal media sosial proyek untuk melihat
                        dokumentasi aktivitas, publikasi, dan perjalanan
                        Eichhornia Eco Briquette selama program berlangsung.
                    </p>

                    <div class="footer-social-links">

                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/pkmk.eichhornia.ecobriquette/" class="footer-social-link"
                            target="_blank" rel="noopener noreferrer"
                            data-i18n-aria-label="footer.instagramAriaLabel">

                            <span class="footer-social-icon" aria-hidden="true">
                                <i class="fa-brands fa-instagram"></i>
                            </span>

                            <span class="footer-social-text">
                                <strong>Instagram</strong>
                                <small>@pkmk.eichhornia.ecobriquette</small>
                            </span>

                            <i class="fa-solid fa-arrow-up-right-from-square footer-social-arrow"
                                aria-hidden="true"></i>
                        </a>

                        {{-- TikTok --}}
                        <a href="https://www.tiktok.com/@eichhornia.ecobriquette" class="footer-social-link"
                            target="_blank" rel="noopener noreferrer" data-i18n-aria-label="footer.tiktokAriaLabel">

                            <span class="footer-social-icon" aria-hidden="true">
                                <i class="fa-brands fa-tiktok"></i>
                            </span>

                            <span class="footer-social-text">
                                <strong>TikTok</strong>
                                <small>@eichhornia.eco.briquette</small>
                            </span>

                            <i class="fa-solid fa-arrow-up-right-from-square footer-social-arrow"
                                aria-hidden="true"></i>
                        </a>

                    </div>

                    {{-- Status Arsip Proyek --}}
                    <div class="footer-project-status">
                        <i class="fa-solid fa-circle-info" aria-hidden="true"></i>

                        <p>
                            <strong data-i18n="footer.archiveTitle">
                                Arsip Proyek PKM-K · 2025
                            </strong>
                            <span data-i18n="footer.archiveDescription">
                                Program telah berakhir. Media sosial dicantumkan
                                sebagai dokumentasi historis proyek.
                            </span>
                        </p>
                    </div>

                </div>
            </div>

            {{-- Footer Bottom --}}
            <div class="footer-bottom">
                <div class="footer-bottom-container">

                    <p class="footer-copyright">
                        <i class="fa-regular fa-copyright" aria-hidden="true"></i>

                        <span id="footer-year"></span>

                        Eichhornia Eco Briquette.

                        <span class="footer-copyright-note" data-i18n="footer.copyrightNote">
                            Dokumentasi proyek PKM-K 2025.
                        </span>
                    </p>

                    <a href="#beranda" class="footer-back-top">
                        <span data-i18n="footer.backToTop">Kembali ke atas</span>
                        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
        </footer>
        {{-- Akhir Footer --}}

    </main>
</body>

</html>
