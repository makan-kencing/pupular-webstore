<?php declare(strict_types=1); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? '' ?></title>


</head>
<body>
    <?php include __DIR__ . "/partials/_header.php" ?>

    <?= $content ?? '' ?>

    <?php include __DIR__ . "/partials/_footer.php" ?>
</body>
</html>