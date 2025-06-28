<?php
// Variabel Global
$varGlobal = 18;

// Fungsi untuk mengakses variabel global dan lokal
function testVar()
{
    $varLokal = 1; // Variabel lokal

    echo "<p>Test variabel di dalam function.</p>";
    echo "Variabel global: " . $GLOBALS['varGlobal'] . "<br>";
    echo "Variabel lokal: $varLokal<br>";
}

testVar();

// Mengakses variabel global di luar fungsi
echo "<p>Test variabel di luar function.</p>";
echo "Variabel global: $varGlobal<br>";

?>


