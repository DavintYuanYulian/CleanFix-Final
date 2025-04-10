<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Kelompok 8 Home Service -->
    <!-- 
        Davint Yuan Yulian - Fullstack
        Muhammad Rifqi Nur A'la - Fullstack
        Hasna Adibah Pratami - UI/UX Design
        Rafli Muhaimin Hidayata - UI/UX Design
    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanFix</title>
    <link rel="icon" href="assets/LogoHTML.jpg" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>
    

<!-- header section starts  -->
<header class="header">

    <a href="#" class="logo">
        <img src="assets/logo-homeservice.png" alt="Cleanfix Logo" style="height: 45px; vertical-align: middle; margin-right: 8px;">
    </a>

    <div class="icons">
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#AboutUs">About Us</a>
        <a href="#services">Services</a>
        <a href="#packages">Packages</a>
        <a href="#review">Review</a>
        <a href="#ConsFAQ">Consultation & FAQ</a>
        <a href="#Location">Location</a>
        <a href="#contact">Contact</a>
        <a href="#blogs">Blogs</a>
    </nav>

    <form action="" class="login-form">

        <h1 style="text-align: center; margin-bottom: 1rem;">Login as Admin</h1>

        <div class="inputBox">
            <span>username</span>
            <input type="text" placeholder="enter your name">
        </div>

        <div class="inputBox">
            <span>password</span>
            <input type="password" placeholder="enter your password">
        </div>

        <div class="remember">
            <input type="checkbox" name="" id="login-remember">
            <label for="login-remember">remember me</label>
        </div>

        <input type="submit" class="btn" value="login">
    </form>
</header>
<!-- header section ends -->


<!-- home section starts  -->

<section class="hero-section" id="home">
    <div class="text">
      <h2>Hi, Welcome to <span style="color: #00aaff; font-weight: bold;">CleanFix 👋</span></h2>
      <p>Mulai dari layanan kebersihan profesional, perbaikan ringan, hingga kebutuhan rumah tangga lainnya — <span style="color: #00aaff; font-weight: bold;">CleanFix</span> hadir untuk membantu Anda. Nikmati kenyamanan tanpa repot dengan layanan yang cepat, aman, dan terpercaya.</p>
      <a href="#packages" class="btn">Pilih Paket Layanan</a>
    </div>

    <div class="headshot">
      <img src="assets/hero-section.png" alt="head">
    </div>
  </section>
  <!-- Home section end -->


<!-- About Us Section -->
<section class="about-section" id="AboutUs">
    <div class="about-container" data-aos="fade-up">
      <div class="about-content">
        <!-- Text Content -->
        <div class="about-text">
          <h2 class="title">About Us</h2>
          <p class="lead"><span style="color: #00aaff; font-weight: bold;">CleanFix</span> adalah solusi layanan rumah tangga yang dirancang khusus untuk memudahkan hidup Anda mulai dari ibu rumah tangga, pekerja sibuk, hingga anak kost. Kami menyediakan beragam layanan seperti pembersihan rumah dan kamar kost, cuci kendaraan, servis AC, perbaikan pipa, jasa tukang, hingga jasa angkut barang untuk kebutuhan pindahan.</p>
          <p class="lead">Dengan proses pemesanan online yang praktis, layanan cepat, harga bersahabat, dan tim profesional yang dapat dipercaya, CleanFix hadir untuk memastikan setiap sudut hunian Anda bersih, rapi, dan berfungsi dengan baik. Khususnya untuk Anda yang berada di wilayah <span style="font-weight: bold; color: #F79F1F;">Semarang Timur</span> dan sekitarnya<i class="fas fa-map-marker-alt" style="color: #F79F1F; margin-left: 5px;"></i></p>
        </div>
  
        <!-- Image Grid -->
        <div class="about-images">
          <img src="assets/about1.jpg" alt="Image 1" />
          <img src="assets/about2.jpeg" alt="Image 2" />
          <img src="assets/about3.jpg" alt="Image 3" />
          <img src="assets/about4.webp" alt="Image 4" />
        </div>
      </div>
    </div>
  </section>
  <!-- About US end -->


