<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Martin H. </title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.etsystatic.com/31977556/r/il/a2ebf6/3815269076/il_1588xN.3815269076_km69.jpg" type="image/x-icon">
    <link rel="script" href="js/portfolio.js">
</head>
<body>
    <nav class="navbar"  >
        <div class="logo" style="margin-left: 40px;">
            <h1 >Marxxx Harax</h1>
        </div>
        <ul class="nav-links" style="padding-right: 40px;">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#certifications">Certifications</a></li>
            <li><a href="#documents">Documents</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <!-- Add theme toggle button -->
        <button id="theme-toggle" class="theme-toggle" aria-label="Toggle dark mode">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
        </button>
        
        <div class="burger" style="margin-right: 20px;">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <section id="home" class="section home-section fullwidth-section">
        <div class="container">
            <div class="home-content">
                <h1> Martin Harahap </h1>
                <h2>Mahasiswa Sistem Informasi Universitas Trunojoyo </h2>
                <p>Lu mau hidup enak tapi males usaha? Bangun, jangan jadi beban. Hidup nggak nungguin orang lemah yang cuma bisa ngeluh. Kalo lu nggak gerak, lu bakal diinjek. Berhenti cari alasan, kerja keras, buktiin kalau lu pantas dapet lebih. Gue ngajak lu buat lawan hidup, bukan cuma pasrah kayak pecundang.</p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn primary-btn">View Portfolio</a>
                    <a href="#contact" class="btn secondary-btn">Contact Me</a>
                </div>
            </div>
            
            <div class="slide-container">
                <div class="slider">
                    <div class="slide active">
                        <img src="assets/profile.jpg" alt="Profile Photo 1">
                    </div>
                    <div class="slide">
                        <img src="https://portofolio-martin.vercel.app/assets/img/profile-img.jpg" alt="Profile Photo 2">
                    </div>
                </div>
                <div class="slider-controls">
                    <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                </div>
            </div>
            <!-- Tech Logo Slider - Moved outside and below -->
            <div class="tech-stack-container">
                <div class="tech-logo-slider">
                    <div class="tech-logo-track">
                        <div class="tech-logo-item"><i class="fab fa-html5"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-css3-alt"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-js"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-python"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-react"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-node-js"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-php"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-java"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-bootstrap"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-git-alt"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-github"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-docker"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-aws"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-linux"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-android"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-apple"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-windows"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-wordpress"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-angular"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-vuejs"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-sass"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-less"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-figma"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-sketch"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-adobe"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-npm"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-yarn"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-graphql"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-microsoft"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-redhat"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-ubuntu"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-slack"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-trello"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-jira"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-django"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-laravel"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-bash"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-stack-overflow"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-gitlab"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-google"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-firefox"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-chrome"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-edge"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-opera"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-cloudflare"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-jenkins"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-salesforce"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-kubernetes"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-blender"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-ethereum"></i></div>
                        

                        <!-- Duplicate for seamless animation -->
                        <div class="tech-logo-item"><i class="fab fa-html5"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-css3-alt"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-js"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-python"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-react"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-node-js"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-php"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-java"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-bootstrap"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-git-alt"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-github"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-docker"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-aws"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-linux"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-android"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-apple"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-windows"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-wordpress"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-angular"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-vuejs"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-sass"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-less"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-figma"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-sketch"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-adobe"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-npm"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-yarn"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-graphql"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-microsoft"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-redhat"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-ubuntu"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-slack"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-trello"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-jira"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-django"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-laravel"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-bash"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-stack-overflow"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-gitlab"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-google"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-firefox"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-chrome"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-edge"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-opera"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-cloudflare"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-jenkins"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-salesforce"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-kubernetes"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-blender"></i></div>
                        <div class="tech-logo-item"><i class="fab fa-ethereum"></i></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section about-section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Gue Martin, mahasiswa Sistem Informasi yang selalu penasaran sama teknologi dan gimana cara bikin sesuatu yang impactful. Nggak suka buang waktu buat hal nggak jelas—gue lebih milih ngulik, belajar, dan ngegas skill biar makin tajam. Buat gue, diem di tempat itu sama aja nyerah, jadi gue terus maju buat bikin perubahan.</p>
                    <p>Saat ini, gue lagi fokus belajar Data Science, Web dan Mobile apps di program Sistem Informasi Universitas Trunojoyo. Sebagai orang yang gigih dan nggak gampang nyerah, gue selalu belajar dari kesalahan dan terus memperbaiki diri. Sekarang gue juga kerja sebagai asisten praktikum di Teknik Informatika, dengan minat besar di pengembangan web dan mobile.</p>
                    <p>Kerja keras, ketekunan, dan kemauan buat belajar dari pengalaman adalah modal utama gue buat ngejar target akademik dan profesional. Lewat peran gue sebagai asisten praktikum, gue udah ngasah skill kerja tim, yang menurut gue krusial banget buat ngeraih tujuan bareng-bareng. Baik saat ngulik model AI atau ngembangin aplikasi, gue nyaman kerja dalam tim yang komunikatif dan solid. Dari pengalaman ini, gue makin sadar pentingnya mendengar, berbagi ilmu, dan berkontribusi buat bikin tim jadi makin produktif.</p>
                    <!-- Education History Table -->
                    <div class="education-history">
                        <h3>Riwayat Pendidikan</h3>
                        <div class="table-responsive">
                            <table class="edu-table">
                                <thead>
                                    <tr>
                                        <th>Gelar/Program</th>
                                        <th>Institusi</th>
                                        <th>Durasi</th>
                                        <th>IPK/Pencapaian</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sarjana Sistem Informasi</td>
                                        <td>Universitas Trunojoyo Madura</td>
                                        <td>2022 - Sekarang</td>
                                        <td>3.81/4.00</td>
                                    </tr>
                                    <tr>
                                        <td>Program Matematika dan Ilmu Alam</td>
                                        <td>SMAN 19 Bekasi</td>
                                        <td>2019 - 2022</td>
                                        <td>Lulusan Terbaik ke-5</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah Menengah Pertama</td>
                                        <td>SMPN 16 </td>
                                        <td>2016- 2019</td>
                                        <td> - </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                    <!-- Academic Achievements Section with Animated Graphs -->
                    <div class="academic-achievements">
                        <h3>Prestasi Akademik</h3>
                        <div class="graphs-container">
                            <!-- IPK/GPA Graph -->
                            <div class="graph-card">
                                <h4>IPK (GPA)</h4>
                                <div class="ipk-container">
                                    <div class="ipk-meter">
                                        <div class="ipk-background"></div>
                                        <div class="ipk-fill" data-value="3.81"></div>
                                        <div class="ipk-value">3.81</div>
                                    </div>
                                    <div class="ipk-scale">
                                        <span>0.0</span>
                                        <span>1.0</span>
                                        <span>2.0</span>
                                        <span>3.0</span>
                                        <span>4.0</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- IELTS Score Graph -->
                            <div class="graph-card">
                                <h4>IELTS Score</h4>
                                <div class="ielts-container">
                                    <div class="ielts-chart">
                                        <div class="ielts-bar reading" data-score="8.0">
                                            <span class="ielts-label">Reading</span>
                                            <div class="ielts-fill"></div>
                                            <span class="ielts-score">8.0</span>
                                        </div>
                                        <div class="ielts-bar listening" data-score="7.5">
                                            <span class="ielts-label">Listening</span>
                                            <div class="ielts-fill"></div>
                                            <span class="ielts-score">7.5</span>
                                        </div>
                                        <div class="ielts-bar writing" data-score="7.0">
                                            <span class="ielts-label">Writing</span>
                                            <div class="ielts-fill"></div>
                                            <span class="ielts-score">7.0</span>
                                        </div>
                                        <div class="ielts-bar speaking" data-score="7.5">
                                            <span class="ielts-label">Speaking</span>
                                            <div class="ielts-fill"></div>
                                            <span class="ielts-score">7.5</span>
                                        </div>
                                    </div>
                                    <div class="ielts-overall">
                                        Overall: <strong>7.5</strong>
                                    </div>
                                </div>
                            </div>
                            

                            
                        </div>
                    </div>
                    <!-- Add TOEFL score visualization -->
                    <div class="detail-score">
                        <h3>TOEFL Score</h3>
                        <div class="toefl-meter">
                            <div class="toefl-bar-container">
                                <div class="toefl-bar-label">Reading</div>
                                <div class="toefl-bar">
                                    <div class="toefl-bar-fill" data-score="27" style="width: 0%"></div>
                                    <span>27/30</span>
                                </div>
                            </div>
                            <div class="toefl-bar-container">
                                <div class="toefl-bar-label">Listening</div>
                                <div class="toefl-bar">
                                    <div class="toefl-bar-fill" data-score="28" style="width: 0%"></div>
                                    <span>28/30</span>
                                </div>
                            </div>
                            <div class="toefl-bar-container">
                                <div class="toefl-bar-label">Speaking</div>
                                <div class="toefl-bar">
                                    <div class="toefl-bar-fill" data-score="25" style="width: 0%"></div>
                                    <span>25/30</span>
                                </div>
                            </div>
                            <div class="toefl-bar-container">
                                <div class="toefl-bar-label">Writing</div>
                                <div class="toefl-bar">
                                    <div class="toefl-bar-fill" data-score="26" style="width: 0%"></div>
                                    <span>26/30</span>
                                </div>
                            </div>
                            <div class="toefl-total">Total: <strong>106/120</strong></div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="about-details"  >
                    <div class="detail-item">
                        <i class="fas fa-birthday-cake"></i>
                        <div>
                            <h3>Tempat, Tanggal Lahir</h3>
                            <p>Bangkalan, 15 January 2003</p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-graduation-cap"></i>
                        <div>
                            <h3>Pendidikan</h3>
                            <p>Sarjana Sistem Informasi <i style="font-size: 12px;">Belum lulus </i></p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <h3>Lokasi</h3>
                            <p>Surabaya</p>
                        </div>
                    </div>
                    
                    
                    <!-- Add Organization Experience -->
                    <div class="detail-experience" style="margin-top: 240px;">
                        <h3>Pengalaman Organisasi</h3>
                        <div class="experience-item">
                            <div class="experience-date">2021 - 2022</div>
                            <div class="experience-content">
                                <h4>Ketua Umum Pramuka SMAN 19 Bekasi</h4>
                                <p>Pramuka SMAN 19 Bekasi</p>
                                <ul>
                                    <li>Mengelola tim pengembangan web fakultas</li>
                                    <li>Menyelenggarakan workshop teknologi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div class="experience-date">2024 - Now </div>
                            <div class="experience-content">
                                <h4> Anggota Aktif & Asisten Praktikum</h4>
                                <p>Computer Science Club</p>
                                <ul>
                                    <li>Panitia 3 event hackathon kampus</li>
                                    <li>Kontributor project open source club</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add Internship Experience -->
                    <div class="detail-experience">
                        <h3>Pengalaman Magang</h3>
                        <div class="experience-item">
                            <div class="experience-date">Jun - Agt 2023</div>
                            <div class="experience-content">
                                <h4>Web Developer Intern</h4>
                                <p>PT Digital Solusi</p>
                                <ul>
                                    <li>Mengembangkan fitur e-commerce dengan React</li>
                                    <li>Optimasi database dan performa website</li>
                                </ul>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div class="experience-date">Jan - Mar 2023</div>
                            <div class="experience-content">
                                <h4>UI/UX Design Intern</h4>
                                <p>Startup Indonesia</p>
                                <ul>
                                    <li>Redesign aplikasi mobile banking</li>
                                    <li>User testing dan prototyping</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="section skills-section">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="skills-container">
                <div class="skill-card">
                    <i class="fab fa-html5"></i>
                    <h3>HTML5</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-css3-alt"></i>
                    <h3>CSS3</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-js"></i>
                    <h3>JavaScript</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-java"></i>
                    <h3>Java</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-python"></i>
                    <h3>Python</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-laravel"></i>
                    <h3>Laravel</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-react"></i>
                    <h3>React</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-bootstrap"></i>
                    <h3>Bootsrap</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-git"></i>
                    <h3>GIT</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-figma"></i>
                    <h3>figma</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-android"></i>
                    <h3>Flutter & Native Kotlin</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div><div class="skill-card">
                    <i class="fab fa-php"></i>
                    <h3>PHP</h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section projects-section">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="https://mataramweb.com/wp-content/uploads/2023/03/jackson-free-personal-resume-website-template.jpg.webp" alt="Project 2">
                    </div>
                    <div class="project-info">
                        <h3>Portfolio Website</h3>
                        <p>Sebuah Website portofolio responsive yang dibangun menggunakan  HTML, CSS, and JavaScript</p>
                        <div class="project-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                        </div>
                        <a href="#" class="btn small-btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certifications" class="section certifications-section">
    <div class="container">
        <h2 class="section-title">Certifications</h2>
        <div class="certifications-container">
            <!-- Certificate 1 -->
            <div class="cert-card">
                <div class="cert-badge">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Google_Developers_logo.svg/1200px-Google_Developers_logo.svg.png" alt="Google Badge">
                </div>
                <div class="cert-details">
                    <h3>Google Associate Android Developer</h3>
                    <div class="cert-issuer">
                        <p>Issued by <span>Google Developers</span></p>
                        <p class="cert-date">Mar 2023</p>
                    </div>
                    <p class="cert-description">Certified as a proficient Android developer with skills in Kotlin, Android SDK, and modern app architecture.</p>
                    <div class="cert-actions">
                        <a href="#" class="btn small-btn cert-btn">View Certificate</a>
                        <div class="cert-credential">
                            <i class="fas fa-shield-alt"></i>
                            <span>Credential ID: AAD-P23-842JDS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate 2 -->
            <div class="cert-card">
                <div class="cert-badge">
                    <img src="https://avatars.githubusercontent.com/u/44036562?s=280&v=4" alt="AWS Badge">
                </div>
                <div class="cert-details">
                    <h3>AWS Certified Cloud Practitioner</h3>
                    <div class="cert-issuer">
                        <p>Issued by <span>Amazon Web Services</span></p>
                        <p class="cert-date">Feb 2023</p>
                    </div>
                    <p class="cert-description">Foundational understanding of AWS Cloud services, security, architecture, and compliance.</p>
                    <div class="cert-actions">
                        <a href="#" class="btn small-btn cert-btn">View Certificate</a>
                        <div class="cert-credential">
                            <i class="fas fa-shield-alt"></i>
                            <span>Credential ID: AWS-CCP-82JDM3</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate 3 -->
            <div class="cert-card">
                <div class="cert-badge">
                    <img src="https://assets.website-files.com/5f0a4c8922f38176cccc3e6d/5f0a4c8922f381dd1acc3f5e_meta.png" alt="Meta Badge">
                </div>
                <div class="cert-details">
                    <h3>Meta Front-End Developer</h3>
                    <div class="cert-issuer">
                        <p>Issued by <span>Meta</span></p>
                        <p class="cert-date">Jan 2023</p>
                    </div>
                    <p class="cert-description">Professional certification in front-end development, covering React, JavaScript, HTML and responsive design.</p>
                    <div class="cert-actions">
                        <a href="#" class="btn small-btn cert-btn">View Certificate</a>
                        <div class="cert-credential">
                            <i class="fas fa-shield-alt"></i>
                            <span>Credential ID: META-FE-943SLK</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="documents" class="section documents-section">
        <div class="container">
            <h2 class="section-title">Documents</h2>
            <div class="documents-container">
                <!-- CV Document -->
                <div class="document-card">
                    <div class="document-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="document-info">
                        <h3>Curriculum Vitae</h3>
                        <p>Download my comprehensive CV in PDF format</p>
                        <a href="documents/cv.pdf" download class="btn small-btn">Download CV</a>
                    </div>
                </div>
                
                <div class="document-card coming-soon">
                    <div class="document-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="document-info">
                        <h3>Diploma Certificate</h3>
                        <p>University diploma certificate</p>
                        <a href="documents/cv.pdf" download class="btn small-btn">Download CV</a>
                    </div>
                </div>
                

                <!-- Diploma Certificate (Coming Soon) -->
                <div class="document-card coming-soon">
                    <div class="document-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="document-info">
                        <h3>Diploma Certificate</h3>
                        <p>University diploma certificate</p>
                        <span class="coming-soon-badge">Coming Soon</span>
                    </div>
                </div>
                
                <!-- Other Certificates -->
                <div class="document-card">
                    <div class="document-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="document-info">
                        <h3>Certifications</h3>
                        <p>Professional certificates and course completions</p>
                        <a href="documents/certificates.zip" download class="btn small-btn">Download All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="section contact-section">
        <div class="container">
            <h2 class="section-title">Contact Me</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p>martinharahap@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <p>+62 123 456 7890</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Indonesia</p>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn primary-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    
    <footer>
        <div class="container">
            <p>&copy; 2023 Marxxx Harax. All rights reserved.</p>
            <a href="#home" class="back-to-top">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>
    </footer>

<!-- Fix script loading - Change link rel to regular script tag and remove duplicate -->
<script src="js/portfolio.js"></script>
</body>
</html>