<?php
session_start();
require_once __DIR__ . './functions.php';

$email = '';
$error = null;

if (!empty($_GET['email'])) {

    $email = $_GET['email'];

    if (checkEmail($email)) {
        $_SESSION['email'] = $email;
        header('Location: thanks.php');
        die;
    } else {
        $error = true;
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1 class="my-5">Iscrizione alla Newsletter</h1>
        <form action="index.php" method="GET" class="d-flex justify-content-center align-items-center gap-4">
            <label for="email">Inserisci la tua mail</label>
            <input type="text" name="email" id="email">
            <button class="btn btn-primary py-1">Avanti</button>
        </form>
        <div class="d-flex justify-content-center mt-4">
            <?php if ($error === true) : ?>
                <div class="alert alert-primary mt-3" role="alert">
                    <?php echo 'Email non valida'; ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</body>

</html>