<!-- services section starts  -->
<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fas fa-broom service-icon"></i>
            <h3>Cleaning Service</h3>
            <p>Kami menyediakan layanan kebersihan rumah, kamar kos, hingga cuci kendaraan, jasa kebersihan lainnya untuk menjaga kenyamanan hunian Anda.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>02</span>
            <i class="fas fa-tools service-icon"></i>
            <h3>Perbaikan dan Maintenance</h3>
            <p>Dari servis AC, perbaikan pipa, hingga jasa tukang lainya. kami siap menangani masalah teknis rumah Anda secara cepat dan profesional.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>03</span>
            <i class="fas fa-truck-moving service-icon"></i>
            <h3>Jasa Angkut Barang</h3>
            <p>Butuh bantuan pindahan? Layanan angkut barang kami siap membantu memindahkan barang Anda dengan aman dan efisien.</p>
        </div>
    </div>
</section>
<!-- services section ends -->
  
  
<!-- packages section starts  -->
<section class="packages" id="packages">

    <h1 class="heading"> our <span>packages</span> </h1>
    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/service-ac.jpg" alt="service-ac">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Service AC</h1>
                <p>Layanan pembersihan dan perawatan AC agar tetap dingin, hemat listrik, dan tahan lama. Cocok untuk rumah atau kamar kost yang butuh udara segar!</p>
                <div class="price"> Rp 120.000 <span style="color: green;">Rp 150.000</span> </div>
                <a href="#" class="btn" onclick="openForm('Service AC')">Order Sekarang</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/perbaikan-pipa.jpeg" alt="perbaikan-pipa">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Perbaikan Pipa</h1>
                <p>Tangani masalah pipa bocor, mampet, atau rusak. Tim profesional kami siap bantu memperbaiki aliran air Anda dengan cepat dan rapi.</p>
                <div class="price">Rp 130.000 <span style="color: green;">Rp 170.000</span></div>
                <a href="#" class="btn" onclick="openForm('Perbaikan Pipa')">Order Sekarang</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/CleaningHome.jpg" alt="CleaningHome">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Pembersihan Rumah</h1>
                <p>Layanan kebersihan menyeluruh dari kamar hingga ruang keluarga. Cocok untuk menjaga kenyamanan dan higienitas hunian Anda.</p>
                <div class="price">Rp 550.000 <span style="color: green;">Rp 900.000</span></div>
                <a href="#" class="btn" onclick="openForm('Pembersihan Rumah')">Order Sekarang</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/Cleaningcar.png" alt="Cleaningkendaraan">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Cuci Kendaraan</h1>
                <p>Layanan cuci motor dan mobil langsung ke lokasi Anda. Praktis, bersih sampai kedalam, dan hemat waktu tanpa harus antri.</p>
                <div class="price">Rp 20.000 - Rp. 50.000</div>
                <a href="#" class="btn" onclick="openForm('Cuci Kendaraan')">Order Sekarang</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/servicegenteng.webp" alt="Service Atap dan Genteng">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Service Atap/ Genteng</h1>
                <p>Atap bocor atau genteng bermasalah? Tim kami siap memperbaiki, mengganti, dan memastikan atap Anda kembali aman dan bebas rembesan.</p>
                <div class="price">Rp 150.000 <span style="color: green;">Rp 180.000</span></div>
                <a href="#" class="btn" onclick="openForm('Service Atap atau Genteng')">Order Sekarang</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/Jasaangkutbarang.webp" alt="Jasa Angkut Barang">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Jasa Angkut Barang</h1>
                <p>Butuh bantuan pindahan atau angkut barang besar? Kami siap bantu kirim barang Anda dengan aman dan tepat waktu ke tujuan.</p>
                <div class="price" style="font-size:12px; color:green">*harga tergantung Volume/jenis barang dan jarak</div>
                <a href="#" class="btn" onclick="openForm('Jasa Angkut Barang')">Order Sekarang</a>
            </div>   
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/foggingandPC.jpeg" alt="Fogging dan Pest Control">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Fogging/ Pest Control</h1>
                <p>Membasmi nyamuk, kecoa, semut, dan hama lainnya dengan metode aman dan efektif. Hunian lebih sehat dan bebas gangguan.</p>
                <div class="price">Rp 200.000 <span style="color: green;">Rp 300.000</span></div>
                <a href="#" class="btn" onclick="openForm('Fogging and Pest Control')">Order Sekarang</a>
            </div>  
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/handyman.jpg" alt="Service Furniture">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Service Furniture</h1>
                <p>Perbaikan meja goyang, lemari rusak, pintu susah ditutup, dan masalah furnitur lainnya. Kami bantu bikin semua kembali kokoh dan fungsional.</p>
                <div class="price">Rp 160.000 <span style="color: green;">Rp 190.000</span></div>
                <a href="#" class="btn" onclick="openForm('Service Furniture')">Order Sekarang</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/paket/jasacatrumah.jpg" alt="Jasa Cat Rumah">
            </div>
            <div class="content">
                <h1 style="font-size: 2.7rem; color: #00aaff;">Jasa Cat Rumah</h1>
                <p>Pengecatan interior maupun eksterior untuk rumah, kost, atau ruangan kerja Anda. Warna baru, suasana baru, dikerjakan rapi oleh tenaga profesional.</p>
                <div class="price">Rp 100.000 - Rp. 400.000</div>
                <a href="#" class="btn" onclick="openForm('Jasa Cat Rumah')">Order Sekarang</a>
            </div>
        </div>
    </div>
