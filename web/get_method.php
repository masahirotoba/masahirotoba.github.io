<!DOCTYPE html>
<html lang="ja">
    <head>
    </head>
    <body>
        <h1>GETメソッドによるパラメータ渡し</h1>
        <?php
            $arg1 = $_GET['arg1'];
            $arg2 = $_GET['arg2'];
            $result = $arg1 + $arg2;
            echo $result;
        ?>
        <p><a href = "../index.html">前に戻る</p>
    </body>
</html>
