<?php
$arr1 = array("A");
echo "Array awal: (\"A\")<br>";
array_push($arr1, "B");
echo "Hasil array_push: " . implode(" ", $arr1) . "<br><br>";

$arr2_a = array("A", "B");
$arr2_b = array("C");
echo "Array awal: (\"A\", \"B\") digabung dengan (\"C\")<br>";
$arr2_merged = array_merge($arr2_a, $arr2_b);
echo "Hasil array_merge: " . implode(" ", $arr2_merged) . "<br><br>";

$arr3 = array("x" => 1, "y" => 2);
echo "Array awal: (\"x\" => 1, \"y\" => 2)<br>";
$arr3_vals = array_values($arr3);
echo "Hasil array_values: " . implode(" ", $arr3_vals) . "<br><br>";

$arr4 = array("A", "B", "C");
echo "Mencari \"B\" pada array: (\"A\", \"B\", \"C\")<br>";
$key = array_search("B", $arr4);
echo "Hasil array_search: " . $key . "<br><br>";

$arr5 = array(0, 1, false, 2, "", 3, "array");
echo "Array awal: (0, 1, false, 2, \"\", 3, \"array\")<br>";
$arr5_filtered = array_filter($arr5);
echo "Hasil array_filter: ";
foreach ($arr5_filtered as $val) {
    echo ($val === true ? "true" : $val) . " ";
}
echo "<br><br>";

$arr6 = array(3, 1, 2);
echo "Array awal: (3, 1, 2)<br>";

$arr6_sort = $arr6;
sort($arr6_sort);
echo "Hasil sort: " . implode(" ", $arr6_sort) . "<br>";

$arr6_rsort = $arr6;
rsort($arr6_rsort);
echo "Hasil rsort: " . implode(" ", $arr6_rsort) . "<br><br>";

$arr7 = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43)<br>";

$arr_asort = $arr7;
asort($arr_asort);
echo "Hasil asort: ";
$res = array();
foreach($arr_asort as $k => $v) { $res[] = "$k=> $v"; }
echo implode(", ", $res) . "<br>";

$arr_ksort = $arr7;
ksort($arr_ksort);
echo "Hasil ksort: ";
$res = array();
foreach($arr_ksort as $k => $v) { $res[] = "$k=> $v"; }
echo implode(", ", $res) . "<br>";

$arr_arsort = $arr7;
arsort($arr_arsort);
echo "Hasil arsort: ";
$res = array();
foreach($arr_arsort as $k => $v) { $res[] = "$k=> $v"; }
echo implode(", ", $res) . "<br>";

$arr_krsort = $arr7;
krsort($arr_krsort);
echo "Hasil krsort: ";
$res = array();
foreach($arr_krsort as $k => $v) { $res[] = "$k=> $v"; }
echo implode(", ", $res);
?>