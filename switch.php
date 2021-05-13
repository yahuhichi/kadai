<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define('LINE', '30');

if(!empty($_POST['btn_submit'])){
    switch($_POST['score']){
        case ($_POST['score'] < LINE):
            echo "赤点";
        break;
        case '100':
            echo "満点";
        break;
        default:
            echo "合格";
        break;
    }
}
?>
<form action="" method="post">
    <p><label for="score">得点は？</label>
    <input type="text" name="score" id="score"></p>
    <p><input type="submit" name="btn_submit" value="入力"></p>
</form>
</body>
</html>