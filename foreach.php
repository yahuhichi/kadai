<?php

$persons = array(
    array('名前' => '佐藤', '住所' => '東京', '電話' => '080-1234-5678', '趣味' => 'ビリヤード'),
    array('名前' => '田中', '住所' => '大阪', '電話' => '090-1234-5678', '趣味' => 'ゲーム'),
    array('名前' => '齋藤', '住所' => '宮城', '電話' => '080-8765-4321', '趣味' => '家庭菜園'),
    array('名前' => '中村', '住所' => '福岡', '電話' => '070-1234-5678', '趣味' => '旅行')
);

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="icon" href="img/tric_fav.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <header style="background-color:gray">Header</header>
        <section>
            <table class="table table-bordered">
                <tr>
                    <th>名前</th>
                    <th>住所</th>
                    <th>電話</th>
                    <th>趣味</th>
                </tr>
            <?php
            foreach($persons as $person){
                echo "<tr>";
                    foreach($person as $value){
                        echo "<td>".$value."</td>\n";
                    }
                echo "</tr>\n";
            }
            ?>
            </table>
        </section>
        <footer style="background-color:gray">Footer</footer>
    </body>
</html>