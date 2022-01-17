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
	<title>E</title>
	<link rel="stylesheet" href="stylee.css">
	<link rel="stylesheet" href="style header.css">
</head>
<script>  
  
  function result()
    {
      var num1 = document.getElementById("i1").value;
      var num2 = document.getElementById("i2").value;
      var num3 = document.getElementById("i3").value;
      var num4 = document.getElementById("i4").value;
      var num5 = document.getElementById("i5").value;
      var num6 = document.getElementById("i6").value;
      var num7 = document.getElementById("i7").value;
      var num8 = document.getElementById("i8").value;
      var num9 = document.getElementById("i9").value;
      var num10 = document.getElementById("i10").value;
      var num11 = document.getElementById("i11").value;
      
      
      
      var total = parseFloat(num1) + parseFloat(num2) + parseFloat(num3) + parseFloat(num4) + parseFloat(num5) + parseFloat(num6) + parseFloat(num7) + parseFloat(num8) + parseFloat(num9) + parseFloat(num10) + parseFloat(num11) ;
      
      
      document.getElementById("result").innerHTML = "Total Amount RM :" + total;
    }
    
</script>
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
<form action="E.php" method="POST">
<body style="background-color:#6A0DAD">
<h3 style="color:white"><center>D : DOKUMEN SOKONGAN(Dokumen Yang Diperlukan Bagi Permohonan Aktiviti Pelajar)</center></h3>
  <div class="container">
   <div class="row">
     <div class="col-25">
     <label for="pengiring2">Persatuan/Kelab/Kumpulan/Pelajar</label>
      </div>
    <div class="col-75">
    - Surat Rasmi Permohonan Aktiviti Pelajar<br>
    - Kertas Kerja (Format Seperti Dilampiran)<br>
    - Borang C<br> 
    - Minit Mesyuarat Berkaitan<br>
    - Dokumen Sokongan Yang Berkaitan<br>
    <div class="col-75">
    <input type="text" size="124" name="dokumenD">
    </div>
  </div>
