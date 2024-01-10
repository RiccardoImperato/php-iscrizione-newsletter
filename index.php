<?php
include './functions.php'
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
        <form action="index.php" method="GET">
            <label for="email">Inserisci la tua mail</label>
            <input type="text" name="email" id="email">
            <button class="btn btn-primary py-1">Avanti</button>
        </form>
        <div class="d-flex justify-content-center mt-4">
            <?php
            showAlert($email);
            ?>
        </div>
    </div>
</body>

</html>