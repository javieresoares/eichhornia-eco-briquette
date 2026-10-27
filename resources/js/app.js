
import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    /* ========================================
       DOM ELEMENTS
    ======================================== */

    const header = document.getElementById("site-header");
    const menuButton = document.getElementById("mobile-menu-button");
    const navigation = document.getElementById("main-navigation");

    const navLinks = document.querySelectorAll(".nav-link");
    const languageButtons = document.querySelectorAll(".language-button");
    const revealElements = document.querySelectorAll(".scroll-reveal");

    /* ========================================
       TRANSLATIONS
    ======================================== */

    const translations = {
        id: {
            // Navbar
            "nav.home": "Beranda",
            "nav.about": "Tentang",
            "nav.potential": "Potensi",
            "nav.products": "Produk",
            "nav.process": "Proses",
            "nav.faq": "Pertanyaan",
            "nav.information": "Informasi",
            "nav.language": "Pilihan bahasa",
            "nav.openMenu": "Buka menu navigasi",
            "nav.closeMenu": "Tutup menu navigasi",

            // Hero
            "hero.eyebrow": "INOVASI BRIKET BERBASIS BIOMASSA",
            "hero.title": "Biomassa Menjadi",
            "hero.titleHighlight": "Inovasi Briket.",
            "hero.description":
                "Eichhornia Eco Briquette adalah inovasi briket biomassa dari eceng gondok, sekam padi, dan residu arang tempurung kelapa yang dikembangkan melalui proyek kewirausahaan mahasiswa.",
            "hero.buttonAbout": "Kenali Proyek",
            "hero.buttonProducts": "Jelajahi Produk",
            "hero.note":
                "Proyek Program Kreativitas Mahasiswa — Bidang Kewirausahaan, 2025.",


            // Project Highlights
            "highlights.ariaLabel":
                "Sorotan Eichhornia Eco Briquette",

            "highlights.composition.title":
                "Komposisi Biomassa",
            "highlights.composition.description":
                "Mengombinasikan eceng gondok, sekam padi, dan tempurung kelapa dalam satu formulasi produk briket.",

            "highlights.forms.title":
                "Tiga Variasi Bentuk",
            "highlights.forms.description":
                "Mengeksplorasi bentuk kubus, heksagonal, dan oktagonal sebagai variasi desain produk.",

            "highlights.development.title":
                "Pengembangan Produk",
            "highlights.development.description":
                "Mendokumentasikan proses perancangan dan pembuatan briket berbasis kombinasi biomassa.",


            // About Project
            "about.imageAlt":
                "Ilustrasi konseptual briket biomassa dari sekam padi dan tempurung kelapa",

            "about.eyebrow": "TENTANG PROYEK",
            "about.title":
                "Mengoptimalkan potensi biomassa untuk",
            "about.titleHighlight":
                "nilai yang lebih bermakna.",

            "about.description1":
                "Dikembangkan pada 2025 melalui Program Kreativitas Mahasiswa bidang Kewirausahaan (PKM-K), Eichhornia Eco Briquette mengeksplorasi pemanfaatan eceng gondok, sekam padi, dan residu arang tempurung kelapa dalam satu formulasi briket.",

            "about.description2":
                "Proyek ini mencakup pengembangan produk hingga pemasaran, menjadi pengalaman dalam mengolah potensi material lokal menjadi produk yang memiliki nilai guna.",

            "about.value1.title": "Potensi Biomassa",
            "about.value1.description":
                "Eksplorasi material lokal sebagai bahan briket.",

            "about.value2.title": "3 Material",
            "about.value2.description":
                "Satu formulasi dalam pengembangan produk.",

            "about.value3.title": "Pengalaman PKM-K",
            "about.value3.description":
                "Pengembangan produk dan pengalaman pemasaran.",

            "about.button": "Jelajahi Potensi Proyek",


            // Project Advantages & Potential
            "advantages.ariaLabel":
                "Karakteristik dan potensi proyek",

            "advantages.eyebrow": "POTENSI PROYEK",
            "advantages.title":
                "Dari tantangan lingkungan menuju",
            "advantages.titleHighlight":
                "peluang penciptaan nilai.",

            "advantages.intro":
                "Berangkat dari persoalan eceng gondok di Danau Rawa Pening, Eichhornia Eco Briquette mengeksplorasi potensi biomassa sebagai bahan baku produk, sumber energi alternatif, dan peluang pengembangan nilai ekonomi berbasis sumber daya lokal.",

            // Card 1
            "advantages.card1.title":
                "Tantangan Ekosistem Perairan",
            "advantages.card1.description":
                "Pertumbuhan eceng gondok yang tidak terkendali menjadi salah satu tantangan pengelolaan Danau Rawa Pening. Kondisi ini mendorong eksplorasi pemanfaatan tanaman air tersebut sebagai bahan baku produk alternatif.",

            // Card 2
            "advantages.card2.title":
                "Optimalisasi Biomassa",
            "advantages.card2.description":
                "Eceng gondok, sekam padi, dan residu arang tempurung kelapa dipadukan dalam satu formulasi untuk mengeksplorasi pemanfaatan biomassa dan peningkatan nilai guna material.",

            // Card 3
            "advantages.card3.title":
                "Potensi Energi Alternatif",
            "advantages.card3.description":
                "Pengembangan briket biomassa mengeksplorasi pemanfaatan bahan baku terbarukan sebagai alternatif bahan bakar, khususnya untuk kebutuhan pembakaran pada sektor rumah tangga dan usaha kuliner.",

            // Card 4
            "advantages.card4.title":
                "Potensi Nilai Ekonomi Lokal",
            "advantages.card4.description":
                "Pengembangan produk, pengemasan, dan pemasaran membuka ruang untuk mengeksplorasi nilai ekonomi biomassa serta peluang keterlibatan masyarakat dan pelaku UMKM dalam rantai pemanfaatannya.",


            // Product Exploration
            "products.eyebrow": "EKSPLORASI PRODUK",
            "products.title": "Satu formulasi biomassa,",
            "products.titleHighlight": "tiga variasi bentuk.",

            "products.description":
                "Eichhornia Eco Briquette dikembangkan melalui satu formulasi biomassa yang memadukan residu arang tempurung kelapa, sekam padi, dan eceng gondok. Formulasi tersebut dieksplorasi dalam tiga rancangan bentuk: kubus, heksagonal, dan oktagonal.",

            "products.button": "Kenali Latar Belakang Proyek",

            // Cube Briquette
            "products.cube.imageAlt":
                "Visual konseptual Eichhornia Eco Briquette berbentuk kubus",
            "products.cube.category": "VARIASI BENTUK 01",
            "products.cube.title": "Briket Kubus",
            "products.cube.description":
                "Bentuk kubus dengan bidang sisi tegas sebagai salah satu eksplorasi desain briket.",
            "products.cube.tag1": "Bentuk Kubus",
            "products.cube.tag2": "Empat Sisi Tampak",

            // Hexagonal Briquette
            "products.hexagonal.imageAlt":
                "Visual konseptual Eichhornia Eco Briquette berbentuk heksagonal",
            "products.hexagonal.category": "VARIASI BENTUK 02",
            "products.hexagonal.title": "Briket Heksagonal",
            "products.hexagonal.description":
                "Bentuk bersisi enam yang memperlihatkan variasi geometri dalam rancangan produk.",
            "products.hexagonal.tag1": "Enam Sisi",
            "products.hexagonal.tag2": "Desain Geometris",

            // Octagonal Briquette
            "products.octagonal.imageAlt":
                "Visual konseptual Eichhornia Eco Briquette berbentuk oktagonal",
            "products.octagonal.category": "VARIASI BENTUK 03",
            "products.octagonal.title": "Briket Oktagonal",
            "products.octagonal.description":
                "Bentuk bersisi delapan yang melengkapi eksplorasi variasi desain briket.",
            "products.octagonal.tag1": "Delapan Sisi",
            "products.octagonal.tag2": "Variasi Bentuk",


            // Development Process
            "process.eyebrow": "PROSES PENGEMBANGAN",
            "process.title": "Dari bahan baku menuju",
            "process.titleHighlight": "briket siap digunakan.",

            "process.description":
                "Pengembangan Eichhornia Eco Briquette melalui serangkaian tahapan pengolahan, mulai dari persiapan dan karbonisasi bahan biomassa, formulasi campuran, pencetakan, hingga pengeringan akhir untuk menghasilkan briket dalam tiga variasi bentuk.",

            // Step 1
            "process.step1.title": "Persiapan Bahan Baku",
            "process.step1.description":
                "Eceng gondok dari Rawa Pening dicuci dan dijemur hingga kering. Sekam padi dan residu arang tempurung disiapkan sebagai bahan formulasi.",

            // Step 2
            "process.step2.title": "Karbonisasi & Penghalusan",
            "process.step2.description":
                "Eceng gondok dan sekam padi dikarbonisasi, dihaluskan, lalu diayak. Residu arang tempurung kelapa disaring sebelum dicampurkan.",

            // Step 3
            "process.step3.title": "Formulasi & Pencetakan",
            "process.step3.description":
                "Serbuk biomassa dicampur dengan air dan tepung tapioka sebagai perekat, lalu diolah dan dicetak menjadi bentuk kubus, heksagonal, dan oktagonal.",

            // Step 4
            "process.step4.title": "Pengeringan Akhir",
            "process.step4.description":
                "Briket hasil cetakan dijemur kembali untuk mengurangi kadar air hingga siap memasuki tahap akhir pengembangan dan persiapan pemasaran.",


            // FAQ Section
            "faq.eyebrow": "PERTANYAAN UMUM",
            "faq.title": "Mengenal lebih dekat",
            "faq.titleHighlight": "Eichhornia Eco Briquette.",
            "faq.description":
                "Kenali latar belakang proyek, formulasi material, karakteristik produk, tahapan pembuatan, serta pengalaman pemasaran Eichhornia Eco Briquette dalam program kewirausahaan tahun 2025.",
            "faq.processLink": "Lihat Proses Pengembangan",

            // FAQ 1
            "faq.q1": "Apa itu Eichhornia Eco Briquette?",
            "faq.a1":
                "Eichhornia Eco Briquette adalah produk briket berbasis biomassa yang dikembangkan pada tahun 2025 melalui Program Kreativitas Mahasiswa bidang Kewirausahaan (PKM-K). Proyek ini menggabungkan eceng gondok, sekam padi, dan residu arang tempurung kelapa dalam satu formulasi produk.",

            // FAQ 2
            "faq.q2": "Bagaimana komposisi material briket ini?",
            "faq.a2":
                "Formulasi yang dikembangkan terdiri dari 80% residu arang tempurung kelapa, 18,73% sekam padi, dan 1,27% eceng gondok. Campuran ditambahkan air dan tepung tapioka sebagai perekat sebelum memasuki proses pencetakan.",

            // FAQ 3
            "faq.q3": "Apa karakteristik dan variasi produknya?",
            "faq.a3":
                "Produk memiliki warna hitam pekat dengan tekstur padat dan halus, serta dikembangkan dalam tiga bentuk: kubus, heksagonal, dan oktagonal. Berdasarkan dokumentasi proyek, briket dilaporkan menghasilkan panas stabil selama 2–3 jam tanpa percikan api atau asap berlebih.",

            // FAQ 4
            "faq.q4": "Bagaimana proses pembuatan briketnya?",
            "faq.a4":
                "Proses pembuatan meliputi pengeringan eceng gondok, karbonisasi eceng gondok dan sekam padi, penghalusan serta pengayakan bahan, pencampuran formulasi dengan perekat, pencetakan, dan pengeringan akhir.",

            // FAQ 5
            "faq.q5": "Di mana produk ini pernah dipasarkan?",
            "faq.a5":
                "Selama pelaksanaan PKM-K tahun 2025, Eichhornia Eco Briquette dipasarkan melalui penjualan langsung dan platform e-commerce, termasuk Tokopedia. Tautan berikut merupakan dokumentasi toko yang pernah digunakan selama kegiatan proyek berlangsung.",

            // Project Status Notice
            "faq.noticeTitle": "Informasi Riwayat Proyek",
            "faq.noticeDescription":
                "Program kewirausahaan ini telah berakhir dan kegiatan operasional tidak lagi dilanjutkan. Tautan Tokopedia tersedia sebagai dokumentasi riwayat pemasaran, bukan sebagai informasi ketersediaan produk saat ini.",

            "faq.marketplaceLink": "Lihat Arsip Toko Tokopedia",


            // Project Information
            "contact.eyebrow": "INFORMASI PROYEK",
            "contact.title": "Sebuah ide, proses, dan pengalaman",
            "contact.titleHighlight": "kewirausahaan.",

            "contact.description":
                "Eichhornia Eco Briquette menjadi bagian dari pengalaman menerjemahkan gagasan menjadi produk nyata. Melalui proyek ini, kami mengeksplorasi pengembangan produk, pengelolaan kegiatan usaha, dan pemasaran dalam Program Kreativitas Mahasiswa bidang Kewirausahaan (PKM-K) tahun 2025.",

            // Program Information
            "contact.programTitle": "Program Pengembangan",
            "contact.programName": "Program Kreativitas Mahasiswa",
            "contact.programDetail": "Bidang Kewirausahaan · 2025",

            // Project Focus
            "contact.focusTitle": "Fokus Proyek",
            "contact.focusName": "Pengembangan produk biomassa",
            "contact.focusDetail": "Dari konsep hingga pemasaran",

            // Project Documentation Navigation
            "contact.exploreAriaLabel": "Jelajahi dokumentasi proyek",
            "contact.exploreTitle": "Jelajahi perjalanan proyek.",
            "contact.exploreDescription":
                "Telusuri tahapan yang menghubungkan gagasan, pengolahan material, dan pembentukan produk Eichhornia Eco Briquette.",
            "contact.processLink": "Lihat Proses Pengembangan",

            // Project Archive
            "contact.archiveNote": "Arsip Proyek PKM-K · 2025",


            "footer.brandAriaLabel": "Kembali ke beranda Eichhornia Eco Briquette",
            "footer.description": "Dokumentasi proyek pengembangan briket biomassa yang menggabungkan potensi eceng gondok, sekam padi, dan tempurung kelapa melalui pengalaman inovasi produk dan kewirausahaan mahasiswa.",
            "footer.taglineInnovation": "INOVASI PRODUK",
            "footer.taglineBiomass": "BIOMASSA",
            "footer.taglineEntrepreneurship": "KEWIRAUSAHAAN",

            "footer.navigationAriaLabel": "Navigasi footer",
            "footer.explore": "Jelajahi Website",
            "footer.home": "Beranda",
            "footer.about": "Tentang Proyek",
            "footer.potential": "Potensi Proyek",
            "footer.products": "Eksplorasi Produk",
            "footer.process": "Proses Pengembangan",
            "footer.faq": "Pertanyaan Umum",
            "footer.information": "Informasi Proyek",

            "footer.follow": "Ikuti Dokumentasi Kami",
            "footer.socialDescription": "Kunjungi kanal media sosial proyek untuk melihat dokumentasi aktivitas, publikasi, dan perjalanan Eichhornia Eco Briquette selama program berlangsung.",
            "footer.instagramAriaLabel": "Kunjungi Instagram Eichhornia Eco Briquette",
            "footer.tiktokAriaLabel": "Kunjungi TikTok Eichhornia Eco Briquette",

            "footer.archiveTitle": "Arsip Proyek PKM-K · 2025",
            "footer.archiveDescription": "Program telah berakhir. Media sosial dicantumkan sebagai dokumentasi historis proyek.",
            "footer.copyrightNote": "Dokumentasi proyek PKM-K 2025.",
            "footer.backToTop": "Kembali ke atas",

            // Contact form preview
            "form.previewMessage":
                "Formulir ini masih dalam tahap pengembangan. Pesan Anda belum dikirim."
        },

        en: {
            // Navbar
            "nav.home": "Home",
            "nav.about": "About",
            "nav.potential": "Potential",
            "nav.products": "Products",
            "nav.process": "Process",
            "nav.faq": "FAQ",
            "nav.information": "Project Info",
            "nav.language": "Language selection",
            "nav.openMenu": "Open navigation menu",
            "nav.closeMenu": "Close navigation menu",

            // Hero
            "hero.eyebrow": "BIOMASS-BASED BRIQUETTE INNOVATION",
            "hero.title": "Turning Biomass Into",
            "hero.titleHighlight": "Briquette Innovation.",
            "hero.description":
                "Eichhornia Eco Briquette is a biomass briquette innovation made from water hyacinth, rice husks, and coconut shell charcoal residue, developed as part of a student entrepreneurship project.",
            "hero.buttonAbout": "Explore the Project",
            "hero.buttonProducts": "Explore Products",
            "hero.note":
                "Student Creativity Program — Entrepreneurship Track, 2025.",


            // Project Highlights
            "highlights.ariaLabel":
                "Eichhornia Eco Briquette Highlights",

            "highlights.composition.title":
                "Biomass Composition",
            "highlights.composition.description":
                "Combining water hyacinth, rice husks, and coconut shells in a single briquette product formulation.",

            "highlights.forms.title":
                "Three Shape Variations",
            "highlights.forms.description":
                "Exploring cube, hexagonal, and octagonal shapes as variations in product design.",

            "highlights.development.title":
                "Product Development",
            "highlights.development.description":
                "Documenting the design and production process of briquettes made from a combination of biomass materials.",


            // About Project
            "about.imageAlt":
                "Conceptual illustration of biomass briquettes made from rice husks and coconut shells",

            "about.eyebrow": "ABOUT THE PROJECT",
            "about.title":
                "Unlocking the potential of biomass for",
            "about.titleHighlight":
                "more meaningful value.",

            "about.description1":
                "Developed in 2025 through the Student Creativity Program for Entrepreneurship (PKM-K), Eichhornia Eco Briquette explored the use of water hyacinth, rice husks, and coconut shell charcoal residue in a single briquette formulation.",

            "about.description2":
                "The project covered product development and marketing, providing experience in transforming the potential of local materials into a useful product.",

            "about.value1.title": "Biomass Potential",
            "about.value1.description":
                "Exploring local materials as ingredients for briquettes.",

            "about.value2.title": "3 Materials",
            "about.value2.description":
                "One formulation developed for the product.",

            "about.value3.title": "PKM-K Experience",
            "about.value3.description":
                "Experience in product development and marketing.",

            "about.button": "Explore Project Potential",


            // Project Advantages & Potential
            "advantages.ariaLabel":
                "Project characteristics and potential",

            "advantages.eyebrow": "PROJECT POTENTIAL",
            "advantages.title":
                "From environmental challenges to",
            "advantages.titleHighlight":
                "opportunities for value creation.",

            "advantages.intro":
                "Inspired by water hyacinth challenges in Lake Rawa Pening, Eichhornia Eco Briquette explores biomass potential as a product material, an alternative energy source, and an opportunity to create economic value from local resources.",

            // Card 1
            "advantages.card1.title":
                "Aquatic Ecosystem Challenges",
            "advantages.card1.description":
                "Uncontrolled water hyacinth growth is one of the challenges facing the management of Lake Rawa Pening. This situation encourages exploration of the plant's potential use as a raw material for alternative products.",

            // Card 2
            "advantages.card2.title":
                "Biomass Utilization",
            "advantages.card2.description":
                "Water hyacinth, rice husks, and coconut shell charcoal residue are combined in a single formulation to explore biomass utilization and ways to increase material value.",

            // Card 3
            "advantages.card3.title":
                "Alternative Energy Potential",
            "advantages.card3.description":
                "The briquette development project explores renewable raw materials as an alternative fuel, particularly for combustion applications in households and food businesses.",

            // Card 4
            "advantages.card4.title":
                "Local Economic Potential",
            "advantages.card4.description":
                "Product development, packaging, and marketing create opportunities to explore the economic value of biomass and potential community and SME involvement in its utilization value chain.",


            // Product Exploration
            "products.eyebrow": "PRODUCT EXPLORATION",
            "products.title": "One biomass formulation,",
            "products.titleHighlight": "three shape variations.",

            "products.description":
                "Eichhornia Eco Briquette was developed using a single biomass formulation combining coconut shell charcoal residue, rice husks, and water hyacinth. The formulation was explored in three product shapes: cube, hexagonal, and octagonal.",

            "products.button": "Explore the Project Background",

            // Cube Briquette
            "products.cube.imageAlt":
                "Conceptual visual of a cube-shaped Eichhornia Eco Briquette",
            "products.cube.category": "SHAPE VARIATION 01",
            "products.cube.title": "Cube Briquette",
            "products.cube.description":
                "A cube shape with defined faces, explored as one of the briquette design variations.",
            "products.cube.tag1": "Cube Shape",
            "products.cube.tag2": "Four Visible Faces",

            // Hexagonal Briquette
            "products.hexagonal.imageAlt":
                "Conceptual visual of a hexagonal Eichhornia Eco Briquette",
            "products.hexagonal.category": "SHAPE VARIATION 02",
            "products.hexagonal.title": "Hexagonal Briquette",
            "products.hexagonal.description":
                "A six-sided shape that demonstrates geometric variation in the product design.",
            "products.hexagonal.tag1": "Six Sides",
            "products.hexagonal.tag2": "Geometric Design",

            // Octagonal Briquette
            "products.octagonal.imageAlt":
                "Conceptual visual of an octagonal Eichhornia Eco Briquette",
            "products.octagonal.category": "SHAPE VARIATION 03",
            "products.octagonal.title": "Octagonal Briquette",
            "products.octagonal.description":
                "An eight-sided shape that completes the exploration of briquette design variations.",
            "products.octagonal.tag1": "Eight Sides",
            "products.octagonal.tag2": "Shape Variation",


            // Development Process
            "process.eyebrow": "DEVELOPMENT PROCESS",
            "process.title": "From raw materials to",
            "process.titleHighlight": "ready-to-use briquettes.",

            "process.description":
                "Eichhornia Eco Briquette was developed through several processing stages, including biomass preparation and carbonization, material formulation, molding, and final drying to produce briquettes in three different shapes.",

            // Step 1
            "process.step1.title": "Raw Material Preparation",
            "process.step1.description":
                "Water hyacinth from Rawa Pening is washed and sun-dried. Rice husks and coconut shell charcoal residue are prepared for the formulation.",

            // Step 2
            "process.step2.title": "Carbonization & Refinement",
            "process.step2.description":
                "Water hyacinth and rice husks are carbonized, ground, and sieved. Coconut shell charcoal residue is filtered before mixing.",

            // Step 3
            "process.step3.title": "Formulation & Molding",
            "process.step3.description":
                "The biomass powders are mixed with water and tapioca starch as a binder, then processed and molded into cube, hexagonal, and octagonal shapes.",

            // Step 4
            "process.step4.title": "Final Drying",
            "process.step4.description":
                "The molded briquettes are sun-dried again to reduce moisture before the final development and marketing preparation stages.",


            // FAQ Section
            "faq.eyebrow": "FREQUENTLY ASKED QUESTIONS",
            "faq.title": "Get to know",
            "faq.titleHighlight": "Eichhornia Eco Briquette.",
            "faq.description":
                "Learn about the project's background, material formulation, product characteristics, production stages, and marketing experience during the 2025 student entrepreneurship program.",
            "faq.processLink": "View the Development Process",

            // FAQ 1
            "faq.q1": "What is Eichhornia Eco Briquette?",
            "faq.a1":
                "Eichhornia Eco Briquette is a biomass-based briquette product developed in 2025 through the Student Creativity Program in Entrepreneurship (PKM-K). The project combines water hyacinth, rice husks, and coconut shell charcoal residue in a single product formulation.",

            // FAQ 2
            "faq.q2": "What is the material composition of the briquette?",
            "faq.a2":
                "The developed formulation consists of 80% coconut shell charcoal residue, 18.73% rice husks, and 1.27% water hyacinth. Water and tapioca starch are added as a binder before the mixture is molded.",

            // FAQ 3
            "faq.q3": "What are the product's characteristics and variations?",
            "faq.a3":
                "The product has a deep black color and a dense, smooth texture, and was developed in three shapes: cube, hexagonal, and octagonal. According to project documentation, the briquettes were reported to produce steady heat for 2–3 hours without sparks or excessive smoke.",

            // FAQ 4
            "faq.q4": "How were the briquettes produced?",
            "faq.a4":
                "The production process included drying water hyacinth, carbonizing water hyacinth and rice husks, grinding and sieving the materials, mixing the formulation with a binder, molding, and final drying.",

            // FAQ 5
            "faq.q5": "Where was the product marketed?",
            "faq.a5":
                "During the 2025 PKM-K program, Eichhornia Eco Briquette was marketed through direct sales and e-commerce platforms, including Tokopedia. The link below documents the store used during the project.",

            // Project Status Notice
            "faq.noticeTitle": "Project History Notice",
            "faq.noticeDescription":
                "The entrepreneurship program has ended, and operations are no longer continuing. The Tokopedia link is provided as a record of past marketing activity, not as an indication that the product is currently available.",

            "faq.marketplaceLink": "View Tokopedia Store Archive",


            // Project Information
            "contact.eyebrow": "PROJECT INFORMATION",
            "contact.title": "An idea, a process, and an entrepreneurial",
            "contact.titleHighlight": "experience.",

            "contact.description":
                "Eichhornia Eco Briquette was part of an experience in turning an idea into a tangible product. Through this project, we explored product development, business operations, and marketing as part of the 2025 Student Creativity Program in Entrepreneurship (PKM-K).",

            // Program Information
            "contact.programTitle": "Development Program",
            "contact.programName": "Student Creativity Program",
            "contact.programDetail": "Entrepreneurship Track · 2025",

            // Project Focus
            "contact.focusTitle": "Project Focus",
            "contact.focusName": "Biomass product development",
            "contact.focusDetail": "From concept to marketing",

            // Project Documentation Navigation
            "contact.exploreAriaLabel": "Explore project documentation",
            "contact.exploreTitle": "Explore the project journey.",
            "contact.exploreDescription":
                "Explore the stages connecting the initial idea, material processing, and product development of Eichhornia Eco Briquette.",
            "contact.processLink": "View the Development Process",

            // Project Archive
            "contact.archiveNote": "PKM-K Project Archive · 2025",


            "footer.brandAriaLabel": "Return to the Eichhornia Eco Briquette homepage",
            "footer.description": "Documentation of a biomass briquette development project combining the potential of water hyacinth, rice husks, and coconut shells through student product innovation and entrepreneurship.",
            "footer.taglineInnovation": "PRODUCT INNOVATION",
            "footer.taglineBiomass": "BIOMASS",
            "footer.taglineEntrepreneurship": "ENTREPRENEURSHIP",

            "footer.navigationAriaLabel": "Footer navigation",
            "footer.explore": "Explore the Website",
            "footer.home": "Home",
            "footer.about": "About the Project",
            "footer.potential": "Project Potential",
            "footer.products": "Explore the Product",
            "footer.process": "Development Process",
            "footer.faq": "Frequently Asked Questions",
            "footer.information": "Project Information",

            "footer.follow": "Explore Our Documentation",
            "footer.socialDescription": "Visit the project's social media channels for activity records, publications, and a look back at the Eichhornia Eco Briquette project during its program period.",
            "footer.instagramAriaLabel": "Visit Eichhornia Eco Briquette on Instagram",
            "footer.tiktokAriaLabel": "Visit Eichhornia Eco Briquette on TikTok",

            "footer.archiveTitle": "PKM-K Project Archive · 2025",
            "footer.archiveDescription": "The program has ended. These social media accounts are provided as historical project documentation.",
            "footer.copyrightNote": "PKM-K project documentation, 2025.",
            "footer.backToTop": "Back to top",

            // Contact form preview
            "form.previewMessage":
                "This form is still under development. Your message has not been sent."
        }
    };

    /* ========================================
   LANGUAGE SWITCH
======================================== */

    let currentLanguage = "id";
    let languageSwitchTimer = null;

    const setLanguage = (language) => {
        const dictionary = translations[language];

        if (!dictionary || language === currentLanguage) {
            return;
        }

        // Hentikan transisi sebelumnya jika pengguna klik berulang kali.
        if (languageSwitchTimer !== null) {
            clearTimeout(languageSwitchTimer);
            languageSwitchTimer = null;
        }

        const applyLanguage = () => {
            // Update bahasa dokumen.
            document.documentElement.lang = language;

            // Ganti teks yang memiliki data-i18n.
            document.querySelectorAll("[data-i18n]").forEach((element) => {
                const key = element.dataset.i18n;
                const translatedText = dictionary[key];

                if (translatedText !== undefined) {
                    element.textContent = translatedText;
                }
            });

            // Update atribut aksesibilitas.
            document.querySelectorAll("[data-i18n-aria-label]").forEach((element) => {
                const key = element.dataset.i18nAriaLabel;
                const translatedText = dictionary[key];

                if (translatedText !== undefined) {
                    element.setAttribute("aria-label", translatedText);
                }
            });

            // Update tombol bahasa aktif.
            languageButtons.forEach((button) => {
                const isActive = button.dataset.language === language;

                button.classList.toggle("is-active", isActive);
                button.setAttribute("aria-pressed", String(isActive));
            });

            currentLanguage = language;
        };

        // Jika animasi dinonaktifkan oleh preferensi pengguna,
        // langsung terapkan bahasa tanpa efek transisi.
        if (prefersReducedMotion) {
            applyLanguage();
            return;
        }

        // Mulai fade-out.
        document.body.classList.add("is-language-switching");

        // Ganti teks setelah fade-out selesai.
        languageSwitchTimer = window.setTimeout(() => {
            applyLanguage();

            // Beri browser kesempatan menerapkan teks baru,
            // lalu mulai fade-in.
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    document.body.classList.remove("is-language-switching");
                    languageSwitchTimer = null;
                });
            });
        }, 180);
    };

    // Daftarkan event listener satu kali.
    languageButtons.forEach((button) => {
        button.addEventListener("click", () => {
            setLanguage(button.dataset.language);
        });
    });

    /* ========================================
       HEADER SCROLL EFFECT
    ======================================== */

    const updateHeader = () => {
        if (!header) return;

        header.classList.toggle("header-scrolled", window.scrollY > 10);
    };

    updateHeader();

    window.addEventListener("scroll", updateHeader, {
        passive: true
    });

    /* ========================================
       MOBILE NAVIGATION
    ======================================== */

    const closeMenu = () => {
        if (!menuButton || !navigation) return;

        menuButton.setAttribute("aria-expanded", "false");
        navigation.classList.remove("is-open");

        const language = document.documentElement.lang || "id";
        const dictionary = translations[language] || translations.id;

        menuButton.setAttribute("aria-label", dictionary["nav.openMenu"]);
    };

    if (menuButton && navigation) {
        menuButton.addEventListener("click", () => {
            const isExpanded =
                menuButton.getAttribute("aria-expanded") === "true";

            const shouldOpen = !isExpanded;

            menuButton.setAttribute("aria-expanded", String(shouldOpen));
            navigation.classList.toggle("is-open", shouldOpen);

            const language = document.documentElement.lang || "id";
            const dictionary = translations[language] || translations.id;

            menuButton.setAttribute(
                "aria-label",
                dictionary[
                shouldOpen ? "nav.closeMenu" : "nav.openMenu"
                ]
            );
        });

        navLinks.forEach((link) => {
            link.addEventListener("click", closeMenu);
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                closeMenu();
            }
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth > 760) {
                closeMenu();
            }
        });
    }

    /* ========================================
       ACTIVE NAVIGATION
    ======================================== */

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.forEach((item) => {
                item.classList.remove("active");
                item.removeAttribute("aria-current");
            });

            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        });
    });

    /* ========================================
       SCROLL REVEAL
    ======================================== */

    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
        revealElements.forEach((element) => {
            element.classList.add("is-visible");
        });
    } else {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                });
            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -35px 0px"
            }
        );

        revealElements.forEach((element) => {
            revealObserver.observe(element);
        });
    }

    /* ========================================
       CONTACT FORM — FRONTEND PREVIEW
    ======================================== */

    const contactForm = document.getElementById("contact-form");
    const contactFormStatus = document.getElementById("contact-form-status");

    if (contactForm && contactFormStatus) {
        contactForm.addEventListener("submit", (event) => {
            event.preventDefault();

            if (!contactForm.reportValidity()) return;

            const language = document.documentElement.lang || "id";
            const dictionary = translations[language] || translations.id;

            contactFormStatus.dataset.i18n = "form.previewMessage";
            contactFormStatus.textContent =
                dictionary["form.previewMessage"];
        });
    }

    /* ========================================
       FOOTER YEAR
    ======================================== */

    const footerYear = document.getElementById("footer-year");

    if (footerYear) {
        footerYear.textContent = new Date().getFullYear();
    }

    /* ========================================
       INITIAL STATE
    ======================================== */

    setLanguage("id");
});