</div>
</div>
<center><h3 style= "color:white">E: MAKLUMAT PERBELANJAAN - Bahagian Program Lawatan </h3></center>
<div class="container">
<!------------------------------------------ i. Makanan --------------------------------------------------------->
  <center><p><b>Makanan dan Penginapan</p></b></center><hr>
   <form action="vii.html">
    <div class="row">
    <p><b>Elaun Makanan</b></p>
    <br>- Minum Pagi (RM 4.00/seorang)
    <br>- Makan Tengahari (RM 6.00/seorang)
    <br>- Makan Malam (RM 6.00/seorang)
    <br>- Jamuan Makan (VIP) (RM 12.00/seorang)
    <br>- Sahur (RM 5.00/seorang)
    <br>- Berbuka Puasa (RM 10.00/seorang) <br>(Termasuk Majlis Berbuka dengan Sultan Selangor dan Agong)
    <div class="col-75">
    </div>
    <div class="col-25">
    Enter Amount ( RM ) : <input type="text" size ="5" id="i1" name="makanan"><br><br>
    </div>

   <hr>
   <div class="row">
   <p><b>Bayaran Makanan dan Penginapan bagi program Secara Pakej</b></p>
   <p>Mengikut harga terendah  (Tidak melebihi RM 100.00 sehari/seorang)</p>
   <div class="col-75">
   </div>
     <div class="col-25">
        Enter Amount ( RM ) :<input type="text" size ="5" id="i2" name="bayaran" ><br><br>
      </div>
    </div>
   <hr>
   <div class="row">

  <div class="row">
  <b><p>Yuran Penginapan<p></b>

  IPTA dan lain-lain tempat (RM10.00-RM15.00)<br>
  UiTM<br><br>
    - RM5.00 bagi dorm (kolej perindu dan Seroja) <br>
    - RM7.50 bagi bilik)<br>
    - Tambahan dobi 5.00 bagi setiap penginapan<br>
    - HOTEL (Maksima RM50.00 seorang/malam)
  <div class="col-75">
  </div>
     <div class="col-25">
  Enter Amount ( RM ) :<input type="text" size ="5" id="i3" name="yuran" ><br><br>
  </div>
  </div>
  <hr>
  <div class="row">
  <!------------------------------------------ ii. Keperluan --------------------------------------------------------->
   <div class="row">
   <center><p><b>Keperluan Program</p></b></p></center><hr>
   <div class="row">
   <b>Peralatan/Keperluan Program</b>
   <div class="row">
   <p><b>Percetakan</b>(cth: Buku program, pamplet, brosur dll)</p>
   Maksima RM400.00 mengikut kesesuaian aktiviti<br>
   <div class="col-75">
   </div>
   <div class="col-25">
   Enter Amount ( RM ) :<input type="text" size ="5" id="i4" name="keperluan"><br><br>
   </div>
   </div>  
  <hr>

  <div class="row">
  <p><b>Kain Rentang</b></p>
  Maksima RM250.00/unit (tidak melebihi 3 unit bagi setiap program/aktiviti)<br>
  <div class="col-75">
  </div>
     <div class="col-25">
  Enter Amount ( RM ):<input type="text" size ="5" id="i5" name="keperluanProg"><br><br>
  </div>
    </div>  
  <hr>

  <div class="row">
  <p><b>Cenderamata</b></p>
  <br>
   - Pemimpin negara bertaraf Menteri ke atas Maksima RM2,000.00<br>
   - Jemputan Luar hingga ke Timbalan Menteri RM50.00 - RM300.00<br>
  (Mengguna pakai Pekeliling Naib Canselor Bil. 18/2011 sebagai panduan dan syarat tambahan)
  <div class="col-75">
  </div>
     <div class="col-25">
  Enter Amount ( RM ):<input type="text" size ="5" id="i6" name="cenderamata"><br><br>
    </div>
  </div>  
  <hr>
  
  <div class="row">
  <p><b>Laporan Program & Gambar Aktiviti</b></p>
  <p>Tidak melebihi RM50.00</p>
  <div class="col-75">
  </div>
     <div class="col-25">
        Enter Amount ( RM ) :<input type="text" size ="5" id="i7" name="laporan" ><br><br>
      </div>
    </div>
  <hr>
  <div class="row">

  <p><b>Backdrop</b></p>
  <p>Tidak melebihi RM300.00</p>
  <div class="col-75">
  </div>
     <div class="col-25">
        Enter Amount ( RM ):<input type="text" size ="5" id="i8" name="backdrop" ><br><br> 
      </div>
    </div>
  <hr>

  <div class="row">
  <p><b>Pakaian</b></p>
  <p><b>T-Shirt tanpa kolar</b></p>
    - RM13.00 – RM15.00 (mengikut jumlah pelajar)
  <br> 
  <p><b>T-shirt berkolar</b></p>
    - RM23.00 – RM30.00 (mengikut jumlah pelajar
  <br>
  <p><b>Baju F1/baju korporat</b></p>
    - Maksimum RM45.00 – RM65.00 (mengikut jumlah pelajar)
  <br>
  <p><b>Baju Batik</b></p>
    - Maksimum 100.00 (Siswa)/Maksimum 150.00 (Siswi)</li>
  <br> 
  <div class="col-75">
  </div>
     <div class="col-25">
  Enter Amount ( RM ) :<input type="text" size ="5" id="i9" name="pakaian"><br><br>
  </div>
    </div>  
  <hr>

   <center><p><b>Lawatan Luar</p></b></center><hr>
   <form action="vii.html">
    <div class="row">
    <p><b>Lawatan Akademik Luar Negara/ Lawatan Antarabangsa (Aktiviti Pelajar)</b></p>
    <p>Maksimum RM6,000.00 perlawatan :<br>
    <div class="col-75">
    </div>
    <div class="col-25">
    Enter Amount ( RM ) : <input type="text" size ="5" id="i10" name="lawatanLuar"><br><br>
    </div>
    <hr>
   

  <div class="row">
   <center><p><b>Lain - Lain Perbelanjaan</p></b></p></center><hr>
   <div class="row">
   <p><b>Sila nyatakan secara terperinci : </b><br>
    <div class="col-75">
       <input type="text" name="details">
   </div>
   <div class="col-75">
   </div>
   <div class="col-25">
   Enter Amount ( RM ) :<input type="text" size ="5" id="i11" name="lainlain"><br><br>
   </div>
   </div>  
  <hr>

  <div class="row">
  <p><b>Calculate Total Amount For All </b></p>
  <div class="col-75">
  <input type="button" value="Calculate" onClick="result()">
  </div>
     <div class="col-25">
        <p id = "result"></p> 
     </div> 
    </div>
    
    <div class="row">
      <input type="submit" name="insert" value="Submit">
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
  $dokumenD = $_POST['dokumenD'];
  $makanan = $_POST['makanan'];
  $bayaran = $_POST['bayaran'];
  $yuran = $_POST['yuran'];
  $keperluan = $_POST['keperluan'];
  $keperluanProg = $_POST['keperluanProg'];
  $cenderamata = $_POST['cenderamata'];
  $laporan = $_POST['laporan'];
  $backdrop = $_POST['backdrop'];
  $pakaian = $_POST['pakaian'];
  $lawatanLuar = $_POST['lawatanLuar'];
  $details = $_POST['details'];
  $lainlain = $_POST['lainlain'];


  $query = "INSERT INTO `dokumenperbelanjaan`(`dokumenD`, `makanan`, `bayaran`, `yuran`, `keperluan`, `keperluanProg`, `cenderamata`, `laporan`, `backdrop`, `pakaian`, `lawatanLuar`, `details`, `lainlain`) VALUES ('$dokumenD','$makanan','$bayaran','$yuran','$keperluan','$keperluanProg ','$cenderamata','$laporan','$backdrop','$pakaian','$lawatanLuar','$details','$lainlain')";
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

