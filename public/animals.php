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
        <title>Animals</title>
    </head>
    <body>
        <div class="container">
            <p><a href="index.php">Back</a></p>
            <h1>Animals</h1>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Latin name</th>
                        <th>Slug</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animals as $animal) { ?>
                        <tr>
                            <td><?= $animal['name'] ?></td>
                            <td><?= $animal['latin_name'] ?? '-' ?></td>
                            <td><?= $animal['slug'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
