<?php
require_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container d-flex align-items-center justify-content-center flex-column vh-100">
        <h1 class="text-secondary">Strong Password Generator</h1>
        <h2 class="text-white">Genera una password sicura</h2>
        <form class="w-75 h-50 bg-light mt-3 rounded position-relative p-4">
            <div class="mb-3 d-flex justify-content-between">
                <label for="password-length" class="form-label">Password Length:</label>
                <input type="text" class="form-control w-50" id="password-length" name="password-length">
            </div>
            <h3><?php echo $userPassword; ?></h3>
            <button type="submit" class="btn btn-primary position-absolute bottom-0 mb-4">Done</button>
        </form>
    </div>
</body>

</html>