<?php 
    function Factorial($n){ 
        $faktorial = 1; 
        for ($i = 1; $i <= $n; $i++){ 
        $faktorial = $faktorial * $i; 
        } 
        return $faktorial; 
    } 
    $n = $_GET['nilai']; 
    $hasil = Factorial($n); 
    echo "Faktorial = $hasil";
?> 