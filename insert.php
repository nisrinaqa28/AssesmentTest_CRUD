<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<html>
    <body>
        <br>
        <div class="container">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="idPegawai" class="col-sm-2 col-form-label">ID PEGAWAI</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="idPegawai" name="idPegawai">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">NAMA PEGAWAI</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">JABATAN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                            </div>
                        </div>
                        <a class="btn btn-warning mx-1" href="home.php" role="button">KEMBALI</a> 
                        <button type="submit" class="btn btn-light" name="simpan">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <?php
            include 'koneksi.php';
            
            if(isset($_POST['simpan'])){

                $idPegawai = $_POST['idPegawai'];
                $namaPegawai = $_POST['nama'];
                $jabatan = $_POST['jabatan'];

                $sql = "INSERT INTO pegawai VALUES('$idPegawai','$namaPegawai','$jabatan')";

                mysqli_query($koneksi, $sql);

                header("location:home.php");

            }
        ?>
    </body>
</html>