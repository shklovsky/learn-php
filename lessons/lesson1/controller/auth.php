<?php

$customer_login = $customer_email = $customer_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_login = $_POST['login'];
    $customer_email = $_POST['email'];
    $customer_password = $_POST['password'];
}

//if (!empty($customer_login) && !empty($customer_email) && !empty($customer_password)) {

if ($customer_login == "shklovsky" && $customer_email = "shklovsky@mail.ru" && $customer_password == "shklovsky") {
    //echo $customer_login . " " . $customer_password . " " . $customer_email;

    setcookie('loggedIn', true);
    setcookie('PHPSESSID', session_id());
    setcookie('login', $customer_login);
    session_start();
    //header('Location: ' . $_SERVER['PHP_SELF']);

    echo 'все ок';
} else {
    echo 'Заполните пустые поля';
}
?>