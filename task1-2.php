<?php
  function h($str) {
    echo htmlspecialchars($str, ENT_QUOTES, "UTF-8");
  }
  $message = filter_input(INPUT_POST, "message");
  $fruits = ["apple", "orange", "strawberry"];
  $key = in_array($message, $fruits);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <h1>task1-2</h1>
    <form method="post">
      <input type="text" name="message">
      <button>OK</button>
    </form>
    <?php 
      if ($key):
        h("{$message}は配列の中に含まれています");
      elseif (empty($message)):
        h("");
      else:
        h("{$message}は配列の中に含まれていません");
      endif; 
    ?>
  </body>
</html>