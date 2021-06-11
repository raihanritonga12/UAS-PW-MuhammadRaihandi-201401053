<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
</head>

<<body>
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
    </ul>
  </nav>
  <main>
    <div id="content">
      <article class="card">
        <h2>BootStrap</h2>
        <img src="assets/img/bs.png" class="featured-image">
        <h3>Apa itu BootStrap?</h3>
        <p>Bootstrap adalah framework open-source khusus front end yang awalnya dibuat oleh Mark Otto
		  dan Jacob Thornton untuk mempermudah dan mempercepat pengembangan web di front end.Bootstrap 
		  memiliki semua jenis HTML dan template desain berbasis CSS untuk berbagai fungsi dan komponen,
		  seperti navigasi, sistem grid, carousel gambar, dan tombol (button).</p>
      </article>
      <article class="card">
        <h3>Fungsi BootStrap</h3>
        <p>Framework ini memang menghemat waktu developer karena tidak perlu mengelola template berkali-kali.
		  Namun, fungsi utama dari Bootstrap adalah untuk membuat situs yang responsif. Interface website akan
		  bekerja secara optimal di semua ukuran layar baik di layar smartphone maupun layar komputer/laptop.
        </p>
      </article>
      <article class="card">
        <h3>Contoh Program Tabel dengan BootStrap</h3>
        <div class="container">
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NIM</th>
						<th>KOM</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Raihandi</td>
						<td>201401053</td>
						<td>B</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Aldo</td>
						<td>201401116</td>
						<td>C</td>
					</tr>
				</tbody>
			</table>
		</div>
      </article>
    </div>
    <aside class="aside-profile">
      <div class="card">
        <article class="profile">
          <header>
            <h2>PEMBUAT WEB</h2>
            <p><b>Muhammad Raihandi Jamal Ritonga</b></p>
            <figure>
              <img class="featured-image-profile" src="assets/img/profile.png">
              <!-- <figcaption>Lambang</figcaption> -->
            </figure>
          </header>
          <section>
            <h3>Tentang Saya</h3>
            <p>Halo! nama saya Muhammad Raihandi Jamal Ritonga. Saya adalah siswa lulusan dari SMK Tritech Informatika jurusan Teknik Komputer & Jaringan.
              Saya berumur 18 tahun, bertempat tinggal di kota Medan.</p>
          </section>
        </article>
      </div>
      <div class="card">
        <article class="profile">
          <section>
            <h3>Informasi Lainnya</h3>
            <table>
              <tr>
                <th>Nama Lengkap</th>
                <td>Muhammad Raihandi Jamal Ritonga</td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td>12 September 2002</td>
              </tr>
              <tr>
                <th>Umur</th>
                <td>18 Tahun</td>
              </tr>
              <tr>
                <th>Tempat Tinggal</th>
                <td>Medan</td>
              </tr>
              <tr>
                <th>Agama</th>
                <td>Islam</td>
              </tr>
              <tr>
                <th>Lulusan</th>
                <td>SMK Tritech Informatika</td>
              </tr>
            </table>
          </section>
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