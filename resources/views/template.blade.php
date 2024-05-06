<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio 3D</title>
        <link rel="stylesheet" href="{{ asset('vest/style.css') }}">    
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'></head>

    <body>

    <div class="wrapper">
        <div class="cover cover-left"></div>
        <div class="cover cover-right"></div>

        <div class="book">            
            <div class="book-page page-left">
                <div class="profile-page">
                    <img src="{{ asset('vest/logo petik.png') }}" alt="">
                    <h1>Pesantren Teknologi</h1>
                    <h3>informasi dan Komunikasi</h3>
                    <div class="social-media">
                        <a href="https://www.facebook.com/pesantrenpetik/"><i class='bx bxl-facebook'></i></a>
                        <a href="https://mail.google.com"><i class='bx bxl-gmail'></i></a>
                        <a href="https://www.linkedin.com/in/pesantren-petik-165455209/"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.instagram.com/kerjasamapetik?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class='bx bxl-instagram-alt'></i></a>
                    </div>
                    <p><span @style('margin-left:10px')>Menyatukan</span> ilmu agama dan teknologi, melahirkan generasi muda muslim yang cerdas, berakhlak mulia, dan siap berkarya di era digital.
                    </p>
                    <p><span @style('margin-left:10px')>Santri</span> dibekali ilmu coding, networking, dan lain sebagainya, serta pemahaman agama yang mendalam, siap menjadi profesional IT yang berakhlak mulia.</p>
                    <div class="btn-box">
                        @if (!Auth::check())
                            <a href="{{ route('login') }}" class="btn">Login</a>    
                            <a href="#" class="btn contact-me">Yuk Daftar</a>
                        @elseif (Auth::check() && Auth::user()->role == 'user')
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="btn " onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>       
                                <a href="#" class="btn contact-me">Daftar Yuk</a>                 
                            </form>
                        @elseif (Auth::check() && Auth::user()->role == 'admin')
                            <form action="{{ route('logout') }}" method="POST">
                            @csrf
                                <a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                                <a href="{{ route('dashboard') }}" class="btn contact-me">Dashboard</a>
                            </form>                            
                        @endif                    
                    </div>
                </div>
            </div>

            <div class="book-page page-right turn" id="turn-1">
                <div class="page-front">
                    <h1 class="title">Visi & Misi
                    </h1>

                    <div class="workeduc-box">
                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i> PeTIK ANKT 2023-2024</span>
                            <h3>Visi</h3>
                            <p><span @style('margin-left:10px')>Menjadi</span> lembaga pendidikan unggul dalam membentuk tenaga terampil di bidang teknologi informasi dan komunikasi yang berkarakter mulia melalui pembangunan kemandirian yang bernilai tambah.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i> PeTIK ANKT 2023-2024</span>
                            <h3>Misi</h3>
                            <ul>
                                <li>Menjalankan metode pembelajaran berbasis pendidikan pesantren.</li>
                                <li>Menyelenggarakan pendidikan yang berkarakter dan berakhlak mulia.</li>
                                <li>Menyiapkan dan mengembangkan sumberdaya insani yang menguasai teknologi informasi dan komunikasi yang memiliki sikap kerja positif dan penguasaan interaksi yang kondusif.</li>
                                <li>Mengikuti tren teknologi media pembelajaran.
                                </li>
                                <li>Membangun model komunikasi lintas potensi daerah yang dapat meningkatkan kesejahteraan masyarakat.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <span class="number-page">1</span>

                    <span class="nextprev-btn" data-page="turn-1">
                        <i class='bx bx-chevron-right'></i>
                    </span>
                </div>

                <div class="page-back">
                    <h1 class="title">Tujuan</h1>

                    <div class="workeduc-box">
                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i> PeTIK ANKT 2023-2024</span>
                            <h3>Tujuan</h3>
                            <ul>
                                <li>Mencetak peserta didik menguasai keterampilan teknologi informasi dan komunikasi yang sesuai dengan kebutuhan IDUKA.</li>
                                <li>Mencetak peserta didik menjadi generasi yang berwawasan ilmu-ilmu keislaman dan ketaatan dalam beribadah.
                                </li>
                                <li>Membangun hubungan yang baik dengan para pemangu kepentingan sebagai bentuk keterbukaan dan pertanggung jawaban.
                                </li>
                                <li>Melahirkan da’i yang memperjuangkan nilai-nilai islam.
                                </li>
                                <li>Menggunakan perangkat keras dan perangkat lunak yang mutakhir pada proses kegiatan belajar dan mengajar dalam memperbaharui pengetahuan dan keterampilannya.
                                </li>
                            </ul>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i> PeTIK ANKT 2023-2024</span></span>
                            <h3>Motto</h3>
                            <p>Creates Future Skilled Professionals
                            </p>
                        </div>
                    </div>

                    <span class="number-page">2</span>

                    <span class="nextprev-btn back" data-page="turn-1">
                        <i class='bx bx-chevron-left'></i>
                    </span>
                </div>
            </div>

            <div class="book-page page-right turn" id="turn-2">
                <div class="page-front">
                    <h1 class="title">Jurusan</h1>

                    <div class="services-box">
                        <div class="services-content">
                            <i class='bx bx-code-alt'></i>
                            <h3>PPW</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>

                        <div class="services-content">
                            <i class='bx bxs-paint'></i>
                            <h3>PPM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>

                        <div class="services-content">
                            <i class='bx bx-bar-chart-alt'></i>
                            <h3>PSJ</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>

                        <div class="services-content">
                            <i class='bx bx-search'></i>
                            <h3>SEO</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>

                    <span class="number-page">3</span>

                    <span class="nextprev-btn" data-page="turn-2">
                        <i class='bx bx-chevron-right'></i>
                    </span>
                </div>

                <div class="page-back">
                    <h1 class="title">Bahasa Pemrograman yang dipelajari</h1>

                    <div class="skills-box">
                        <div class="skills-content">
                            <h3>Front-End</h3>
                            <div class="content">
                                <span><i class='bx bxl-html5'></i>HTML</span>
                                <span><i class='bx bxl-css3'></i>CSS</span>
                                <span><i class='bx bxl-javascript'></i>JS</span>
                                <span><i class='bx bxl-angular'></i>Angular</span>
                                <span><i class='bx bxl-react'></i>React</span>
                                <span><i class='bx bxl-bootstrap'></i>Bootstrap</span>
                                <span><i class='bx bxl-tailwind-css'></i>Tailwind</span>
                            </div>
                        </div>

                        <div class="skills-content">
                            <h3>Back-End</h3>
                            <div class="content">
                                <span><i class='bx bxl-python'></i>Python</span>
                                <span><i class='bx bxl-java'></i>Java</span>
                                <span><i class='bx bxl-php'></i>PHP</span>
                                <span><i class='bx bxl-nodejs'></i>Node</span>
                            </div>
                        </div>

                        <div class="skills-content">
                            <h3>UI/UX Design</h3>
                            <div class="content">
                                <span><i class='bx bxl-figma'></i>Figma</span>
                            </div>
                        </div>
                    </div>

                    <span class="number-page">4</span>

                    <span class="nextprev-btn back" data-page="turn-2">
                        <i class='bx bx-chevron-left'></i>
                    </span>
                </div>
            </div>

            <div class="book-page page-right turn" id="turn-3">
                <div class="page-front">
                    <h1 class="title">Latest Project</h1>

                    <div class="portofolio-box">
                        <div class="img-box">
                            <img src="{{ asset('vest/PeTIK.png') }}" alt="">
                        </div>

                        <div class="info-box">
                            <div class="info-title">
                                <h3>PeTIK.or.id</h3>
                                <a href="https://petik.or.id/">Live Preview <i class='bx bx-link-external'></i></a>
                            </div>
                            <p>Tech Used:</p>
                            <p>PeTIK bermula dari keberadaan Lembaga Amil Zakat Infaq dan Shodaqoh PT PLN (Persero) Kantor Pusat (LAZIS PT PLN (Persero) Kantor Pusat)  yang dibentuk berdasarkan Keputusan Direksi Nomor 132.K/DIR/2006 Tanggal 11 September 2006.</p>
                        </div>
    
                        <div class="btn-box">
                            <a href="#" class="btn">Source Code</a>
                            <a href="#" class="btn">More Projects</a>
                        </div>
                    </div>

                    <span class="number-page">5</span>

                    <span class="nextprev-btn" data-page="turn-3">
                        <i class='bx bx-chevron-right'></i>
                    </span>    
                </div>


                <div class="page-back">
                    <h1 class="title">Yuk Daftar</h1>
                    <div class="contact-box">
                        <form method="POST" action="{{ route('buku.store') }}">
                        @csrf
                            <input type="name" placeholder="Full Name" name="name" class="field @error('name') is-invalid @enderror" required >
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="email" placeholder="Email Address" name="email" required class="field @error('email') is-invalid @enderror" required >
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <textarea name="" id="" cols="30" rows="10" class="field" placeholder="Your Message" required></textarea>
                            <input type="submit" class="btn" value="Daftar Sekarang">                                                        
                        </form>
                    </div>

                    <span class="number-page">6</span>

                    <span class="nextprev-btn back" data-page="turn-3">
                        <i class='bx bx-chevron-left'></i>
                    </span>

                    <a href="#" class="back-profile">
                        <p>Profile</p>
                        <i class='bx bxs-user'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vest/script.js') }}"></script>
</body>
</html>