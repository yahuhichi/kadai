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
    if(!empty($_POST['btn_submit'])){
        $number = $_POST['num'];
        while($number >= 0){
            echo "<p>{$number}</p><br/>";
            $number -= 2;
        }
    }
    ?>
    <form action="" method="post">
        <p><label for="a">開始の数字は何ですか？</label>
        <input type="text" id="num" name="num" value=""></p>
        <p><input type="submit" name="btn_submit" value="計算開始"></p>
    </form>
</body>
</html>