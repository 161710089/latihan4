<?php

require_once 'mobil.php';
$mobil =new mobil ('mitsubishi','ss','1250cc','100.000.000');
echo "merk.. ".$mobil->merk."<br>";
echo "tipe.. ".$mobil->tipe."<br>";
echo "kecepatan.. ".$mobil->kecepatan."<br>";
echo "harga.. ".$mobil->harga."<br>";

  ?>