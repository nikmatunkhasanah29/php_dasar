<?php

if (isset($_GET['p'])){

    if($_GET['p']=='tampil'){

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];
    } else if ($_GET['p']== "pesan"){
        echo "Hai bagaimana kabarnya".$_POST['nama'];
        echo "<br/>";
        echo "password anda adalah".$_POST['password'];

    } else if ($_GET['p']== "aman"){
        if (!empty($_POST['nama'])){
            echo $_POST['nama'];
        } else{
            echo "nama belum dimasukkan";
        }
        echo "<br/>";

        if (!empty($_POST['password'])){
            echo $_POST['password'];
        } else{
            echo "password masih kosong";
        }
    } else if ($_GET['p']=="gambar"){
        $size=getimagesize($_FILES['file']['tmp_name']);
        $image="data:".$size['mime'].";base64,".
               base64_encode(file_get_contents($_FILES['file']['tmp_name']));
        echo"<image scr='".$image."' width='720'>";
    }
} else {
    echo "Anda tidak boleh mengakses halaman ini!";
}