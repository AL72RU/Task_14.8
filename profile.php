<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Профиль -->

    <form class="form">
        <img class="form_img" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 class="form_full-name" style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a class="form_email" href="#"><?= $_SESSION['user']['email'] ?></a>
        <a class="form_logout" href="vendor/logout.php">Выход</a>
    </form>

</body>
</html>