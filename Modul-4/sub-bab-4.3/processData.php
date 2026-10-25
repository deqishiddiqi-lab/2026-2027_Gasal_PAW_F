<h3>Posted data: </h3>
<?php
// Menampilkan seluruh data yang dikirim dengan foreach (Langkah 4.3 nomor 2)
foreach ($_POST as $key => $value) {
    echo "($key) => ($value)<br/>";
}

echo "<hr/>";

// Validasi sederhana (Langkah 4.3.1)
if (file_exists('validate.inc')) {
    require 'validate.inc';
    $errors = array();
    validateName($errors, $_POST, 'surname');
    
    if ($errors) {
        echo 'Errors:<br/>';
        foreach ($errors as $field => $error) {
            echo "$field $error<br/>";
        }
    } else {
        echo 'Data OK!';
    }
}
?>