<?php

// user_mail salva la mail inserita dall'utente tramite form
$user_email = $_GET['email'] ?? '';
// alert_class indica la classe da dare all'alert da mostrare
$alert_class = '';
// $alert_message indica il messaggio da visualizzare nell'alert
$alert_message = '';
$show_alert = false;

include_once __DIR__ .'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-2">Inserisci un indirizzo Email</h1>
    <div class="container">
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php if($show_alert): ?>
        <div class="alert mt-2 <?php echo $alert_class ?>" role="alert">
            <?php echo $alert_message ?>
        </div>
        <? endif ?>
    </div>
</body>
</html>