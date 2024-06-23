<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Laptop Asus</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
			<div class="nav-wrapper">
				<ul class="left" style="margin-left: -52px;">
					<li><a href="index.php">HOME</a></li>
					<li><a class="active" href="rekomendasi.php">REKOMENDASI</a></li>
                    <li><a href="daftar_laptop.php">DAFTAR LAPTOP ASUS</a></li>
                    <li><a href="#about">TENTANG</a></li>
				</ul>
			</div>		
        </div>
		</nav>
		</div>
		<!-- Body Start -->

        <!-- Daftar Laptop Start -->
<div style="background-color: #efefef">
    <div class="container">
        <div class="section-card" style="padding: 20px 0px 20px 0px">
            <ul>
                <li>
                    <div class="row">
                        <div class="col s3">
                        </div>
                        <div class="col s6">      
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <center><h4>Masukan Bobot</h4></center>
                                        <br>
                                        <form class="col s12" method="POST" action="hasil.php">
                                            <div class="row">
                                                <div class="col s6" style="margin-top: 10px;">
                                                    <b>Kriteria Harga</b>
                                                </div>
                                                <div class="col s6">
                                                    <select required name="harga">
                                                        <option value="" disabled selected style="color: #eceff1;"><i>Kriteria Harga</i></option>
                                                        <option value="2">&lt; 6.000.000</option>
                                                        <option value="5">6.000.000 - 10.000.000</option>
                                                        <option value="3">10.000.000 - 15.000.000</option>
                                                        <option value="4">&gt; 15.000.000</option>
                                                    </select>
                                                </div>
                                                <div class="col s6" style="margin-top: 10px;">
                                                            <b>RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ram">
                                                                    <option value = "" disabled selected>Kriteria RAM</option> 
                                                                    <option value = "3">4 Gb</option>
                                                                    <option value = "4">8 Gb</option>
                                                                    <option value = "5">16 Gb</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Penyimpanan</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="penyimpanan">
                                                                    <option value = "" disabled selected>Kriteria Penyimpanan</option>
                                                                    <option value = "2">SSD 128 Gb</option>
                                                                    <option value = "3">SSD 256 Gb</option>
                                                                    <option value = "4">SSD 512 Gb</option>
                                                                    <option value = "5">> SSD 1 Tb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Processor</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="processor">
                                                                    <option value = "" disabled selected>Kriteria Processor</option>
                                                                    <option value = "1">Pentium Silver</option>
                                                                    <option value = "1">INTEL Celeron</option>
                                                                    <option value = "3">INTEL I3 / RYZEN 3</option>
                                                                    <option value = "4">INTEL I5 / RYZEN 5</option>
                                                                    <option value = "5">INTEL I7 / RYZEN 7</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Ukuran layar</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ukuran-layar">
                                                                    <option value = "" disabled selected>Kriteria Ukuran Layar</option>
                                                                    <option value = "3">13.3</option>
                                                                    <option value = "5">14</option>
                                                                    <option value = "4">15.6</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Resolusi layar</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="resolusi-layar">
                                                                    <option value = "" disabled selected>Kriteria Resolusi Layar</option>
                                                                    <option value = "4">Wuxga</option>
                                                                    <option value = "5">FHD</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>GPU</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="gpu">
                                                                    <option value = "" disabled selected>Kriteria GPU</option>
                                                                    <option value = "3">Intel UHD Graphics / AMD Radeon™ Graphics </option>
                                                                    <option value = "4">AMD Radeon™ Vega 7 Graphics / NVIDIA® GeForce® MX330 / Intel Iris Xe Graphics</option>
                                                                    <option value = "5">NVIDIA® GeForce RTX™ 2050/3050</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Refresh Rate</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="refresh-rate">
                                                                    <option value = "" disabled selected>Kriteria Refresh Rate</option>
                                                                    <option value = "4">60 Hz</option>
                                                                    <option value = "5">144 Hz</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Panel Layar</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="panel-layar">
                                                                    <option value = "" disabled selected>Kriteria Panel Layar</option>
                                                                    <option value = "2">IPS</option>
                                                                    <option value = "3">OLED</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Berat</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="berat-laptop">
                                                                    <option value = "" disabled selected>Kriteria Berat</option>
                                                                    <option value = "3">> 3 Kg</option>
                                                                    <option value = "5">2 - 3 Kg</option>
                                                                    <option value = "4">< 2 Kg</option>
                                                                </select>
                                                            </div>
                                                <!-- Sisipkan bagian lainnya seperti RAM, Penyimpanan, Processor, dan sebagainya dengan struktur yang serupa -->

                                                <!-- Tombol Hitung -->
                                                <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom: -46px;">Hitung</button></center>	
                                        </form>       
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        <div class="col s3">
                        </div>
                    </div>
                </li>
            </ul>	     
        </div>
    </div>
</div>
<!-- Rekomendasi Laptop End -->


    <!-- Modal Start -->
	<div id="about" class="modal">
        <div class="modal-content">
          <h4>Tentang</h4>
          <p>Sistem Pendukung Keputusan Pemilihan Laptop Asus ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Ujian Akhir Semester Genap Mata Kuliah Sistem Pendukung Keputusan Lanjut Prodi Teknik Informatika Universitas Islam Balitar. <br>
				<br>
				1. Arni Nazira<br>
				2. Balya Ahmad Wafa<br>
				3. Eza Rafli Vernica Saputra<br>
			</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; SPK Pemilihan Laptop Asus 2024.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>