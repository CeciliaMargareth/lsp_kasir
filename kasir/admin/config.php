<?php 
$koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp') or die(mysqli_error($koneksi));

if(isset($_POST['tambah'])) {
    $idmenu = $_POST['idmenu'];
    $namamenu = $_POST['namamenu'];
    $harga = $_POST['harga'];
    
    $koneksi->query("INSERT INTO menu(idmenu, namamenu, harga) VALUES('$idmenu', '$namamenu', '$harga')");
    header('location:index.php');
}

if(isset($_GET['idmenu'])) {
    $idmenu = $_GET['idmenu'];
    $koneksi->query("DELETE FROM menu WHERE idmenu='$idmenu'");
    header('location:index.php');
}
if(isset($_GET['idmeja'])) {
    $idmeja = $_GET['idmeja'];
    $koneksi->query("DELETE FROM meja WHERE idmeja='$idmeja'");
    header('location:meja.php');
}

if(isset($_POST['tambah_meja'])) {
    $idmeja = $_POST['idmeja'];
    $nomor_meja = $_POST['nomor_meja'];
    $kapasitas = $_POST['kapasitas'];
    $status = $_POST['status'];
    
    $koneksi->query("INSERT INTO meja(idmeja, nomor_meja, kapasitas, status) VALUES('$idmeja', '$nomor_meja', '$kapasitas', '$status')");
    header('location:meja.php');
}
?>