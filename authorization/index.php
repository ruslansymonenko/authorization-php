<?php
// error_reporting(-1);
session_start();

$login = 'admin';
$password = '123';


//Checking our login and password
if (!empty($_POST)) {
    if ($_POST['login'] == $login && $_POST['password'] == $password) {
        $_SESSION['auth'] = 1;
        $_SESSION['result'] = 'Success';
        header('Location: secret.php');
        die();
    } else {
        $_SESSION['result'] = 'Error';
        header('Location: index.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Main</title>
</head>

<body>

    <ul>
        <li><a href="./secret.php">Secret</a></li>
    </ul>

    <h1>Главная станица сайта</h1>

    <!-- Error or succes message -->
    <?php if (isset($_SESSION['result'])) {
        echo $_SESSION['result'];
        unset($_SESSION['result']);
    } ?>

    <form method="post" class="main_form">
        <input type="text" name="login">
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>

</html>