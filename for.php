<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="icon" href="img/tric_fav.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <header style="background-color:gray">Header</header>
        <section>
            <?php
            if(!empty($_POST['btn_submit'])){
                $amount = 0;
                for($i = 0; $i <= $_POST['limit']; $i++){
                    $amount += $i;
                }
                echo "<p>{$amount}</p>";
            }
            ?>
            <form action="" method="post">
                <p><label for="limit">いくつまで足し込みますか？</label>
                <input type="text" name="limit" id="limit"></p>
                <p><input type="submit" name="btn_submit" value="入力"></p>
            </form>

        </section>
        <footer style="background-color:gray">Footer</footer>
    </body>
</html>