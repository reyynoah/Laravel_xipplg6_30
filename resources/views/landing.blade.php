<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>RAKETIN - Sewa Lapangan Badminton</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>
  <script src="/js/script.js"></script>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">RAKETIN</div>
    <nav>
      <a href="#home">Home</a>
      <a href="#lapangan">Lapangan</a>
      <a href="#testimoni">Testimoni</a>
       </nav>
    <button id="darkModeToggle" class="btn btn-outline">🌙</button>
    <button class="btn btn-primary" onclick="scrollToForm()">Booking Sekarang</button>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-content">
      <button class="btn btn-primary btn-lg" onclick="scrollToForm()">
        Cek Jadwal & Booking →
      </button>
    </div>
  </section>

  <!-- Daftar Lapangan -->
 <section id="lapangan" class="section">
    <div class="container">
      <h2 class="section-title">Pilih Lapangan Favoritmu</h2>
      <div class="court-grid">
        <div class="court-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ64nAdACOBU8EhwAomAvqrSfjM1xPJMZ7Z-Q&s" alt="Lapangan A" />
          <h3>Lapangan A</h3>
          <p class="price">Rp 75.000 / jam</p>
          <p class="status">Tersedia</p>
        </div>  
        <div class="court-card">
          <img src="https://centroflor.id/wp-content/uploads/2023/10/Supreme-Arena-Badminton.jpg" alt="Lapangan B" />
          <h3>Lapangan B</h3>
          <p class="price">Rp 85.000 / jam</p>
          <p class="status">Tersedia</p>
        </div>
        <div class="court-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS55WnFC4NRtQMBrB2e2-KQKWiewFmK07GiSQ&s" alt="Lapangan Premium" />
          <h3>Lapangan Premium</h3>
          <p class="price">Rp 100.000 / jam</p>
          <p class="status">Hampir Penuh</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Booking -->
  <section id="booking" class="section bg-alt">
    <div class="container">
      <h2 class="section-title">Pesan Lapangan Sekarang</h2>
      <form id="bookingForm" class="booking-form">
        <input type="text" id="name" placeholder="Nama Lengkap" required />
        <input type="email" id="email" placeholder="Email" required />
        <select id="court" required>
          <option value="" disabled selected>Pilih Lapangan</option>
          <option value="Lapangan A">Lapangan A - Rp 75.000/jam</option>
          <option value="Lapangan B">Lapangan B - Rp 85.000/jam</option>
          <option value="Lapangan Premium">Lapangan Premium - Rp 100.000/jam</option>
        </select>
        <input type="date" id="date" required />
        <div class="time-group">
          <input type="time" id="timeStart" placeholder="Jam Mulai" required />
          <input type="time" id="timeEnd" placeholder="Jam Selesai" required />
        </div>
        <textarea id="notes" placeholder="Catatan (opsional)"></textarea>
        <button type="submit" class="btn btn-primary btn-block">Konfirmasi Booking</button>
      </form>
    </div>
  </section>

<!-- Testimoni -->
<section id="testimoni" class="section">
  <div class="container">
    <h2 class="section-title">Apa Kata Mereka?</h2>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Booking gampang, lapangan bersih, rekomendasi banget buat main bareng teman!"</p>
        <strong>– Andi, Jakarta</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Sudah langganan 3 bulan. Pelayanan ramah, jadwal fleksibel."</p>
        <strong>– Siti, Bandung</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Pertama kali coba online booking, ternyata lancar banget. Mantap betul!"</p>
        <strong>– Rudi, Surabaya</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Harga terjangkau, fasilitas oke, parkiran luas. Cocok banget untuk komunitas badminton."</p>
        <strong>– Lina, Yogyakarta</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Admin fast respon, lapangan selalu ready. Booking jadi makin mudah!"</p>
        <strong>– Budi, Medan</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Lighting lapangan terang, suasana nyaman, recommended banget."</p>
        <strong>– Fajar, Makassar</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Proses booking cepat dan tanpa ribet. Tinggal datang dan main."</p>
        <strong>– Dewi, Malang</strong>
      </div>
      <div class="testi-card">
        <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
        <p>"Tempat strategis, dekat pusat kota, fasilitasnya lengkap."</p>
        <strong>– Adi, Semarang</strong>
      </div>
    </div>
  </div>
</section>



  <!-- Footer -->
  <footer class="footer">
  <div class="container">
    <div class="footer-content">
      <!-- Brand -->
      <div class="footer-brand">
        <h3>RAKETIN</h3>
        <p>Sewa Lapangan Badminton Cepat & Praktis</p>
        <p class="footer-slogan">🏸 Ayo, wujudkan pertandingan seru bareng teman atau keluarga! Booking sekarang sebelum kehabisan jadwal!</p>
      </div>

      <!-- Contact -->
      <div class="footer-contact">
        <h4>Hubungi Kami</h4>
        <p>📞 +62 821-2084-3622 (Admin)</p>
        <p>✉️ hello@raketin.com</p>
        <p>📍 Jl. Badminton No. 1, Jakarta</p>
      </div>

      <!-- Quick Links -->
      <div class="footer-links">
        <h4>Menu Cepat</h4>
        <a href="#home">Home</a>
        <a href="#lapangan">Lapangan</a>
        <a href="#testimoni">Testimoni</a>
        <a href="#booking">Booking</a>
      </div>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
      &copy; 2025 RAKETIN. All rights reserved.
    </div>
  </div>
</footer>

  
  <!-- EmailJS SDK -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script src="script.js"></script>
</body>
</html>