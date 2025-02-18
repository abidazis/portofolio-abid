<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Abid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Portfolio Abid</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero" id="home">
        <div class="hero-text">
            <h2>Hello...</h2>
            <h1>I Am, Abid Athananda Azis</h1>
            <p>Information System | Web & App Developer | Business Developer</p>
            <a href="CV_Abid_Athananda_Azis.pdf" download="CV_Abid_Athananda_Azis.pdf" class="btn-custom">Download My CV</a>
        </div>
        <img src="foto abid.png" alt="Profile Picture">
    </header>

    <section class="section profile" id="profile">
        <div class="container-aboutme">
            <h2>About Me</h2>
            <p>Hi, saya Abid! Seorang mahasiswa Sistem Informasi yang antusias terhadap teknologi & Bisnis. Saya fokus pada pengembangan website dan aplikasi yang fungsional serta user-friendly. Selalu siap belajar, beradaptasi, dan berkontribusi dalam dunia digital.</p>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-container">
                <div class="project-card">
                    <img src="tokoAPC.png" alt="Project 1">
                    <h5>Toko Online UMKM</h5>
                    <p>Membangun website toko online dari seorang UMKM</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
                <div class="project-card">
                    <img src="sistemakademik.png" alt="Project 2">
                    <h5>Sistem Monitoring Siswa</h5>
                    <p>Membangun sistem untuk mempermudah monitoring absensi dan nilai siswa</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
                <div class="project-card">
                    <img src="RumahMakan.jpg" alt="Project 3">
                    <h5>Sistem Pesanan Rumah Makan</h5>
                    <p>Membangun sistem untuk mempermudah proses pesanan dan pelayanan rumah amakan</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <section id="experience-education">
    <div class="container-experience-education">
        <div class="experience">
            <h2>Pengalaman</h2>
            <div class="exp-item">
                <h3>Quality Assurance Intern</h3>
                <p>SIB Final Project - PT. Rakamin Academy | 2024</p>
                <p>Berperan sebagai Quality Assurance dalam tim Final Project Studi Independen PT. Rakamin Academy</p>
            </div>
            <div class="exp-item">
                <h3>IT Fullstack Developer</h3>
                <p>Studi Independen Bersetifikat - PT. Rakamin Academy | 2024</p>
                <p>Menekuni dan mengasah kemampuan sebagai Web Application development mitra PT. Rakamin Academy</p>
            </div>
        </div>

        <div class="education">
            <h2>Riwayat Pendidikan</h2>
            <div class="edu-item">
                <h3>Mahasiswa Sistem Informasi - FASILKOM</h3>
                <p>Singaperbangsa Karawang University | 2022 - Sekarang</p>
                <p>Berfokus pada bidang perancangan sistem informasi dan pengembangan aplikasi website</p>
            </div>
            <div class="edu-item">
                <h3>Online Certifications</h3>
                <p>Rakamin Academy | 2024</p>
                <p>Lulus Studi Independen PT. Rakamin Academy bidang IT Fullstack development</p>
            </div>
        </div>
    </div>
</section>

    <section class="section" id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <div class="contact-icons">
                <a href="mailto:abidathanandaazis@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/abid-athananda-azis"><i class="fab fa-linkedin"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6285880084403"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
