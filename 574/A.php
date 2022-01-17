<!DOCTYPE html>
<html>
<head>
<ul>
   <li><a class="active" href="A.php">&#9900; Bahagian A</a></li><!--for navigation bar-->
     <li><a href="B.php">&#9900; Bahagian B</a></li>
   <li><a href="C.php">&#9900; Bahagian C </a></li>
   <li><a href="E.php">&#9900; Bahagian D & E</a></li>
</ul>
<div class="header">
	<center>
  <img src ="download.png" width="210.5" height="87.5"><center>
  
		<h2>
		BAHAGIAN HAL EHWAL PELAJAR
		UNIVERSITI TEKNOLOGI MARA</h2> 
 
</div>
	<title>A</title>
	<link rel="stylesheet" href="stylee.css">
	<link rel="stylesheet" href="style header.css">
</head>
<style>
ul
    { 
    list-style-type: none;
    margif: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  } 
    li {
     float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-allign: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: Calibri;
    font-size:17px;
  }
  
  li a:hover 
  {
     background-color:#111;
  }
</style>
<form action="A.php" method="POST">
<body style="background-color:#6A0DAD">
<h3 style="color:white"><center>A: RINGKASAN PERMOHONAN AKTIVITI PELAJAR</center></h3>
<div class="container">
    <div class="row">
      <div class="col-25">
       <label for ="tarikhMohon">TARIKH TERIMA PERMOHONAN:</label>
      </div>
      <div class="col-50">
        <input type="text" name="tarikhTerima">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for ="kod">KOD PERSATUAN:</label>
      </div>
      <div class="col-75">
        <input type="text" size="33" name="kodPersatuan">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for ="namaPersatuan">NAMA PERSATUAN:</label>
      </div>
	 <div class="col-75">
       <input type="text" size ="124" name="namaPersatuan">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for ="namaAktiviti">NAMA AKTIVITI:</label>
      </div>
	 <div class="col-75">
       <input type="text" size="124" name="namaAktiviti">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for ="peringkat">PERINGKAT AKTIVITI:</label>
      </div>
    <div class="col-75">
       <input type="text" size="124" name="peringkatAktviti">
     </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for ="kategori">KATEGORI AKTIVITI:</label>
      </div>
	 <div class="col-75">
       <input type="text" size="124" name="kategoriAktiviti">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
       <label for ="anjuran">ANJURAN BERSAMA (Sila Nyatakan Jika Ada):</label>
      </div>
	 <div class="col-75">
      <input type="text" size="124" name="anjuranBersama">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
       <label for ="tempat">TEMPAT AKTIVITI</label>
      </div>
	 <div class="col-75">
      <input type="text" size="124" name="tempatAktiviti">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
      <label for ="tarikh ">TARIKH AKTIVITI</label>
      </div>
	 <div class="col-25">
      <input type="text" name="tarikhAktivti">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
      <label for ="bilangan">BILANGAN PESERTA</label>
      </div>
	 <div class="col-25">
		<input type="text" size="25" name="bilPeserta"></td>  
	</div>
	</div>
	 <div class="row">
      <div class="col-25">
		<label for ="kos">ANGGARAN KOS (RM):</label>
      </div>
	 <div class="col-75">
    <input type="text" size="124" name="anggaranKos">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
		<label for ="tajaan">ANGGARAN TAJAAN (RM)</label>
      </div>
	 <div class="col-75">
		<input type="text" size="124" name="anggaranTajaan">
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
		<label for ="penjanaan">ANGGARAN PENJANAAN PENDAPATAN (RM)</label>
      </div>
	 <div class="col-75">
		<input type="text" size="124" name="anggaranPendapatan">
     </div>
    </div>
    <div class="row">
      <input type="submit" name="insert" value="Submit">
    </div>
  </form>
</div>
</form>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'registration');

//php code to insert data into mysql database from input text
if(isset($_POST['insert']))
{

  $tarikhTerima = $_POST['tarikhTerima'];
  $kodPersatuan = $_POST['kodPersatuan'];
  $namaPersatuan = $_POST['namaPersatuan'];
  $namaAktiviti = $_POST['namaAktiviti'];
  $peringkatAktviti = $_POST['peringkatAktviti'];
  $kategoriAktiviti = $_POST['kategoriAktiviti'];
  $anjuranBersama = $_POST['anjuranBersama'];
  $tempatAktiviti = $_POST['tempatAktiviti'];
  $tarikhAktivti = $_POST['tarikhAktivti'];
  $bilPeserta = $_POST['bilPeserta'];
  $anggaranKos = $_POST['anggaranKos'];
  $anggaranTajaan = $_POST['anggaranTajaan'];
  $anggaranPendapatan = $_POST['anggaranPendapatan'];
    
  $query = "INSERT INTO `ringkasan`(`tarikhTerima`, `kodPersatuan`, `namaPersatuan`, `namaAktiviti`, `peringkatAktviti`, `kategoriAktiviti`, `anjuranBersama`, `tempatAktiviti`, `tarikhAktivti`, `bilPeserta`, `anggaranKos`, `anggaranTajaan`, `anggaranPendapatan`) VALUES ('$tarikhTerima','$kodPersatuan','$namaPersatuan','$namaAktiviti','$peringkatAktviti','$kategoriAktiviti','$anjuranBersama', '$tempatAktiviti','$tarikhAktivti','$bilPeserta','$anggaranKos','$anggaranTajaan','$anggaranPendapatan')";
  $query_run = mysqli_query($connection, $query);

    // check if mysql query successful
    if($query_run)
    {
        echo 'Data Inserted';
    }
    
    else
    {
        echo 'Data Not Inserted';
    }
    
}

?>

