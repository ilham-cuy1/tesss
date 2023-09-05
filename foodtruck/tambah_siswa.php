<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>CRUD Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header fw-bold">
                    TAMBAH SISWA
                </div>
                <div class="card-body">
                    <form action="simpan-siswa.php" method="POST">

                    <div class="form-group fw-bold">
                     <label>NISN</label>
                     <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                    </div>

                    <div class="form-group fw-bold">
                     <label>Nama Lengkap</label>
                     <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
                    </div>

                    <div class="form-group fw-bold">
                     <label>Jurusan</label>
                     <input type="text" name="jurusan" placeholder="Masukkan Jurusan" class="form-control">
                    </div>

                    <div class="form-group fw-bold">
                     <label>Kelas</label>
                     <input type="text" name="kelas" placeholder="Masukkan Kelas" class="form-control">
                    </div>

                    <div class="form-group fw-bold">
                     <label>Alamat</label>
                     <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa"></textarea>
                    </div>

                    <div class="form-group fw-bold">
                     <label>Email</label>
                     <textarea class="form-control" name="email" placeholder="Masukkan Email Siswa"></textarea>
                    </div>

                    <div class="form-group fw-bold">
                     <label>No Hp</label>
                     <textarea class="form-control" name="nohp" placeholder="Masukkan No Hp Siswa"></textarea>
                    </div>

                    <button type="button" class="btn btn-success mt-4">SIMPAN</button>
                    <button type="button" class="btn btn-warning mt-4 ms-2">RESET</button>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>