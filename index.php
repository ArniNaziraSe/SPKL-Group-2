<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Laptop Asus</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="KembalikeLaptop.com adalah aplikasi Sistem Pendukung Keputusan pemilihan Laptop Asus berbasis Metode Topsis">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a class="active" href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a href="daftar_laptop.php">DAFTAR LAPTOP ASUS</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>			
      </div>
		</nav>
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN LAPTOP ASUS </h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 26px">MENGGUNAKAN METODE TOPSIS</h5>
					</div>
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-white btn-large" style="margin-top: 40px">Pilih Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/dashboard.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

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
	
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
      <div class="container">
        <p align="center" style="color: #999">&copy; SPK Pemilihan Laptop Asus 2024</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>