<?php

if (isset($_POST['login'])) {
    $customer_login = $_POST['login'];
    $customer_email = $_POST['email'];
    $customer_password = $_POST['password'];
}



echo $customer_login . "<br>" . $customer_password . "<br>" . $customer_email;
?>