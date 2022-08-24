<?php

    include 'koneksi.php';

    $idPegawai = $_POST['idPegawai'];
    $namaPegawai = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $sql = "UPDATE pegawai SET nama_pegawai='$namaPegawai', jabatan='$jabatan' WHERE id_pegawai='$idPegawai'";

    mysqli_query($koneksi, $sql);

    header("location:home.php");
?>