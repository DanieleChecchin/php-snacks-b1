<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Utilizzare questo array: https://pastebin.com/CkX3680A. 
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
     e i PM in un rettangolo verde.-->

    <main class="container my-5">

        <?php foreach ($db as $key => $list) { ?>
            <h2>
                <?= $key; ?>
            </h2>
            <?php foreach ($list as $singleKey => $singleList) { ?>
                <ul>
                    <li>
                        <?= $singleList['name'] ?> <?= $singleList['lastname'] ?>
                    </li>
                </ul>
            <?php } ?>
        <?php } ?>




    </main>


</body>

</html>