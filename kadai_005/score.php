<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>
        <?php
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;
        $total_score = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
        echo $total_score;
        echo"<br>";

        $average_score = $total_score/10;
        echo $average_score;

        ?>
    </p>
</body>
</html>