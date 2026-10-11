<?php
$fruits = array("Avocado", "Blueberry", "Cherry");


$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Fig";
$fruits[] = "Grape";
$fruits[] = "Honeydew";

echo "fruits = (\"" . implode('", "', $fruits) . "\")<br>";
$max_index = count($fruits) - 1;
echo "Nilai dengan indeks tertinggi: " . $fruits[$max_index] . "<br><br>";

array_splice($fruits, 1, 1);

echo "Data Blueberry dihapus.<br>";
echo "fruits = (\"" . implode('", "', $fruits) . "\")<br>";
$max_index = count($fruits) - 1;
echo "Nilai dengan indeks tertinggi: " . $fruits[$max_index];
?>