</section>
<!-- packages section ends -->



<!-- review section starts  -->
<section class="review" id="review">
    <h1 class="heading"> client <span>review</span> </h1>
    <div class="swiper-container review-slider" data-aos="zoom-in">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="assets/img-client/fotoclient.jpg" alt="foto client">
                <h3>Pak Bara</h3>
                <p style="margin-top: -15px; color: #F79F1F;">- Pengusaha Tesktil -</p>
                <p>Pelayanan dari CleanFix bener-bener memuaskan. Petugasnya datang tepat waktu, ramah, dan kerjaannya rapi banget. Rumah saya jadi bersih total, sampai ke bagian-bagian yang biasanya suka kelewat pun dibersihin. Pokoknya nyaman banget rasanya lihat hasil akhirnya. Makasih ya, CleanFix!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="assets/img-client/client.webp" alt="foto client">
                <h3>Pak Ogah</h3>
                <p style="margin-top: -15px; color: #F79F1F;">- Wiraswasta -</p>
                <p>Waktu pindahan kemarin butuh jasa angkut barang, dan CleanFix bener-bener ngebantu. Barang ditangani dengan hati-hati, nggak ada yang rusak atau lecet. Petugasnya juga sopan dan komunikatif. Puas banget sama pelayanannya.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="swiper-container review-slider" data-aos="zoom-in">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="assets/img-client/ibu1.jpeg" alt="foto client">
                <h3>Bu Clara</h3>
                <p style="margin-top: -15px; color: #F79F1F;">- Ibu Rumah Tangga -</p>
                <p>Awalnya ragu sih, tapi pas petugas CleanFix dateng... wah, langsung berubah pikiran. Mereka kerja cepet tapi tetap rapi. Rumah berasa lebih fresh, anak-anak juga jadi betah main di dalam. Terima kasih CleanFix, next time pasti pakai lagi!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="swiper-container review-slider" data-aos="zoom-in">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="assets/img-client/mhswi.jpeg" alt="foto client">
                <h3>Karin</h3>
                <p style="margin-top: -15px; color: #F79F1F;">- Mahasiswi Teknik | DevOps Engineer -</p>
                <p>Kosan gue abis banget buat dibersihin, tapi CleanFix datang kayak penyelamat. Nggak cuma bersihin lantai, tapi detail-detail kecil kayak kolong tempat tidur juga dibersihin. Serius, cocok buat anak kos yang males bersih-bersih kayak gue!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="swiper-container review-slider" data-aos="zoom-in">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="assets/img-client/mhswa.jpeg" alt="foto client">
                <h3>Davin Yuan</h3>
                <p style="margin-top: -15px; color: #F79F1F;">- Udang Keju -</p>
                <p>Pulang kerja udah capek, tapi ngelihat rumah yang bersih tuh rasanya beda. CleanFix bener-bener bantu banget buat orang sibuk kayak aku. Cepet, bersih, dan yang paling penting—nggak ribet. Booking-nya juga gampang banget lewat websitenya.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- review section end  -->


