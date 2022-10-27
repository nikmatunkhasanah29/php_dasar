<?php

$nama = "Nikma";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
*/

//Perulangan dilakukan supaya lebih efektif dan tidak perlu menuliskan kode yang sama secara berulang-ulang
//Perulangan For
/*
$no = 20;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

//Perulangan While (biasanya dipakai pada data didalam database dengan jumlah yang banyak)
/*
$no = 5;
$i = 0;
while ($i < $no) {
     $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

//Perulangan Do While
/*
$no = 5;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/


//Kebanyakan perulangan array menggunakan foreach
/*
$data=array('Lamborghini', 'Avanza', 'Xenia', 'Tesla', 'XPander', 'Rubicon');
echo $data[5];

foreach($data as $value) {
    echo $value."<br>";
}
*/

/*
$data = array('Lamborghini', 'Avanza', 'Xenia', 'Tesla', 'XPander', 'Rubicon');
$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/

// Percabangan

/*
if ($nama == "Nikma") {
    echo $nama." berasal dari pulai Jawa";
} else if($nama == "Made") {
    echo $nama." berasal dari pulau bali";
} else {
    echo $nama." berasal dari mana?";
}
*/

/*
switch($nama) {
    case "Nikma":
        $pesan = $nama." berasal dari pulau Jawa";
    break;
    case "Made":
        $pesan = $nama." berasal dari Bali";
    break;
    default:
        $pesan = $nama." berasal dari mana?";
}
echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Penginputan Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Nikma":
                    $pesan = $_POST['nama']." berasal dari pulau Jawa";
                break;
                case "Made":
                    $pesan = $_POST['nama']." berasal dari Bali";
                break;
                default:
                    $pesan = $_POST['nama']." berasal dari mana";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>