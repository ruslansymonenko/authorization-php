<?php
error_reporting(-1);
session_start();


//log out functional
if (isset($_GET['do']) && $_GET['do'] == 'logout') {
    unset($_SESSION['auth']);
    $_SESSION['result'] = 'Вы вышли';
    header('Location: index.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./secret.css">
    <title>Secret</title>
</head>

<body>

    <ul>
        <li><a href="./index.php">Main</a></li>
    </ul>

    <?php if (!empty($_SESSION['auth'])) : ?>
        <h1>Это ваша админка</h1>
        <a href="?do=logout">Выйти</a>
    <?php else : ?>
        <h1>Вы не авторизованы</h1>
    <?php endif ?>

</body>

</html>