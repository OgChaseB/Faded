

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<header>
        <div class="nav-container">
            <a href="index.html" class="logo">Faded</a>
            <a href="index.html" class='nav'>Вернуться назад</a>
        </div>
    </header>
    <!-- <div class="main"> -->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <div class="login_block">
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль" required>
        <input type="password" name="password_confirm" placeholder="Введите код" required><br>
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href=".//login.php">Авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        </div>
        
    </form>
        <!-- </div> -->
</body>
</html>