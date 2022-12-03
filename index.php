<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>СПА процедуры</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand">СПА процедуры</a>
            <div class="navbar-wrap">
                <ul class="navbar-menu">
                    <li>
                        <?php
                            if ($_SESSION['user']['login']) {
                                echo '<a href="/login.php"> ' . $_SESSION['user']['login'] . ' </a>';
                            }
                            else {
                                echo '<a href="/login.php">Log in</a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
    <div class="row">
        <div class="box1">
            <img src="/images/spa.jpg" alt="Фото">
        </div>
    </div>
    
    

</body>
</html>