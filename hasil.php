<?php 
session_start();
include('koneksi.php');

// Bobot
$W1 = $_POST['harga'];
$W2 = $_POST['ram'];
$W3 = $_POST['penyimpanan'];
$W4 = $_POST['processor'];
$W5 = $_POST['ukuran-layar'];
$W6 = $_POST['resolusi-layar'];
$W7 = $_POST['gpu'];
$W8 = $_POST['refresh-rate'];
$W9 = $_POST['panel-layar'];
$W10 = $_POST['berat-laptop'];

// Pembagi Normalisasi
function pembagiNM($matrik) {
    $pembagi = [];
    for ($i = 0; $i < 10; $i++) {
        $pangkatdua = 0;
        for ($j = 0; $j < sizeof($matrik); $j++) {
            $pangkatdua += pow($matrik[$j][$i], 2);
        }
        $pembagi[$i] = sqrt($pangkatdua);
    }
    return $pembagi;
}

// Normalisasi
function Transpose($squareArray) {
    if ($squareArray == null) { return null; }
    $rotatedArray = [];
    $r = 0;

    foreach($squareArray as $row) {
        $c = 0;
        if (is_array($row)) {
            foreach($row as $cell) { 
                $rotatedArray[$c][$r] = $cell;
                ++$c;
            }
        } else {
            $rotatedArray[$c][$r] = $row;
        }
        ++$r;
    }
    return $rotatedArray;
}

