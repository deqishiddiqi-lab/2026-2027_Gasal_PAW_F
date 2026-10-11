<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

echo "height = (";
$keys = array_keys($height);
$last_key = end($keys);
foreach ($height as $name => $val) {
    echo "\"$name\"=>\"$val\"" . ($name !== $last_key ? ", " : "");
}
echo ")<br><br>";
foreach ($height as $name => $val) {
    echo "$name is $val cm tall.<br>";
}
?>