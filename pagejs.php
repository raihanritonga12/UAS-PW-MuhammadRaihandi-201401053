<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>	
  <link rel="stylesheet" href="assets/style.css?v=21">
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
    </ul>
  </nav>
  <main>
    <div id="content">
      <article class="card">
        <h2>JavaScipt</h2>
        <img src="assets/img/js.png" class="featured-image">
        <h3>Apa itu JavaScript?</h3>
        <p>Tahukah kamu bahwa JavaScript adalah bahasa pemrograman yang digunakan dalam pengembangan
		  website agar lebih dinamis dan interaktif. Kalau sebelumnya kamu hanya mengenal HTML dan CSS,
		  nah sekarang kamu jadi tahu bahwa JavaScript dapat meningkatkan fungsionalitas pada halaman web.
		  Bahkan dengan JavaScript ini kamu bisa membuat aplikasi, tools, atau bahkan game pada web.
		</p>
        <p>Bicara teknis, JavaScript atau kita singkat menjadi JS merupakan bahasa pemrograman jenis 
		  interpreter, sehingga kamu tidak memerlukan compiler untuk menjalankannya. JavaScript memiliki
		  fitur-fitur seperti berorientasi objek, client-side, high-level programming, dan loosely typed.
        </p>
      </article>
      <article class="card">
        <h3>Fungsi JavaScipt</h3>
        <p>Fungsi JavaScript, atau yang sering disingkat JS, adalah menjadikan 
		  website lebih interaktif. Scriptnya dijalankan di browser user alih-alih
		  server, dan biasanya masuk ke library pihak ketiga untuk menyediakan
		  fungsionalitas tingkat lanjut tanpa mengharuskan developer melakukan coding dari awal.
        </p>
      </article>
      <article class="card">
        <h3>Program Calculator JavaScipt</h3>
        <table id="Kalkulator" align="center">
		<tr>	
			<td colspan="5">
				<input type="text" disabled id="output" value="0">
			</td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('1')">1</button></td>
			<td><button class="btn" onclick="btn('2')">2</button></td>
			<td><button class="btn" onclick="btn('3')">3</button></td>
			<td><button class="btn opr" onclick="btn_opr(1)">*</button></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('4')">4</button></td>
			<td><button class="btn" onclick="btn('5')">5</button></td>
			<td><button class="btn" onclick="btn('6')">6</button></td>
			<td><button class="btn opr" onclick="btn_opr(2)">/</button></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('7')">7</button></td>
			<td><button class="btn" onclick="btn('8')">8</button></td>
			<td><button class="btn" onclick="btn('9')">9</button></td>
			<td><button class="btn opr" onclick="btn_opr(3)">-</button></td>
		</tr>
		<tr>
			<td><button class="btn" onclick="btn('0')">0</button></td>
			<td><button class="btn" onclick="koma()">.</button></td>
			<td><button class="btn clr" onclick="clr()">C</button></td>
			<td><button class="btn opr" onclick="btn_opr(4)">+</button></td>
		</tr>
		<tr>
			<td colspan="5"><button class="btn hsl" style="width: 100%" onclick="hitung()">=</button></td>
		</tr>
	</table>
	<script type="text/javascript" src="Kalkulator.js"></script>
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