function JarakIplus($aplus, $bob) {
    $dplus = [];
    for ($i = 0; $i < sizeof($bob); $i++) {
        $dplus[$i] = 0;
        for ($j = 0; $j < sizeof($aplus); $j++) {
            $dplus[$i] += pow(($aplus[$j] - $bob[$i][$j]), 2);
        }
        $dplus[$i] = round(sqrt($dplus[$i]), 4);
    }
    return $dplus;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pendukung Keputusan Pemilihan Laptop Asus</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection"/>
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
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
    <div style="background-color: #efefef">
        <div class="container">
            <div class="section-card" style="padding: 20px 0px">
                <center>
                    <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">HASIL REKOMENDASI LAPTOP ASUS</h4>
                </center>
                <ul>
                    <li>
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <h5 style="margin-bottom: 16px; margin-top: -6px;">Matrik Laptop</h5>
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
                                            $query = mysqli_query($selectdb, "SELECT * FROM data_laptop");
                                            $no = 1;
                                            while ($data_laptop = mysqli_fetch_array($query)) {
                                                $Matrik[$no-1] = array(
                                                    $data_laptop['harga_angka'],
                                                    $data_laptop['ram_angka'],
                                                    $data_laptop['penyimpanan_angka'],
                                                    $data_laptop['processor_angka'],
                                                    $data_laptop['uk_layar_angka'],
                                                    $data_laptop['res_layar_angka'],
                                                    $data_laptop['gpu_angka'],
                                                    $data_laptop['refresh_rate_angka'],
                                                    $data_laptop['panel_layar_angka'],
                                                    $data_laptop['berat_angka']
                                                );
                                                ?>
                                                <tr>
                                                    <td><center><?php echo "A", $no ?></center></td>
                                                    <td><center><?php echo $data_laptop['harga_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['ram_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['penyimpanan_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['processor_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['uk_layar_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['res_layar_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['gpu_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['refresh_rate_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['panel_layar_angka'] ?></center></td>
                                                    <td><center><?php echo $data_laptop['berat_angka'] ?></center></td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <center>
                    <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Matriks ternormalisasi, R:</h4>
                </center>
                <ul>
                    <li>
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <h5 style="margin-bottom: 16px; margin-top: -6px;">Matriks Normalisasi "R"</h5>
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
                                            $pembagiNM = pembagiNM($Matrik);
                                            $no = 1;
                                            for ($i = 0; $i < sizeof($Matrik); $i++) {
                                                $normal[$i] = array(
                                                    $Matrik[$i][0] / $pembagiNM[0],
                                                    $Matrik[$i][1] / $pembagiNM[1],
                                                    $Matrik[$i][2] / $pembagiNM[2],
                                                    $Matrik[$i][3] / $pembagiNM[3],
                                                    $Matrik[$i][4] / $pembagiNM[4],
                                                    $Matrik[$i][5] / $pembagiNM[5],
                                                    $Matrik[$i][6] / $pembagiNM[6],
                                                    $Matrik[$i][7] / $pembagiNM[7],
                                                    $Matrik[$i][8] / $pembagiNM[8],
                                                    $Matrik[$i][9] / $pembagiNM[9]
                                                );
                                                ?>
                                                <tr>
                                                    <td><center><?php echo "A", $no ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][0]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][1]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][2]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][3]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][4]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][5]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][6]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][7]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][8]), 4) ?></center></td>
                                                    <td><center><?php echo round(($normal[$i][9]), 4) ?></center></td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <center>
                 <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">BOBOT (W)</h4>
                </center>
                <ul>
                    <li>
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <h5 style="margin-bottom: 16px; margin-top: -6px;">BOBOT (W)</h5>
                                    <table class="responsive-table">
                                        <thead>
                                            <tr>
                                                <th><center>Value Kriteria Harga</center></th>
                                                <th><center>Value Kriteria Ram</center></th>
                                                <th><center>Value Kriteria Penyimpanan</center></th>
                                                <th><center>Value Kriteria Processor</center></th>
                                                <th><center>Value Kriteria Ukuran layar</center></th>
                                                <th><center>Value Kriteria Resolusi layar</center></th>
                                                <th><center>Value Kriteria GPU</center></th>
                                                <th><center>Value Kriteria Refresh Rate</center></th>
                                                <th><center>Value Kriteria Panel Layar</center></th>
                                                <th><center>Value Kriteria Berat</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><center><?php echo($W1); ?></center></td>
                                                <td><center><?php echo($W2); ?></center></td>
                                                <td><center><?php echo($W3); ?></center></td>
                                                <td><center><?php echo($W4); ?></center></td>
                                                <td><center><?php echo($W5); ?></center></td>
                                                <td><center><?php echo($W6); ?></center></td>
                                                <td><center><?php echo($W7); ?></center></td>
                                                <td><center><?php echo($W8); ?></center></td>
                                                <td><center><?php echo($W9); ?></center></td>
                                                <td><center><?php echo($W10); ?></center></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <center>
                    <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Matriks ternormalisasi terbobot, Y:</h4>
                </center>
                <ul>
                    <li>
                        <div class="row">
                            <div class="card">
                                <div class="card-content">
                                    <h5 style="margin-bottom: 16px; margin-top: -6px;">Matriks Normalisasi Terbobot "Y"</h5>
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
                                            $no = 1;
                                            $W = array($W1, $W2, $W3, $W4, $W5, $W6, $W7, $W8, $W9, $W10);
                                            for ($i = 0; $i < sizeof($normal); $i++) {
                                                $ternormalisasi[$i] = array(
                                                    $normal[$i][0] * -$W[0],
                                                    $normal[$i][1] * $W[1],
                                                    $normal[$i][2] * $W[2],
                                                    $normal[$i][3] * $W[3],
                                                    $normal[$i][4] * $W[4],
                                                    $normal[$i][5] * $W[5],
                                                    $normal[$i][6] * $W[6],
                                                    $normal[$i][7] * $W[7],
                                                    $normal[$i][8] * $W[8],
                                                    $normal[$i][9] * $W[9]
                                                );
                                                ?>
                                                <tr>
                                                    <td><center><?php echo "A", $no ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][0]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][1]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][2]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][3]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][4]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][5]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][6]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][7]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][8]), 4) ?></center></td>
                                                    <td><center><?php echo round(($ternormalisasi[$i][9]), 4) ?></center></td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="container">
    <center>
        <h4 class="header" style="margin: 24px 0; color: #635c73;">Solusi Ideal Positif (A+) dan Negatif (A-):</h4>
    </center>
    <ul>
        <li>
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <h5 style="margin: -6px 0 16px;">Solusi Ideal Positif "A+" dan Negatif "A-"</h5>
                        <table class="responsive-table">
                            <thead style="border-top: 1px solid #d0d0d0;">
                                <tr>
                                    <th><center>Kriteria</center></th>
                                    <th><center>Y+ (Benefit)</center></th>
                                    <th><center>Y- (Cost)</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Y = Transpose($ternormalisasi);
                                $aplus = array(max($Y[0]), max($Y[1]), max($Y[2]), max($Y[3]), max($Y[4]), max($Y[5]), max($Y[6]), max($Y[7]), max($Y[8]), max($Y[9]));
                                $amin = array(min($Y[0]), min($Y[1]), min($Y[2]), min($Y[3]), min($Y[4]), min($Y[5]), min($Y[6]), min($Y[7]), min($Y[8]), min($Y[9]));
                                for ($i = 0; $i < 10; $i++) {
                                    ?>
                                    <tr>
                                        <td><center>K<?php echo $i + 1 ?></center></td>
                                        <td><center><?php echo round($aplus[$i], 4) ?></center></td>
                                        <td><center><?php echo round($amin[$i], 4) ?></center></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <center>
        <h4 class="header" style="margin: 24px 0; color: #635c73;">Jarak Positif dan Negatif:</h4>
    </center>
    <ul>
        <li>
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <h5 style="margin: -6px 0 16px;">Jarak Positif dan Negatif</h5>
                        <table class="responsive-table">
                            <thead style="border-top: 1px solid #d0d0d0;">
                                <tr>
                                    <th><center>Alternatif</center></th>
                                    <th><center>D+</center></th>
                                    <th><center>D-</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < sizeof($ternormalisasi); $i++) {
                                    $dplus[$i] = sqrt(
                                        ($aplus[0] - $ternormalisasi[$i][0]) ** 2 +
                                        ($aplus[1] - $ternormalisasi[$i][1]) ** 2 +
                                        ($aplus[2] - $ternormalisasi[$i][2]) ** 2 +
                                        ($aplus[3] - $ternormalisasi[$i][3]) ** 2 +
                                        ($aplus[4] - $ternormalisasi[$i][4]) ** 2 +
                                        ($aplus[5] - $ternormalisasi[$i][5]) ** 2 +
                                        ($aplus[6] - $ternormalisasi[$i][6]) ** 2 +
                                        ($aplus[7] - $ternormalisasi[$i][7]) ** 2 +
                                        ($aplus[8] - $ternormalisasi[$i][8]) ** 2 +
                                        ($aplus[9] - $ternormalisasi[$i][9]) ** 2
                                    );

                                    $dmin[$i] = sqrt(
                                        ($ternormalisasi[$i][0] - $amin[0]) ** 2 +
                                        ($ternormalisasi[$i][1] - $amin[1]) ** 2 +
                                        ($ternormalisasi[$i][2] - $amin[2]) ** 2 +
                                        ($ternormalisasi[$i][3] - $amin[3]) ** 2 +
                                        ($ternormalisasi[$i][4] - $amin[4]) ** 2 +
                                        ($ternormalisasi[$i][5] - $amin[5]) ** 2 +
                                        ($ternormalisasi[$i][6] - $amin[6]) ** 2 +
                                        ($ternormalisasi[$i][7] - $amin[7]) ** 2 +
                                        ($ternormalisasi[$i][8] - $amin[8]) ** 2 +
                                        ($ternormalisasi[$i][9] - $amin[9]) ** 2
                                    );
                                    ?>
                                    <tr>
                                        <td><center>A<?php echo $i + 1 ?></center></td>
                                        <td><center><?php echo round($dplus[$i], 4) ?></center></td>
                                        <td><center><?php echo round($dmin[$i], 4) ?></center></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <center>
        <h4 class="header" style="margin: 24px 0; color: #635c73;">Nilai Preferensi dan Peringkat:</h4>
    </center>
    <ul>
        <li>
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <h5 style="margin: -6px 0 16px;">Nilai Preferensi "V" dan Peringkat Alternatif</h5>
                        <table class="responsive-table">
                            <thead style="border-top: 1px solid #d0d0d0;">
                                <tr>
                                    <th><center>Alternatif</center></th>
                                    <th><center>Nilai Preferensi</center></th>
                                    <th><center>Peringkat</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $arr = array();
                                for ($i = 0; $i < sizeof($ternormalisasi); $i++) {
                                    $V[$i] = $dmin[$i] / ($dmin[$i] + $dplus[$i]);
                                    $arr[$i] = array('A' . ($i + 1), $V[$i]);
                                }
                            
                                usort($arr, function ($a, $b) {
                                    return $b[1] <=> $a[1];
                                });
                            
                                for ($i = 0; $i < sizeof($ternormalisasi); $i++) {
                                    ?>
                                    <tr>
                                        <td><center><?php echo $arr[$i][0] ?></center></td>
                                        <td><center><?php echo round($arr[$i][1], 4) ?></center></td>
                                        <td><center><?php echo $i + 1 ?></center></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </li>
    </ul>
                            
        <center>
            <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73;">Nilai Preferensi tertinggi</h4>
        </center>
    <ul>
        <li>
            <div class="row">
                <div class="card" style="margin-left: 300px; margin-right: 300px;">
                    <div class="card-content">
                        <table class="responsive-table">
                            <thead style="border-top: 1px solid #d0d0d0;">
                                <tr>
                                    <th><center>Nilai Preferensi tertinggi</center></th>
                                    <th></th>
                                    <th><center>Alternatif Laptop terpilih</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    // Pastikan $V telah terdefinisi dan berisi array dari hasil sebelumnya
                                    if (is_array($V) && !empty($V)) {
                                        $testmax = max($V);
                                        for ($i = 0; $i < count($V); $i++) {
                                            if ($V[$i] == $testmax) {
                                                $query = mysqli_query($selectdb, "SELECT * FROM data_laptop WHERE id_laptop = " . ($i + 1));
                                                ?>
                                                <td><center><?php echo "A" . ($i + 1); ?></center></td>
                                                <td><center><?php echo round($V[$i], 4); ?></center></td>
                                                <?php while ($user = mysqli_fetch_array($query)) { ?>
                                                    <td><center><?php echo $user['nama_laptop']; ?></center></td>
                                                <?php
                                                }
                                            }
                                        }
                                    } else {
                                        echo "Tidak ada data nilai preferensi.";
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="row center">
        <a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn" style="margin-top: 0px">Hitung Rekomendasi Ulang</a>
    </div>
</div>
</div>

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
      <div class="container">
        <p align="center" style="color: #999">&copy; SPK Pemilihan Laptop Asus 2024</p>
      </div>
    </div>
    <!-- Footer End -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>