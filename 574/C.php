<?php include('serverr.php'); 

//fetch the record to be updated
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM butiran WHERE id=$id");
    $record = mysqli_fetch_array($rec);

    $namaPengarah = $record['namaPengarah'];
    $jawatan = $record['jawatan'];
    $noTelPenga = $record['noTelPenga'];
    $semester = $record['semester'];
    $cgpaPengarah = $record['cgpaPengarah'];
    $noKad = $record['noKad'];
    $id = $record['id'];
  }

?>

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
  <title>C</title>
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

table{
  width: 80%;
  margin: 30px auto;
  border-collapse: collapse;
  text-align: left;
}
tr{
  border-bottom: 1px solid #cbcbcb;
}

th, td{
  border: none;
  height: 30px;
  padding: 5px;
}
tr:hover{
  background: #F5F5F5;
}

.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
</style>

<form action = "serverr.php" method="POST">
<body style="background-color:#6A0DAD">
<h3 style="color:white"><center>C: BUTIR PEMOHON</center></h3>
<div class="container">
  <?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
    <?php 
      echo $_SESSION['msg']; 
      unset($_SESSION['msg']);
    ?>
    </div>
   <?php endif ?>
  <div class="row">
    <div class="col-75">

      <table>
        <thead>
         <tr>
          <th>Nama pengarah </th>
          <th>Jawatan </th>
          <th>No tel  </th>
          <th>Semester </th>
          <th>CGPA </th>
          <th>No kad pelajar </th>
          <th colspan ="6">Action</th>
         </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($results)) { ?>
          <tr>
          <td><?php echo $row['namaPengarah']; ?></td>
          <td><?php echo $row['jawatan']; ?></td>
          <td><?php echo $row['noTelPenga']; ?></td>
          <th><?php echo $row['semester']; ?></td></th>
          <th><?php echo $row['cgpaPengarah']; ?></th>
          <th><?php echo $row['noKad']; ?></th>
            <td>
              <a class="edit_btn" href="C.php?edit=<?php echo $row['id']; ?>">Edit</a>
            </td>
            <td>
              <a class="del_btn" href="serverr.php?del=<?php echo $row['id']; ?>">Delete</a>
            </td>
           </tr>
        <?php } ?>
        </tbody>
      </table>
     
     </div>
   </div>
    <div class="row">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="col-25">
       <label for ="namaPengarah"><b>NAMA PENGARAH PROGRAM:<b></label>
      </div>
      <div class="col-75">
        <input type="text" name="namaPengarah" value="<?php echo $namaPengarah; ?>">
      </div>
    </div>
  <div class="row">
      <div class="col-25">
       <label for="jawatan">Jawatan Dalam Persatuan:</label>
      </div>
      <div class="col-75">
        <input type="text" name="jawatan" value="<?php echo $jawatan; ?>">
      </div>
    </div>
  <div class="row">
     <div class="col-25">
       <label for="noTelPenga">No. Telefon Bimbit:</label>
      </div>
    <div class="col-75">
        <input type="text" name="noTelPenga" value="<?php echo $noTelPenga; ?>">
      </div>
   </div>
   <div class="row">
     <div class="col-25">
       <label for="semester">Semester:</label>
      </div>
    <div class="col-75">
       <input type="text" name="semester" value="<?php echo $semester; ?>">
      </div>
   </div>
    <div class="row">
     <div class="col-25">
      <label for="cgpa">CGPA Semasa (Dicadangkan 3.00 ke atas):</label>
      </div>
    <div class="col-75">
     <input type="text" name="cgpaPengarah" value="<?php echo $cgpaPengarah; ?>"></td>
      </div>
   </div>
   <div class="row">
     <div class="col-25">
      <label for="noKad">No. Kad Pelajar:</label>
      </div>
    <div class="col-75">
     <input type="text" name="noKad" value="<?php echo $noKad; ?>">
      </div>
   </div>
   <div class="row">
     <div class="col-25">
      <label for ="namaPenasihat"><b>NAMA PENASIHAT PERSATUAN:<b></label>
      </div>
    <div class="col-75">
    <input type="text" size="86" name="namaPenasihat">
      </div>
   </div>
   <div class="row">
     <div class="col-25">
      <label for="email">Email:</label>
      </div>
    <div class="col-75">
    <input type="text" name="emailPenasihat">
      </div>
   </div>
    <div class="row">
     <div class="col-25">
      <label for="noTelPena">No. Telefon Bimbit:</label>
      </div>
    <div class="col-75">
    <input type="text" name="noTelPena">
      </div>
   </div>
      <div class="row">
     <div class="col-75">
    <label for ="pegawai"><b>PEGAWAI PENGIRING (Sekiranya Ruangan Tidak Mencukupi Sila Buat Lampiran):</label>
      </div>
    </div>
      <div class="row">
     <div class="col-25">
     <label for="pengiring1">i) Nama:</label>
      </div>
    <div class="col-75">
    <input type="text" name="pengiring">
      </div>
   </div>
   <div class="row">
     <div class="col-25">
    <label for="noTelPengi">No. Telefon Bimbit:</label>
      </div>
    <div class="col-75">
    <input type="text" name="noTelPengi">
      </div>
   </div>
      <div class="row">
     <div class="col-25">
     <label for="pengiring2">ii) Nama:</label>
      </div>
    <div class="col-75">
    <input type="text" name="pengiring2">
      </div>
   </div>
   <div class="row">
     <div class="col-25">
     <label for="noTelPengi2">No. Telefon Bimbit:</label>
     </div>
   <div class="col-75">
    <input type="text" name="noTelPengi2">
      </div>

     <div class="row">
     <?php if ($edit_state == false): ?>
      <input type="submit" name="insert" value="Submit"><br><br>
     <?php else: ?>
      <input type="submit" name="update" value="Update"><br><br>
     <?php endif ?>

    </div>
    
   </div>
  </div>
  
  
  </form>
</div>
</body> 
</html>
