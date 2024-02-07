<?php
include'config.php';
$id_pendaftaran = '';
$nama = '';
$alamat = '';
$kelamin ='';
$agama= '';
$sekolah_asal = '';
$tanggal_lahir = '';
$NoTelp ='';
$email ='';
$desa = '';
$kecamatan = '';
$kabupaten = '';
$provinsi = '';
$kodePos = '';

if(isset($_GET['edit'])){
  $id_pendaftaran=$_GET['edit'];
  $sql = "SELECT * FROM SiswaNew WHERE id_pendaftaran='$id_pendaftaran';";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_assoc($query);
  $nama = $result['nama'];
  $alamat = $result['alamat'];
  $kelamin = $result['jenis_kelamin'];
  $agama= $result['agama'];
  $sekolah_asal = $result['sekolah_asal'];
  $tanggal_lahir = $result['tanggal_lahir'];
  $NoTelp = $result['No_telepon'];
  $email = $result['email'];
  $desa = $result['desa'];
  $kecamatan = $result['kecamatan'];
  $kabupaten = $result['kabupaten'];
  $provinsi = $result['provinsi'];
  $kodePos = $result['kode_pos'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br> 

<form action="proses.php" method="POST">
<input type="hidden" name="id_pendaftaran" value ="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama_guru" value ="<?php echo $nama;?>"  placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="tanggal_lahir" class="form-label">Tangal Lahir </label>
  <input type="date" class ="form-control" name="tanggal_lahir" value ="<?php echo $tanggal_lahir;?>"  placeholder="tanggal_lahir" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($kelamin == 'laki-laki'){echo "checked";}?>  value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($kelamin == 'perempuan'){echo "checked";}?>   value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option <?php if ($agama == 'islam'){echo "selected";}?> value="Islam">Islam</option>
                <option <?php if ($agama == 'kristen'){echo "selected";}?> value="kristen">Kristen</option>
                <option <?php if ($agama == 'Hindu'){echo "selected";}?> value="Hindu">Hindu</option>
                <option <?php if ($agama == 'Budha'){echo "selected";}?> value="Budha">Budha</option>
                <option <?php if ($agama == 'Atheis'){echo "selected";}?> value="Atheis">Atheis</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"><?php echo $alamat;?></textarea>
          </div>
          <div class="mb-3">
              <label for="Desa/Kelurahan" class="form-label">Desa/Kelurahan: </label>
              <input type="text" class ="form-control" name="desa" value ="<?php echo $desa;?>"   placeholder="Desa/Kelurahan" />
          </div>
          <div class="mb-3">
              <label for="Kecamatan" class="form-label">Kecamatan: </label>
              <input type="text" class ="form-control" name="kecamatan" value ="<?php echo $kecamatan;?>"  placeholder="Kecamatan" />
          </div>
          <div class="mb-3">
              <label for="kabupaten" class="form-label">Kabupaten/Kota: </label>
                      <select name="kabupaten" class="form-control">
                          <option <?php if ($kabupaten == 'bandung'){echo "selected";}?> value="bandung">Bandung</option>
                          <option <?php if ($kabupaten == 'Bandung barat'){echo "selected";}?> value="Bandung barat">Bandung Barat</option>
                          <option <?php if ($kabupaten == 'Bekasi'){echo "selected";}?> value="Bekasi">Bekasi</option>
                          <option <?php if ($kabupaten == 'bogor'){echo "selected";}?> value="bogor">Bogor</option>
                          <option <?php if ($kabupaten == 'cianjur'){echo "selected";}?> value="cianjur">Cianjur</option>
                          <option <?php if ($kabupaten == 'Cirebon'){echo "selected";}?> value="Cirebon">Cirebon</option>
                          <option <?php if ($kabupaten == 'Indramayu'){echo "selected";}?> value="Indramayu">Indramayu</option>
                          <option <?php if ($kabupaten == 'Karawang'){echo "selected";}?> value="Karawang">Karawang</option>
                          <option <?php if ($kabupaten == 'kuningan'){echo "selected";}?> value="kuningan">Kuningan</option>
                          <option <?php if ($kabupaten == 'majalengka'){echo "selected";}?> value="majalengka">Majalengka</option>
                      </select>
          </div>
          <div class="mb-3">
              <label for="provinsi" class="form-label">Provinsi: </label>
                      <select name="provinsi" class="form-control">
                          <option <?php if ($provinsi == 'Jawa barat'){echo "selected";}?> value="Jawa barat">Jawa Barat</option>
                          <option <?php if ($provinsi == 'Jawa Timur'){echo "selected";}?> value="Jawa Timur">Jawa Timur</option>
                          <option <?php if ($provinsi == 'Jawa Tengah'){echo "selected";}?> value="Jawa Tengah">Jawa Tengah</option>
                      </select>
          </div>
          <div class="mb-3">
            <label for="Kode-pos" class="form-label">Kode Pos </label>
            <input type="text" class ="form-control" name="kode_pos" value ="<?php echo $kodePos;?>"  placeholder="Kode-Pos" />
          </div>
          <div class="mb-3">
            <label for="No-Telepon" class="form-label">No Telepon: </label>
            <input type="text" class ="form-control" name="No_telepon"  value ="<?php echo $NoTelp;?>"  placeholder="No-Telepon" />
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">email: </label>
            <input type="email" class ="form-control" name="email" value ="<?php echo $email;?>"  placeholder="Email" />
          </div>
          <div class="mb-3">
        <label for="nama-sekolah" class="form-label">Sekolah Asal: </label>
        <input type="text" class ="form-control" name="sekolah_asal"  value ="<?php echo $sekolah_asal;?>"  placeholder="nama-sekolah" />
        </div>
        <div class="mb-3 row mt-4">
  <div class ="col">
    <?php
    if(isset($_GET['edit'])){
      ?>
      <button type="submit" name="aksi" value="edit" class="btn btn-primary">
        simpan perubahan
    </button>
    <?php
    }else{
      ?>
      <button type="submit" name="aksi" value="add" class="btn btn-primary">
        Daptar
    </button>
    <?php
    }
    ?>
    <a href ="index.php" type="button" class="btn btn-dangger">Batal</a>
  </div>
</div>       

</form>
  </div>
    </body>
</html>