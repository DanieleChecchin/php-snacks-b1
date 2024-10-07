<?php

require_once __DIR__ . "/functions/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container ì">
        <form action="snack5.php" method="GET">
            <h2 class="fw-bold my-3">
                Palindrome?
            </h2>
            <div class="mb-3">
                <label for="word" class="form-label">Type a word!</label>
                <input type="text" class="form-control" id="word" name="word" placeholder="enter a word">
            </div>

            <button type="submit" class="btn btn-primary">check</button>
        </form>

    </main>

</body>

</html>