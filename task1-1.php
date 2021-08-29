<?php

function h($str) {
  echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
$message = filter_input(INPUT_POST, 'message');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <h1>日本の首都は？</h1>
    <form method="post">
      <input type="text" name="message">
      <button>OK</button>
    </form>
    <?php 
      if ($message == '東京'):
        h('正解');
      elseif ($message == ''):
        h('');
      else:
        h('不正解');
      endif;
    ?>
  </body>
</html>