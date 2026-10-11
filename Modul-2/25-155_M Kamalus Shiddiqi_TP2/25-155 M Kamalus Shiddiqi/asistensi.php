<?php  
$nilai_mahasiswa =[80,65,90,55,75];
foreach ($nilai_mahasiswa as $nilai) {
    switch ($nilai) {
        case "80":
            echo " Nilai: 80-sangat baik<br>";
            break;
        case "65":
            echo "Nilai: 65-cukup<br>";
            break;
        case "90":
            echo "Nilai: 90-sangat baik<br>";
            break;
        case "55":
            echo "Nilai: 55-tidak lulus<br>";
            break;
        case "75":
            echo "Nilai: 75-baik<br>";
            break;
        default:
            echo "tida ada item  <br>";
            break;
    }
}
$lulus = 0;
$tidak_lulus = 0;
for ($i = 0; $i < 4 ; $i++) {   
    if ($nilai_mahasiswa > 55) {
        $lulus += 1;
    } 
    else {
        $tidak_lulus += 1;
    }
    
}
echo $lulus;
echo $tidak_lulus;
?>