<!-- Consultation about services start-->
<section class="review" style="background-color: #eee;" id="ConsFAQ">
    <div class="swiper-container review-slider" data-aos="fade-up">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <h3>Masih Bingung Mau Pilih Layanan yang Mana?</h3>
                <p>Tenang, kamu nggak sendiri! Langsung aja konsultasikan kebutuhan kamu ke tim kami. Kami siap bantu dengan sepenuh hati.</p>
                <a href="https://wa.me/6281234567890" class="btn" style="background-color: #00aaff; color: white;">
                    <i class="fab fa-whatsapp"></i> Hubungi Customer Service
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Consultation end -->


<!-- FAQ start-->
<section style="margin-top: -8.5rem;">
    <div class="boxfaq" data-aos="fade-up">
        <h1>Pertanyaan Umum🤔</h1>
        <div class="faqs">
            <details>
                <summary>Bagaimana cara memesan layanan di CleanFix?</summary>
                <p>Gampang banget! pertama, Kamu cukup klik/ pilih paket layanan yang kamu butuhkan. Setelah itu, kamu akan diakan diarahkan ke form order, lalu setelah kamu melakukan pengisian detail order, selanjutnya kamu harus melakukan submit order detail anda. dan setalah itu pihak CleanFix akan menghubungimu melalui WhatsApp terkait pemesanan lebih lanjut.</p>
            </details>
            <details>
                <summary>Apakah CleanFix menerima layanan di luar jam kerja normal?</summary>
                <p>Tentu saja! Kamu bisa request layanan di pagi hari, malam, bahkan weekend, selama kami punya slot tersedia. Pastikan kamu booking lebih awal, ya!</p>
            </details>
            <details>
                <summary>Apakah tim CleanFix bisa dipercaya masuk ke rumah/kos?</summary>
                <p>Aman banget! Semua petugas kami sudah melalui proses seleksi, pelatihan, dan verifikasi identitas. Kepuasan dan rasa aman pelanggan adalah prioritas kami.</p>
            </details>
            <details>
                <summary>Apakah saya bisa memilih petugas yang datang?</summary>
                <p>Untuk saat ini, sistem kami akan memilihkan petugas yang paling cepat tersedia di area kamu. Tapi jangan khawatir, semua petugas CleanFix sudah terlatih dan terpercaya.</p>
            </details>
            <details>
                <summary>Apa yang harus saya siapkan sebelum petugas datang?</summary>
                <p>Nggak banyak kok! Pastikan area yang ingin dibersihkan bisa diakses dengan mudah dan tidak ada barang berharga yang tercecer. Sisanya, biar kami yang urus.</p>
            </details>
        </div>
    </div>
</section>
<!-- FAQ end -->


<!-- Location start-->
<section class="services" id="Location">

    <h1 class="heading"><span>Our Location</span> </h1>

    <div class="box-container" style="display: flex; flex-direction: column; align-items: center; gap: 1.5rem;">

        <!-- Alamat dan Icon -->
        <p style="font-size: 1.2rem; display: flex; align-items: center; gap: 0.5rem;">
            <i class="fas fa-map-marker-alt" style="color: #f79f1f;"></i>
            Jl. Mawar No. 45, Semarang, Jawa Tengah
        </p>

        <!-- Google Maps Embed -->
        <div style="width: 100%; max-width: 800px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5500074496623!2d110.42105407500308!3d-7.834529877602477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578a1b9d9b1d%3A0xaab85e0d163be9b0!2sCleanFix%20Office!5e0!3m2!1sen!2sid!4v1712474867636!5m2!1sen!2sid" 
                width="100%" 
                height="400" 
                style="border:0; border-radius: 10px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>

