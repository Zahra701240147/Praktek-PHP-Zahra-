
<?php  //contoh program dengan variabel static
function varStatic(){
    static $x = 1; //menghasilkan variabel statis
    echo $x;
    $x++;
    echo "</br>";
}
varStatic(); //memanggil varStatic
varStatic();
varStatic();
?>