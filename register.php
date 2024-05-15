<?php 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php 
                                            if(isset($_POST['register'])){
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $no_telepon = $_POST['no_telepon'];
                                                $username = $_POST['username'];
                                                $level = $_POST['level'];
                                                $password = md5($_POST['password']); // Tidak dianjurkan, gunakan password_hash() 

                                                $insert = mysqli_query($koneksi,"INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                                if($insert){
                                                    echo '<script>alert("Selamat, register berhasil. Silahkan Login"); window.location.href="login.php";</script>'; // Perbaiki lokasi redirect
                                                }else{
                                                    echo '<script>alert("Register gagal, silahkan ulangi kembali. Error: '.mysqli_error($koneksi).'");</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="nama" class="small mb-1">Nama lengkap</label>
                                                <input id="nama" class="form-control" required type="text" name="nama" placeholder="Masukkan Nama Lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="small mb-1">Email</label>
                                                <input id="email" class="form-control" required type="text" name="email" placeholder="Masukkan Email" />
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telepon" class="small mb-1">No. Telepon</label>
                                                <input id="no_telepon" class="form-control" required type="text" name="no_telepon" placeholder="Masukkan No. Telepon" />
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat" class="small mb-1">Alamat</label>
                                                <textarea id="alamat" name="alamat" required rows="5" class="form-control" placeholder="Masukkan Alamat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="small mb-1">Username</label>
                                                <input id="username" class="form-control" required type="text" name="username" placeholder="Masukkan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="small mb-1">Password</label>
                                                <input id="inputPassword" class="form-control" required type="password" name="password" placeholder="Masukkan Password" />
                                            </div>
                                            <div class="form-group">
                                                <label for="level" class="small mb-1">Level</label>
                                                <select class="form-select" id="autoSizingSelect">
                                                <option selected>Memilih...</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Petugas</option>
                                                <option value="3">Peminjam</option>
                                                </select>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Daftar Akun</button>
                                                <a class="btn btn-danger" href="login.php">Kembali</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">&copy; 2024 Perpustakaan Digital.</div>
                                    </div>
                                </div>
                            </div>
                        </div