</section>
<!-- Location -->


<!-- contact section starts  -->
<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>
  
    <form action="kirim.php" method="POST" data-aos="zoom" id="contactForm">
  
      <div class="inputBox">
        <input type="text" name="name" placeholder="name" data-aos="fade-up" required>
        <input type="email" name="email" placeholder="email" data-aos="fade-up" required>
      </div>
  
      <div class="inputBox">
        <input type="number" name="number" placeholder="number" data-aos="fade-up">
        <input type="text" name="subject" placeholder="subject" data-aos="fade-up" required>
      </div>
  
      <textarea name="message" placeholder="your message" cols="30" rows="10" data-aos="fade-up" required></textarea>
      
      <input type="submit" value="send message" class="btn" style="background-color:#00aaff;">
    </form>
  </section>
  <!-- contact section ends -->


<!-- blog section starts  -->
<section class="blogs" id="blogs">
    <h1 class="heading"> our <span>blogs</span> </h1>
    <div class="box-container">
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/blogs/hom2.jpeg" alt="blog-image">
            </div>
            <div class="content">
                <h3>Tips Membersihkan Rumah Tanpa Ribet, Simpel & Efektif Banget!</h3>
                <a href="#" class="btn" style="background-color: #00aaff;">Baca Lengkap...</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar" style="color: #00aaff;"></i> 5 april, 2025 </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/blogs/ac.jpeg" alt="blog-image">
            </div>
            <div class="content">
                <h3>Kapan Sebaiknya Servis AC? Simak Tips dari Teknisi CleanFix!</h3>
                <a href="#" class="btn" style="background-color: #00aaff;">Baca Lengkap...</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar" style="color: #00aaff;"></i> 1 maret, 2025 </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="assets/blogs/cleaninghome.jpeg" alt="blog-image">
            </div>
            <div class="content">
                <h3>Kenapa Pembersihan Rutin Penting? Ini Rahasia Rumah Sehat ala CleanFix!</h3>
                <a href="#" class="btn" style="background-color: #00aaff;">Baca Lengkap...</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar" style="color: #00aaff;"></i> 25 feb, 2021 </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section ends -->


<!-- footer section starts  -->
<footer>
      <div class="container">
        <div class="wrapper">
          <div class="footer-widget">
            <a href="#">
              <img src="assets/logo-homeservice.png" class="logo" />
            </a>
            <p class="desc">
            Butuh jasa kebersihan, servis, atau angkut barang? Tim CleanFix siap bantu dengan layanan terbaik dan terpercaya.
            </p>
            <ul class="socials">
              <li>
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Quick Link</h6>
            <ul class="links">
              <li><a href="#home">Home</a></li>
              <li><a href="#AboutUs">About Us</a></li>
              <li><a href="#services">services</a></li>
              <li><a href="#packages">Packages</a></li>
              <li><a href="#review">Review</a></li>
              <li><a href="#ConsFAQ">Consultation</a></li>
              <li><a href="#Location">Location</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#blogs">Blogs</a></li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Services</h6>
            <ul class="links">
              <li><a href="#">Layanan Pembersihan</a></li>
              <li><a href="#">Perbaikan/ Maintenance</a></li>
              <li><a href="#">Jasa Angkut Barang</a></li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Help &amp; Support</h6>
            <ul class="links">
              <li><a href="#">Konsultasi</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#"> ✉️ Cleanfix@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="copyright-wrapper">
          <p style="color: black;">
            Design and Developed by
            <a href="#" style="color:#00aaff;">Kelompok 8 Home Service</a>
            | Final Project of Decomus Bootcamp Batch 3 | 2025
          </p>
        </div>
      </div>
    </footer>
<!-- footer section ends -->


