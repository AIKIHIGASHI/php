<?php
  function h($str) {
    echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    echo '<br>';
  }
  $myHand = filter_input(INPUT_POST, 'じゃんけん');
  $yourHand =  ['グー', 'チョキ', 'パー'];
  function judge($myHand, $yourHand) {
    $janken = array_rand($yourHand);
    h("自分:{$myHand}");
    h("相手:{$yourHand[$janken]}");
    switch ($myHand) {
      case 'グー' :
          switch ($yourHand[$janken]) {
            case 'グー':
              h("あいこ");
              break;
            case 'チョキ':
              h("あなたの勝利です！");
              break;
            case 'パー':
              h("あなたの敗北です。。。");
              break;
          }
        break;
      case 'チョキ' :
          switch ($yourHand[$janken]) {
            case 'グー':
              h("あなたの敗北です。。。");
              break;
            case 'チョキ':
              h("あいこ");
              break;
            case 'パー':
              h("あなたの勝利です！");
              break;
          }
        break;
      case 'パー' :
          switch ($yourHand[$janken]) {
            case 'グー':
              h("あなたの勝利です！");
              break;
            case 'チョキ':
              h("あなたの敗北です。。。");
              break;
            case 'パー':
              h("あいこ");
              break;
          }
        break;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <form method="post" action="task1-4.php">
      <select name="じゃんけん">
        <option value="グー">グー</option>
        <option value="チョキ">チョキ</option>
        <option value="パー">パー</option>
      </select>
      <br>
      <button type="submit" name="submit">じゃんけん！</button>
    </form>
    <?php 
      if (isset($_POST['submit'])) {
        judge($myHand, $yourHand);
      }
    ?>
  </body>
</html>