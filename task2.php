<?php
$fizz = filter_input(INPUT_POST, 'fizz');
$buzz = filter_input(INPUT_POST, 'buzz');
$error = '';

if (empty($fizz && $buzz)) {
  $error = '未入力です';
} elseif (!preg_match("/^[0-9]+$/", $fizz | $buzz)) {
  $error = '半角整数のみです';
}

function fizzbuzz($fizz, $buzz)
{
  for ($i = 1; $i < 100; $i++) {
    if ($i % $fizz === 0 && $i % $buzz  === 0) {
        h("{$i} FizzBuzz");
    } elseif ($i % $fizz === 0) {
        h("{$i} Fizz");
    } elseif ($i % $buzz  === 0) {
        h("{$i} Buzz");
    }
  }
}

function h($value) {
  echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  echo '<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form method="post">
    FizzNum<input type="text" name="fizz"><br>
    BuzzNum<input type="text" name="buzz"><br>
    <button name="submit">実行</button><br>
  </form>
  
  <?php 
  if (isset($_POST['submit'])) {
    empty($error) ? fizzbuzz($fizz, $buzz) : h($error);
  }
  ?>
</body>
</html>