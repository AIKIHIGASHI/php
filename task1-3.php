<?php
  function h($str) {
    echo htmlspecialchars($str, ENT_QUOTES, "UTF-8");
  }
  $questions = [
    '問題' => '日本の首都は？'
  ];
  $answers = [
    '回答1' => '大阪',
    '回答2' => '北海道',
    '回答3' => '箱根',
    '回答4' => '東京',
  ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <h1>
      <?php foreach ($questions as $key => $question): ?>
        <div><?php h("{$key} {$question}"); ?></div>
      <?php endforeach; ?>
    </h1>
    <?php foreach ($answers as $key => $answer): ?>
      <div><?php h("{$key} {$answer}"); ?></div>
    <?php endforeach; ?>
  </body>
</html>