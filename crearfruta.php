<?php

include "fruta.php";

$manzana = new Fruta("","");
$papaya = new Fruta("","");

$manzana->set_nombre("Manzana");
$papaya->set_nombre("Papaya");

$freijoa = new Fruta("Freijoa", "verde");

echo $manzana->get_nombre();
echo "<br>";
echo $papaya->get_nombre();
echo "<br>";
echo $freijoa->get_nombre();
