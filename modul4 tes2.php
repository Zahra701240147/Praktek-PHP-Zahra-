
<?php  //Manipulasi Elemen Array
      // addArray.php
      
$hari = ["Senin","Selasa"];

print_r ($hari);
echo "</br>";
$hari[] = "Rabu"; //Menambahkan elemen terakhir pada array
print_r ($hari);
echo "</br>";
$hari[3] = "Kamis"; //menambah elemen pada index yg kita tentukan.
                   // jika index sudah terisi,maka elemen lama akan di ganti dengan elemen baru
print_r($hari);
?>