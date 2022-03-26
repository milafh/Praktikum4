<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <br>
  <h1>Form Nilai Mahasiswa</h1>
  <hr>
    <br>
<form method="POST" action="form_nilai.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="dasar-dasar pemrograman">dasar-dasar pemrograman</option>
        <option value="Matematika">Matematika</option>
        <option value="Pemrograman web">Pemrograman web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="text1" name="nilai" placeholder="Nilai" type="text" class="form-control">
    </div>
  </div>
  <!-- <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
    </div>
  </div>  -->
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" value="Simpan" type="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>

<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
  $ns = new NilaiMahasiswa($_POST['nama'], $_POST['matkul'], $_POST['nilai']);
  $keterangan = $ns->hitungNilai();
  $hasil = $ns->predikat($keterangan);
  $hasil2 = $ns->grade($keterangan);
  echo "Nama : ".$ns->nama_mahasiswa; 
  echo " <br/> Mata Kuliah : ".$ns->matkul;
  echo "<br/> Nilai : ". $ns->nilai;
  echo "<br/> Status : ". $ns->predikat($keterangan);
  echo "<br/> Grade : ". $ns->grade($keterangan);
}

?>

</body>
</html>


