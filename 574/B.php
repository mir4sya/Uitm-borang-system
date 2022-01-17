<!DOCTYPE html>
<html>
<head>
<ul>
   <li><a class="active" href="A.php">&#9900; Bahagian A</a></li><!--for navigation bar-->
     <li><a href="B.php">&#9900; Bahagian B</a></li>
   <li><a href="C.php">&#9900; Bahagian C & D</a></li>
   <li><a href="E.php">&#9900; Bahagian D & E</a></li>
</ul>
<div class="header">
<center>
	<img src ="download.png" width="210.5" height="87.5"><center>
  
		<h2>
		BAHAGIAN HAL EHWAL PELAJAR
		UNIVERSITI TEKNOLOGI MARA</h2> 
 
</div>
<title>B</title>
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
<form action="B.php" method="POST">
<body style="background-color:#6A0DAD">
<center>

<h3 style="color:white"><center>B : IMPAK AKTIVITI
(Sila Senaraikan Sekurang-kurangnya 3 Impak Utama Pembelajaran Daripada Penganjuran Aktiviti)</center></h3>
<div class="container">
    <div class="row">
      <div class="col-25">
       <label for ="forStud"><b>1. KEPADA PELAJAR<b></label>
      </div>
      <div class="col-75">
        <input type="text" name="stud1">
		<input type="text" name="stud2">
		<input type="text" name="stud3">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
       <label for ="forUni"><b>2. KEPADA UNIVERSITI<b></label>
      </div>
      <div class="col-75">
        <input type="text" name="uni1">
		<input type="text" name="uni2">
		<input type="text" name="uni3">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
       <label for ="forCom"><b>3. KEPADA KOMUNITI/MASYARAKAT<b></label>
      </div>
      <div class="col-75">
        <input type="text" name="com1">
		<input type="text" name="com2">
		<input type="text" name="com3">
      </div>
    </div>
    <div class="row">
    	<input type="submit" name="insert" value="Submit"><br><br>
    </div>
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
	$stud1 = $_POST['stud1'];
	$stud2 = $_POST['stud2'];
	$stud3 = $_POST['stud3'];
	$uni1 = $_POST['uni1'];
	$uni2 = $_POST['uni2'];
	$uni3 = $_POST['uni3'];
	$com1 = $_POST['com1'];
	$com2 = $_POST['com2'];
	$com3 = $_POST['com3'];

	$query = "INSERT INTO `impak`(`stud1`, `stud2`, `stud3`, `uni1`, `uni2`, `uni3`, `com1`, `com2`, `com3`) VALUES ('$stud1','$stud2','$stud3','$uni1','$uni2','$uni3','$com1','$com2','$com3')";
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

