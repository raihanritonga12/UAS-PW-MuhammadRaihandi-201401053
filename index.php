<?php
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['username'])){
        header ("location:login.php");
    }
    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <header>
    <div class="jumbotron">
      <h1>NGODING KUY</h1>
      <p><b>Website penyedia platfom belajar coding online dimana saja.</b></p>
    </div>
  </header>
  <nav>
    <ul>
    <li><a href="index.php"><b>HOME</b></a></li>
      <li><a href="pagehtml.php"><b>HTML</b></a></li>
      <li><a href="pagecss.php"><b>CSS</b></a></li>
      <li><a href="pagejs.php"><b>JavaScript</b></a></li>
	  <li><a href="pagebs.php"><b>BootStrap</b></a></li>
      <li><a href="aksi_logout.php"><b>Logout</b></a></li>

    <ul>
  </nav>
  <main>
    <div class="flex-container">
      <div class="box first">
        <article class="button">
          <a href="pagehtml.html">
            <h2>HTML</h2>
            <img src="assets/img/html.png" class="featured-image">
            <p>Apa Itu HTML?</p>
          </a>
        </article>
      </div>
      <div class="box second">
        <article class="button">
          <a href="pagecss.html">
            <h2>CSS</h2>
            <img src="assets/img/css.png" class="featured-image">
            <p>Apa Itu CSS?</p>
          </a>
        </article>
      </div>
      <div class="box third">
        <article class="button">
          <a href="pagejs.html">
            <h2>JavaScript</h2>
            <img src="assets/img/js.png" class="featured-image">
            <p>Apa Itu JavaScript?</p>
          </a>
        </article>
      </div>
	  <div class="box fourth">
        <article class="button">
          <a href="pagebs.html">
            <h2>BootStrap</h2>
            <img src="assets/img/bs.png" class="featured-image">
            <p>Apa Itu BootStrap?</p>
          </a>
        </article>
      </div>
    </div>
    <br>
    <aside>
      <div class="card-profile">
        <article>
          <h2 style="text-align:center;">PEMBUAT WEB</h2>
          <br>
          <center><img class="featured-image-index" src="assets/img/profile.png"></center>
          <br>
          <center>
            <figcaption><b>Muhammad Raihandi Jamal Ritonga</b></figcaption>
          </center>
          <center>
            <p>Halo! nama saya Muhammad Raihandi Jamal Ritonga. Saya adalah siswa lulusan dari SMK Tritech Informatika jurusan Teknik Komputer & Jaringan.
              Saya berumur 18 tahun, bertempat tinggal di kota Medan. Saya adalah seorang yang ingin terus belajar mengenai dunia web developer.
            </p>
          </center>
        </article>
        <br>
        <article>
          <h3 style="text-align:center;">INFORMASI LEBIH LANJUT</h3>
          <center>
            <ul>
			  <li><a href="#"><img class="featured-image-contact" src="assets/img/linkedin.svg"></a></li>
              <li><a href="https://www.facebook.com/raihan.richtongs"><img class="featured-image-contact" src="assets/img/fb.svg"></a></li>
              <li><a href="https://www.instagram.com/raihanritonga12/"><img class="featured-image-contact" src="assets/img/ig.svg"></a></li>
              <li><a href="#"><img class="featured-image-contact" src="assets/img/wa.svg"></a></li>
            </ul>
          </center>	
        </article>
      </div>
    </aside>
  </main>
  <footer>
    <div>
      <article>
        <p>Rehan Copyright &copy; 2020, Ngodingkuy Indonesia</p>
      </article>
    </div>
  </footer>
</body>

</html>