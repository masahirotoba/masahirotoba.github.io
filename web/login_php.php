<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transnational//EN">
<html lang="ja">
    <head>
    </head>
    <body>
        <h1>PHPによるログイン認証</h1>
        <?php
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if(strcmp($user,'user') == 0 && strcmp($pass, 'pass') == 0{
              header('Location: success.html');
            } else {
              header('Location: failed.html')+
            }
        ?>
        <p><a href = "../index.html">前に戻る</p>
    </body>
</html>
