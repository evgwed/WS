<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Войти</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6"></div>
            <div class="col-lg-6 col-md-12">
                <h3 class="text-center">Введите свои данные:</h3>
                <form action="AuthHandler.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Логин</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
                <p>У вас нет аккаунта? Тогда <a href="Registration.php">зарегистрируетесь</a>!</p>
            </div>
            <div class="col-lg-3 col-md-6"></div>
        </div>
    </div>
</main>
</body>
</html>
