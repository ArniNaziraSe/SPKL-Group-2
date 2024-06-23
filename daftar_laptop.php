<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_laptop"])){
		$nama      		= $_POST["nama"];
		$harga     		= $_POST["harga"];
		$ram       		= $_POST["ram"];
		$penyimpanan    = $_POST["penyimpanan"];
		$processor 		= $_POST["processor"];
		$uk_layar    	= $_POST["uk_layar"];
		$res_layar     	= $_POST["res_layar"];
		$gpu     		= $_POST["gpu"];
		$refresh_rate   = $_POST["refresh_rate"];
		$panel_layar   	= $_POST["panel_layar"];
		$berat 			= $_POST["berat"];
		
		$harga_angka = $ram_angka = $penyimpanan_angka = $processor_angka = $uk_layar_angka = $res_layar_angka = $gpu_angka = $refresh_rate_angka = $panel_layar_angka = $berat_angka = 0;

		if($harga < 6000000){
			$harga_angka = 4;
		} 
		elseif($harga >= 6000000 && $harga <= 10000000){
			$harga_angka = 5;
		}
		elseif($harga > 10000001 && $harga <= 15000000){
			$harga_angka = 2;
		}
		elseif($harga > 15000001){
			$harga_angka = 1;
		}
		


		if($ram == 4){
			$ram_angka = 3;
		}
		elseif($ram == 8){
			$ram_angka = 4;
		}
		elseif($ram > 16){
			$ram_angka = 5;
		}


		if($penyimpanan == 128){
			$penyimpanan_angka = 1;
		}
		elseif($penyimpanan == 256){
			$penyimpanan_angka = 2;
		}
		elseif($penyimpanan == 512){
			$penyimpanan_angka = 3;
		}
		elseif($penyimpanan >= 1000){
			$penyimpanan_angka = 4;
		}
		


		if($processor == "pentium_celeron"){
			$processor_angka = 1;
		}
		elseif($processor == "intel_i3_ryzen_3"){
			$processor_angka = 3;
		}
		elseif($processor == "intel_i5_ryzen_5"){
			$processor_angka = 4;
		}
		elseif($processor == "intel_i7_ryzen_7"){
			$processor_angka = 5;
		}


		if($uk_layar == 13.3){
			$uk_layar_angka = 3;
		}
		elseif($uk_layar == 14){
			$uk_layar_angka = 5;
		}
		elseif($uk_layar == 15.6){
			$uk_layar_angka = 4;
		}


		if($res_layar == "fhd"){
			$res_layar_angka = 5;
		}
		elseif($res_layar == "wuxga"){
			$res_layar_angka = 4;
		}


		if($gpu == "nvidia"){
			$gpu_angka = 5;
		}
		elseif($gpu == "intel_iris_radeon_vega"){
			$gpu_angka = 4;
		}
		elseif($gpu_angka == "amd_radeon_intel_uhd"){
			$gpu_angka = 3;
		}


		if($refresh_rate >= 60 && $refresh_rate <= 114){
			$refresh_rate_angka = 5;
		}
		elseif($refresh_rate <= 60){
			$refresh_rate_angka = 3;
		}
		elseif($refresh_rate > 145){
			$refresh_rate_angka = 5;
		}


		if($panel_layar == "ips"){
			$panel_layar_angka = 2;
		}
		elseif($panel_layar == "oled"){
			$panel_layar_angka = 3;
		}


		if($berat >= 1 && $berat <= 2){
			$berat_angka = 5;
		}
		elseif($berat < 1){
			$berat_angka = 4;
		}
		elseif($berat > 2){
			$berat_angka = 3;
		}



		// $sql = "INSERT INTO `data_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_hp`, `harga_angka`, `ram_angka`, `memori_angka`, `processor_angka`, `kamera_angka`) 
		// 		VALUES (NULL, :nama_hp, :harga_hp, :ram_hp, :memori_hp, :processor_hp, :kamera_hp, :harga_angka, :ram_angka, :memori_angka, :processor_angka, :kamera_angka)";

		$sql = "INSERT INTO `data_laptop`(`id_laptop`, `nama_laptop`, `harga_laptop`, `ram_laptop`, `penyimpanan_laptop`, `processor_laptop`, `uk_layar_laptop`, `res_layar_laptop`, `gpu_laptop`, `refresh_rate_laptop`, `panel_layar_laptop`, `berat_laptop`, `harga_angka`, `ram_angka`, `penyimpanan_angka`, `processor_angka`, `uk_layar_angka`, `res_layar_angka`, `gpu_angka`, `refresh_rate_angka`, `panel_layar_angka`, `berat_angka`)
				VALUES (NULL, :nama_laptop, :harga_laptop, :ram_laptop, :penyimpanan_laptop, :processor_laptop, :uk_layar_laptop, :res_layar_laptop, :gpu_laptop, :refresh_rate_laptop, :panel_layar_laptop, :berat_laptop, :harga_angka, :ram_angka, :penyimpanan_angka, :processor_angka, :uk_layar_angka, :res_layar_angka, :gpu_angka, :refresh_rate_angka, :panel_layar_angka, :berat_angka )";
		
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_laptop', $nama);
		$stmt->bindValue(':harga_laptop', $harga);
		$stmt->bindValue(':ram_laptop', $ram);
		$stmt->bindValue(':penyimpanan_laptop', $penyimpanan);
		$stmt->bindValue(':processor_laptop', $processor);
		$stmt->bindValue(':uk_layar_laptop', $uk_layar);
		$stmt->bindValue(':res_layar_laptop', $res_layar);
		$stmt->bindValue(':gpu_laptop', $gpu);
		$stmt->bindValue(':refresh_rate_laptop', $refresh_rate);
		$stmt->bindValue(':panel_layar_laptop', $panel_layar);
		$stmt->bindValue(':berat_laptop', $berat);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':ram_angka', $ram_angka);
		$stmt->bindValue(':penyimpanan_angka', $penyimpanan_angka);
		$stmt->bindValue(':processor_angka', $processor_angka);
		$stmt->bindValue(':uk_layar_angka', $uk_layar_angka);
		$stmt->bindValue(':res_layar_angka', $res_layar_angka);
		$stmt->bindValue(':gpu_angka', $gpu_angka);
		$stmt->bindValue(':refresh_rate_angka', $refresh_rate_angka);
		$stmt->bindValue(':panel_layar_angka', $panel_layar_angka);
		$stmt->bindValue(':berat_angka', $berat_angka);

		$stmt->execute();
	}

	if(isset($_POST["hapus_laptop"])){
		$id_hapus_laptop = $_POST['id_hapus_laptop'];
		$sql_delete = "DELETE FROM `data_laptop` WHERE `id_laptop` = :id_hapus_laptop";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_laptop', $id_hapus_laptop);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_laptop AUTO_INCREMENT = 1");
	}
