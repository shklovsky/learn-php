<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Работа с сессией</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Выйти</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-5">
                <form role="form" method="get" action="/lessons/lesson1/controller/auth.php" id="login-form">

                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" placeholder="Enter login">
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>

                    <!--<div class="checkbox">
                        <label>
                            <input type="checkbox"> Запомнить меня
                        </label>
                    </div>-->

                    <button type="submit" class="btn btn-default">Отправить</button>

                </form>
            </div>
        </div>

        <script src="/lessons/lesson1/js/main.js"  type="text/javascript"></script>
    </body>
</html>