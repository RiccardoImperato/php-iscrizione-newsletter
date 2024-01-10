<?php
session_start();

$email = $_GET['email'];
$_SESSION['email'] = $email;

// Funzione per generare l'alert 
function showAlert($arg)
{
    if ($arg !== '' &&  str_contains($arg, '.') && str_contains($arg, '@')) {
        header('Location: thanks.php');
    } elseif ($arg !== '' &&  !str_contains($arg, '.') && !str_contains($arg, '@')) {
        echo "<div class='alert alert-primary w-50' role='alert'> '{$arg}' email non valida, deve avere @ e .</div>";
    }
}
