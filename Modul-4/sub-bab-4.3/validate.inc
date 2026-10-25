<?php
// Validasi Surname (hanya alfabet, tanda petik, dan tanda hubung)
function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z'-]+$/";
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'required';
    } else if (!preg_match($pattern, trim($field_list[$field_name]))) {
        $errors[$field_name] = 'invalid format (hanya huruf)';
    }
}

// Validasi Email
function validateEmail(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'required';
    } else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'format email tidak valid';
    }
}

// Validasi Password (minimal 6 karakter)
function validatePassword(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) {
        $errors[$field_name] = 'required';
    } else if (strlen($field_list[$field_name]) < 6) {
        $errors[$field_name] = 'minimal 6 karakter';
    }
}

// Validasi State (tidak boleh bernilai default -1)
function validateState(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || $field_list[$field_name] == "-1") {
        $errors[$field_name] = 'harus dipilih salah satu';
    }
}
?>