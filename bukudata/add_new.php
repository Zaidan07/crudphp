<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $kelamin = $_POST['kelamin'];

    $sql = "INSERT INTO `crud`(`id`, `nama_depan`, `nama_belakang`, `email`, `kelamin`)
     VALUES (NULL,'$nama_depan','$nama_belakang','$email','$kelamin')";
    
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Buku Tamu PHP Crud Application 
   </nav>

   <div class="container">
    <div class="text-center mb-4">
        <h3>Tambahkan Pengguna Baru</h3>
        <p class="text-muted">Lengkapi formulir di bawah ini untuk menambahkan pengguna baru</p>
    </div>
   </div>

   <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row">
            <div class="col">
                <label class="form-label">Nama Depan:</label>
                <input type="text" class="form-control" name="nama_depan" placeholder="">
            </div>

            <div class="col">
                <label class="form-label">Nama Belakang:</label>
                <input type="text" class="form-control" name="nama_belakang" placeholder="">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="">
            </div>

            <div class="from-group mb-3">
                <label>Kelamin:</label> &nbsp;
                <input type="radio" class="form-check-input" name="kelamin" id="male" value="male">
                <label for="male" class="form-input-label">Laki-Laki</label>
                &nbsp;
                <input type="radio" class="form-check-input" name="kelamin" id="male" value="female">
                <label for="female" class="form-input-label">Perempuan</label>
            </div>

            <div>
            <button type="submit" class="btn btn-success" name="submit">Simpan</button>
            <a href="index.php" class="btn btn-danger">Batal</a>
            </div>
        </div>
      </form>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>