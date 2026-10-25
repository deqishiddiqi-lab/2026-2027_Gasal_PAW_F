<!DOCTYPE html>
<html>
<head>
    <title>Register - Self Submission</title>
    <style>
        .field { margin-bottom: 10px; }
        .field label { display: inline-block; width: 120px; }
        .error { color: red; font-weight: bold; }
        legend{border: 2px solid blueviolet;}
        fieldset{border: 2px solid skyblue;}
    </style>
</head>
<body>
    <h1>Register</h1>
    <fieldset>
        <legend>Person Details</legend>
        
        <?php
        $errors = array();

        // Cek apakah form sudah di-submit (berdasarkan tombol submit atau keberadaan data POST)
        if (isset($_POST['submit'])) {
            require 'validate.inc';

            // Jalankan fungsi validasi untuk field-field yang diperlukan
            validateName($errors, $_POST, 'surname');
            validateEmail($errors, $_POST, 'email');
            validatePassword($errors, $_POST, 'passwd');
            validateState($errors, $_POST, 'state');

            // Jika ada error validasi
            if ($errors) {
                echo '<h2 class="error">Invalid, correct the following errors:</h2>';
                foreach ($errors as $field => $error) {
                    echo "<span class=\"error\">- <b>$field</b> $error</span><br/>";
                }
                echo "<br/>";
                
                // Tampilkan kembali form beserta isian data sebelumnya (Langkah #7 & #8)
                include 'form.inc';
            } else {
                // Jika tidak ada error sama sekali (Sukses)
                echo '<h3>Posted Data:</h3>';
                foreach ($_POST as $key => $value) {
                    if ($key !== 'submit') {
                        echo "($key) => (" . htmlspecialchars($value) . ")<br/>";
                    }
                }
            }
        } else {
            // Pertama kali halaman dibuka (belum submit): tampilkan form kosong
            include 'form.inc';
        }
        ?>

    </fieldset>
</body>
</html>