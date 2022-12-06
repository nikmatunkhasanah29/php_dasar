<?php

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQ: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $nim = $user_data['nim'];
            $nama = $user_data['nama'];
            $id_jurusan = $user_data['id_jurusan'];
            $tempat_lahir = $user_data['tempat_lahir'];
            $tanggl_lahir = $user_data['tanggal_lahir'];
            $jenis_kelamin = $user_data['jenis_kelamin'];
            $alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}

if (isset($_POST['submit'])){
    //var_dump($_POST);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',id_jurusan='$id_jurusan',tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tanggal_lahir',alamat='$alamat' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "<br>Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php if(isset($_GET['id'])): ?>
    <form action="" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        ID Jurusan: <input type="number" name="id_jurusan" value="<?php echo $id_jurusan; ?>"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <?php endif; ?>
</body>
</html>