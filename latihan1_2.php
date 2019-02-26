<?php
    function cetak_ganjil($awal, $akhir){
        for ($i=$awal; $i < $awal; $i++) { 
            if ($i%2==1) {
                echo "$i";
            }
        }
    }
    $a=10;
    $b=50;
    echo "<b>Bilangan ganjil diantara $a sampai $b : <br>";
    cetak_ganjil($a, $b); 
?>