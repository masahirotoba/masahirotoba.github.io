<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transnational//EN">
<html lang="ja">
    <head>
    </head>
    <body>
        <h1>POSTメソッドによるパラメータ渡し</h1>
        <?php
            $arg1 = $_POST['arg1'];
            $arg2 = $_POST['arg2'];
            $result = $arg1 + $arg2;
            echo $result;
        ?>
        <p><a href = "../../index.html">前に戻る</p>
    </body>
</html>
