<?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    
    $sql = "DELETE FROM pegawai WHERE id_pegawai='$id'";

    mysqli_query($koneksi, $sql);

    header("location:home.php");
?>