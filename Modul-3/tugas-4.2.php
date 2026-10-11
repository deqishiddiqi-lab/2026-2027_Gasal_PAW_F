<?php
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");
echo "weight = (";
$keys_w = array_keys($weight);
$last_key_w = end($keys_w);
foreach ($weight as $name => $val) {
    echo "\"$name\"=>\"$val\"" . ($name !== $last_key_w ? ", " : "");
}
echo ")<br><br>";
$names = array_keys($weight);
$values = array_values($weight);
$arrlength = count($weight);

for ($x = 0; $x < $arrlength; $x++) {
    echo $names[$x] . " is " . $values[$x] . " kg.<br>";
}
?>