?>

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

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a class="active" href="daftar_laptop.php">DAFTAR LAPTOP ASUS</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 20px 0px 10px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content" style="width:100%">
									<center><h4 style="margin-bottom: 0px; margin-top: 0px;">Daftar Laptop Asus</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:80%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama Laptop</center></th>
													<th><center>Harga Laptop</center></th>
													<th><center>RAM Laptop</center></th>
													<th><center>Penyimpanan Laptop</center></th>
													<th><center>Processor Laptop</center></th>
													<th><center>Ukuran Layar Laptop</center></th>
													<th><center>Resolusi Layar Laptop</center></th>
													<th><center>GPU Laptop</center></th>
													<th><center>Refresh Rate Layar Laptop</center></th>
													<th><center>Panel Layar Laptop</center></th>
													<th><center>Berat Laptop</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_laptop'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_laptop'] ?></center></td>
													<td><center><?php echo $data['ram_laptop']," GB" ?></center></td>
													<td><center><?php echo $data['penyimpanan_laptop']," GB" ?></center></td>
													<td><center><?php echo $data['processor_laptop'] ?></center></td>
													<td><center><?php echo $data['uk_layar_laptop']," Inch" ?></center></td>
													<td><center><?php echo $data['res_layar_laptop'] ?></center></td>
													<td><center><?php echo $data['gpu_laptop'] ?></center></td>
													<td><center><?php echo $data['refresh_rate_laptop'] ?></center></td>
													<td><center><?php echo $data['panel_layar_laptop'] ?></center></td>
													<td><center><?php echo $data['berat_laptop']," Kg" ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_laptop" value="<?php echo $data['id_laptop'] ?>">
																<button type="submit" name="hapus_laptop" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar laptop End -->

	<!-- Daftar laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 1px 10% 24px 10%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Laptop Asus</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Cost)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
													<th><center>C6 (Benefit)</center></th>
													<th><center>C7 (Benefit)</center></th>
													<th><center>C8 (Benefit)</center></th>
													<th><center>C9 (Benefit)</center></th>
													<th><center>C10 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['ram_angka'] ?></center></td>
													<td><center><?php echo $data['penyimpanan_angka'] ?></center></td>
													<td><center><?php echo $data['processor_angka'] ?></center></td>
													<td><center><?php echo $data['uk_layar_angka'] ?></center></td>
													<td><center><?php echo $data['res_layar_angka'] ?></center></td>
													<td><center><?php echo $data['gpu_angka'] ?></center></td>
													<td><center><?php echo $data['refresh_rate_angka'] ?></center></td>
													<td><center><?php echo $data['panel_layar_angka'] ?></center></td>
													<td><center><?php echo $data['berat_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 60%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Laptop</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="ram">
												<!-- <option value = "" disabled selected>Kriteria RAM</option>  -->
												<option value = "3">4 Gb</option>
                                                <option value = "4">8 Gb</option>
                                                <option value = "5">16 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Penyimpanan</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="penyimpanan">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
												<option value = "1">SSD 128 Gb</option>
                                                <option value = "2">SSD 256 Gb</option>
                                                <option value = "4">SSD 512 Gb</option>
                                                <option value = "5">> SSD 1 Tb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Processor</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="processor">
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
											<select style="display: block; margin-bottom: 4px;" required name="ukuran-layar">
												<!-- <option value = "" disabled selected>Kriteria Ukuran layar</option> -->
												<option value = "3">13.3 inch</option>
                                                <option value = "5">14 inch</option>
                                                <option value = "4">15.6 inch</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
                                            <b>Resolusi layar</b>
                                        </div>
                                        <div class="col s6">
                                        	<select style="display: block; margin-bottom: 4px;" required name="resolusi-layar">
                                                <!-- <option value = "" disabled selected>Kriteria Resolusi Layar</option> -->
                                                <option value = "4">Wuxga</option>
                                                <option value = "5">FHD</option>
                                            </select>
                                        </div>

                                        <div class="col s6" style="margin-top: 10px;">
                                            <b>GPU</b>
                                        </div>
                                        <div class="col s6">
                                            <select style="display: block; margin-bottom: 4px;" required name="gpu">
                                            	<!-- <option value = "" disabled selected>Kriteria GPU</option> -->
                                                <option value = "3">Intel UHD Graphics / AMD Radeon™ Graphics </option>
                                                <option value = "4">Intel Iris Xe Graphics / NVIDIA® GeForce® MX330 / AMD Radeon™ Vega 7 Graphics</option>
                                                <option value = "5">NVIDIA® GeForce RTX™ 2050/3050</option>
                                            </select>
                                        </div>

                                        <div class="col s6" style="margin-top: 10px;">
                                            <b>Refresh Rate</b>
                                        </div>
                                        <div class="col s6">
                                            <select style="display: block; margin-bottom: 4px;" required name="refresh-rate">
                                            	<!-- <option value = "" disabled selected>Kriteria Refresh Rate</option> -->
                                                <option value = "3">< 60 Hz</option>
                                                <option value = "5">60 - 144 Hz</option>
                                                <option value = "4">> 144 Hz</option>
                                            </select>
                                        </div>

                                        <div class="col s6" style="margin-top: 10px;">
                                            <b>Panel Layar</b>
                                        </div>
                                        <div class="col s6">
                                            <select style="display: block; margin-bottom: 4px;" required name="panel-layar">
                                        		<!-- <option value = "" disabled selected>Kriteria Panel Layar</option> -->
                                            	<option value = "2">IPS</option>
                                            	<option value = "3">OLED</option>
                                        	</select>
                                        </div>

                                        <div class="col s6" style="margin-top: 10px;">
                                        	<b>Berat</b>
                                        </div>
                                        <div class="col s6">
                                        	<select style="display: block; margin-bottom: 4px;" required name="berat-laptop">
                                            	<!-- <option value = "" disabled selected>Kriteria Berat</option> -->
                                            	<option value = "3">> 3 Kg</option>
                                            	<option value = "5">2 - 3 Kg</option>
                                            	<option value = "4">< 2 Kg</option>
                                            </select>
                                        </div>

									</div>  
								</div> 
								<center><button name="tambah_laptop" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

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
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>