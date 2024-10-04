<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if ((strlen($name) > 3) && str_contains($email, ".") && str_contains($email, "@") && is_numeric($age) === true) {
    echo ('accesso riuscito');
} else {
    echo ('accesso negato');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container my-5">
        <form action="" method="GET">

            <!--name-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>

            <!--mail-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>

            <!--age-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="age">
            </div>

            <!--Bottoni-->
            <button type="submit" class="btn btn-success me-5">Send</button>
            <button type="reset" class="btn btn-danger">Reset</button>


        </form>
    </main>

</body>

</html>


<!--Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare " Accesso riuscito", altrimenti "Accesso negato" -->