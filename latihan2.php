<html>
<head>
<title>Contoh Skrip PHP</title>
</head>

<body>
    
<?php 
//Kalkulator latihan 2
$a = 15;
$b = 5;

echo "bilangan 1 = $a"; echo "<br>";
echo "bilangan 2 = $b"; echo "<br>";
echo "Berikut ini perhitungan dari setiap operator"; echo "<br>";

    echo "<br/> PENJUNLAHAN <br/>";
    $c = $a + $b;
    echo "Operator = +"; echo "<br>";
    echo "hasilnya : $a + $b = $c";
    echo "<br/>";
    echo "<br/> PENGURANGAN <br/>";
    $d = $a - $b;
    echo "Operator = -"; echo "<br>";
    echo "hasilnya : $a - $b = $d";
    echo "<br/>";
    echo "<br/> PERKALIAN <br/>";
    $e = $a * $b;
    echo "Operator = *"; echo "<br>";
    echo "hasilnya : $a * $b = $e";
    echo "<br/>";
    echo "<br/> PEMBAGIAN <br/>";
    $f = $a / $b;
    echo "Operator = /"; echo "<br>";
    echo "hasilnya : $a / $b = $f";
    echo "<br/>";
    echo "<br/> MODULUS <br/>";
    $g = $a % $b;
    echo "Operator = %"; echo "<br>";
    echo "hasilnya : $a % $b = $g";
    echo "<br/>";

?>
</body>


</html>