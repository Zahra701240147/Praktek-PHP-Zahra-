
<?php //Membuat & Menampilkan Array Associative
      //Associative.php

$mahasiswa = [
        "001" => "Ahmad",
        "002" => "Budi",
        "003" => "Chika",
        "004" => "Dhini",
        "005" => "Erwin"];
        //untuk memasukkan value,kita harus membuat key yang mempresentasikan value nya
        // tanda "=>" dapat diartikan sebagai merujuk
        // "key" => "value"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?> </li>
        <?php endforeach ?>
</body>
</html>