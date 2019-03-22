<?php
setcookie('login', '', time() + 365 * 24 * 3600, '/', 'p8', false, true);
setcookie('password', '', time() + 365 * 24 * 3600, '/', 'p8', false, true);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP P8E3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="post" action="index.php" enctype="multipart/form-data">
                    <p>Inscription : choisi ton login et ton mot de passe !</p>
                    <div>
                        <label>Login</label>
                        <input type="text" name="login" pattern="^[a-zA-Z]+$">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="text" name="password">
                        <input type="submit" value="submit" pattern="^[a-zA-Z]+$">
                    </div>
                    <?php
                    if (isset($_POST['login']) && isset($_POST['password'])) {
                        setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', 'p8', false, true);
                        setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', 'p8', false, true);
                        ?>
                        <p>Ton login est : <?= $_POST['login']; ?></p>
                        <p>Ton mot de passe est : <?= $_POST['password'];  ?></p>
                        <?php } ?>
                </form>
                <p><a href="http://p8/exercice4">Go to exercice 4</a></p>  
            </div>
        </div>
    </body>
</html>
