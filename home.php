<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2 class="my-2">Data Pegawai</h2>  
            <a class="btn btn-secondary my-2" href="insert.php" role="button">Insert Data Pegawai</a>        
            <table class="table table-striped text-center">
                <thead class="thead-dark ">
                    <tr>
                        <th>No</th>
                        <th>ID Pegawai</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "koneksi.php";
                        $no=1;
                        $query=mysqli_query($koneksi, "SELECT * FROM pegawai ORDER BY id_pegawai ASC");
                        while($result=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $result['id_pegawai']?></td>
                        <td><?php echo $result['nama_pegawai']?></td>
                        <td><?php echo $result['jabatan']?></td>
                        <td>
                            <a class="btn btn-primary mx-1" href="edit.php?id=<?php echo $result['id_pegawai']?>" role="button">Edit</a> 
                            <a class="btn btn-danger mx-1" href="delete.php?id=<?php echo $result['id_pegawai']?>" role="button">Delete</a> 
                        </td>
                    </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        </div>
    </body>
</html>