<!-- Order Form Popup -->
<div class="popup-overlay" id="popupOverlay"></div>
<div class="order-form-popup" id="orderForm">
  <div class="form-container">
    <span class="close-btn" id="closeForm">&times;</span>
    <h2>Form Pemesanan Layanan</h2>
    <form id="orderServiceForm">
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required>

      <label for="date">Tanggal Request Layanan:</label>
      <input type="date" id="date" name="date" required>

      <label for="phone">Nomor WhatsApp:</label>
      <input type="tel" id="phone" name="phone" placeholder="Contoh: 6281234567890" required>

      <label for="time">Jam Request Layanan:</label>
      <input type="time" id="time" name="time" required>

      <label for="address">Alamat:</label>
      <textarea id="address" name="address" required></textarea>

      <label for="note">Keterangan Tambahan:</label>
      <textarea id="note" name="note"></textarea>

      <label for="service">Layanan yang Diorder:</label>
      <input type="text" id="service" name="service" readonly>

      <button type="submit" class="submit-btn">Kirim & Lanjut ke WhatsApp</button>
    </form>
  </div>
</div>
<!-- Order Form Popup -->



<!-- Pop Up Loading after submit order -->
<div id="loadingPopup" class="popup-loading">
  <p>⏳ Memproses pesanan kamu...</p>
</div>

<!-- Notif Pop UP -->
<div id="notifPopup" class="notif-popup">
  <p>✅ Terima kasih telah melakukan pemesanan.<br>CleanFix akan segera menghubungimu lewat WhatsApp terkait pemesanan lebih lanjut.</p>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!--   *****   JQuery Link   *****   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!--   *****   Owl Carousel js Link  *****  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- custom js file link  -->
<script src="script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});


$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
      e.preventDefault(); // biar nggak reload

      var formData = $(this).serialize(); // ambil semua data dari form

      // Tampilkan loading popup dulu
    Swal.fire({
      title: 'Mengirim...',
      text: 'Tunggu sebentar ya...',
      allowOutsideClick: false,
      didOpen: () => {
        Swal.showLoading();
      }
    });

      $.ajax({
        type: 'POST',
        url: 'kirim.php',
        data: formData,
        success: function (response) {
          Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Pesan kamu berhasil dikirim.',
            confirmButtonColor: '#3085d6'
          });

          $('#contactForm')[0].reset(); // reset form setelah kirim
        },
        error: function () {
          Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: 'Pesan gagal dikirim. Coba lagi ya!',
            confirmButtonColor: '#d33'
          });
        }
      });
    });
  });



  // FORM POPUP ORDER
function openForm(serviceName) {
  document.getElementById("service").value = serviceName;
  document.getElementById("orderForm").style.display = "block";
  document.getElementById("popupOverlay").style.display = "block";
}

// TUTUP FORM
document.getElementById("closeForm").addEventListener("click", function () {
  document.getElementById("orderForm").style.display = "none";
  document.getElementById("popupOverlay").style.display = "none";
});

document.getElementById("popupOverlay").addEventListener("click", function () {
  document.getElementById("orderForm").style.display = "none";
  this.style.display = "none";
});

// HANDLE SUBMIT FORM
document.getElementById("orderServiceForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const nama = document.getElementById("name").value;
  const phone = document.getElementById("phone").value.trim();
  const tanggal = document.getElementById("date").value;
  const jam = document.getElementById("time").value;
  const alamat = document.getElementById("address").value;
  const catatan = document.getElementById("note").value;
  const layanan = document.getElementById("service").value;

    const pesan = `Halo, saya ingin memesan layanan *${layanan}*. 
    Nama: ${nama}
    Tanggal & Jam Request: ${tanggal} - ${jam}
    Alamat: ${alamat}
    Catatan: ${catatan}`;
  console.log(pesan); // Debug only

  // Tampilkan loading
  const loading = document.getElementById("loadingPopup");
  const notif = document.getElementById("notifPopup");
  loading.style.display = "block";

  // Setelah 2 detik, tampilkan notifikasi sukses
  setTimeout(() => {
    loading.style.display = "none";
    notif.style.display = "block";

    // Setelah 3 detik, sembunyikan notif & reset
    setTimeout(() => {
      notif.style.display = "none";
      document.getElementById("orderForm").style.display = "none";
      document.getElementById("popupOverlay").style.display = "none";
      document.getElementById("orderServiceForm").reset();
    }, 3860);
  }, 2000);
});

</script>
</body>
</html>