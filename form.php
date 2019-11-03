<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">

<head>
    <title>PHPpractice</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ここからクイズ -->
    <!-- 任意の問題と回答フォームを作る -->

    <p> 1.私の好きな食べ物は？</p>
    
    <form action="./index.php" method="get">
        <input type="text" name="answer1">
         
        <p>2.私の最強おすすめファンデーションは？</p>
        <input type="checkbox" name="answer2[]" value="Dior">Dior
        <input type="checkbox" name="answer2[]" value="KANEBO">KANEBO
        <input type="checkbox" name="answer2[]" value="ESTEE LAUDER">ESTEE LAUDER
   
        <p>3.私の好きなブランドは？</p>
        <input type="radio" name="answer3" value="frayid">frayid
        <input type="radio" name="answer3" value="stunninglure">stunninglure
        <input type="radio" name="answer3" value="milaowen">mila owen
        <br>
        <input type="submit" value="送信">
    </form>     


</body>
