<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP第5章課題</title>
</head>

<body>
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
  $score_amount = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
  $score_average = $score_amount / 10;
  echo '合計点は' . $score_amount . 'です。<br>';
  echo '平均点は' . $score_average . 'です。';
  ?>
</body>

</html>