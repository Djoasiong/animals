<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\AnimalRepository;

$animals = (new AnimalRepository())->findAllOrderByName();

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Random animal</title>
    </head>
    <body>
        <div class="container">
            <p><a href="index.php">Back</a></p>
            <h1>Random animal</h1>
            <!-- TODO -->
            <?php 
                $random = array_rand($animals); ?>
                    <p class="fw-bold">
                <!-- Not implemented yet. -->
                <?= implode("<br>",$animals[$random]) ?>
                </tbody>
        </div>
    </body>
</html>
