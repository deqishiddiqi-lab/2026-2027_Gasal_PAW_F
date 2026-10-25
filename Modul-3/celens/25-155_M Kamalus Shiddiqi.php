<?php
$pasar_buah = array{
	array("Alpukat","20"),
	array("Anggur","12"),
};
$total_buah = count($pasar_buah);
$pasar_sayur = array{
	array("Bawang Bombay","0"),
	array("kubis","4"),
	array("wortel","23"),
	array("Bayam","2"),
};
$total_sayur = count($pasar_sayur);
echo ")<br><br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
		<th>No<th>	
        <th>Nama</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>status</th>
      </tr>";

foreach ($students as $row) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo ")<br><br>";
echo $total_buah;
echo $total_sayur;
?>