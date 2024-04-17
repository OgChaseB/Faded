

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
    <form action="vendor/signin.php" method="post">
        <div class="login_block">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"required><br>
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>!
        </p>
        <?php
            
        ?>
        </div>
        
    </form>

</body>
</html>