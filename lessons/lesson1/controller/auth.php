<?php

$customer_login = $customer_email = $customer_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_login = $_POST['login'];
    $customer_email = $_POST['email'];
    $customer_password = $_POST['password'];
}

if (!empty($customer_login) && !empty($customer_email) && !empty($customer_password)) {
    echo $customer_login . " " . $customer_password . " " . $customer_email;
} else {
    echo 'Заполните пустые поля';
}
?>