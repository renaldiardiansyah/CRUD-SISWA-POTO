<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['aksi'])){

    // ambil data dari formulir
    if($_POST['aksi'] =='add'){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['jenis_kelamin'];
    $agama= $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $NoTelp = $_POST['No_telepon'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $kodePos = $_POST['kode_pos'];

    $tanggal_mysql =date("Y-m-d", strtotime($tanggal));
    



    // buat query
    $sql = "INSERT INTO SiswaNew (id_pendaftaran,nama, alamat,jenis_kelamin,agama,sekolah_asal,tanggal_lahir,No_telepon,email,desa,kecamatan,kabupaten,provinsi,kode_pos) VALUE ('$nama','$alamat', '$kelamis', '$agama','$sekolah_asal','$tanggal_mysql','$tanggal_lahir','$NoTelp','$email','$desa','$kecamatan','$kabupaten','$provinsi','$kodePos')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else if ($_POST['aksi'] =='edit'){
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['jenis_kelamin'];
    $agama= $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $NoTelp = $_POST['No_telepon'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $kodePos = $_POST['kode_pos'];
    $tanggal_mysql =date("Y-m-d", strtotime($tanggal));
    $sql="UPDATE SiswaNew SET nama ='$nama', alamat ='$alamat', jenis_kelamin ='$kelamin', agama ='$agama', sekolah_asal ='$sekolah_asal', tanggal_lahir='$tanggal_mysql',
    No_telepon='$NoTelp', email ='$email', desa ='$desa', kecamatan ='$kecamatan', kabupaten ='$kabupaten', provinsi ='$provinsi', kode_pos ='$kodePos'
    WHERE id_pendaftaran='$id_pendaftaran'";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}
}
if(isset($_GET['hapus'])){
    $id_pendaftaran = $_GET['hapus'];

    $sql ="DELETE FROM SiswaNew WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}

?>