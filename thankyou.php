<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container d-flex align-items-center justify-content-center flex-column vh-100 text-white text-center">
        <div>
            <?php if (!empty($_SESSION['userpassword'])) { ?>
            <h3>Grazie per aver utilizzato il nostro servizio!</h3>
            <h3>La tua password è:</h3>
            <h3 class="my-3"><?php echo $_SESSION['userpassword']; ?></h3>
            <span>Per tornare alla homepage, clicca <a href="./index.php">qui</a></span>
            <?php } ?>
        </div>
    </div>
</body>
</html>