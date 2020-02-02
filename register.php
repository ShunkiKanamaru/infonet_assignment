<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <meta http-equiv = "content-type" content = "text/html:charset=utf-8">
    <title>ランキング</title>
  </head>
  <body>
    <header>
      ランキング登録
    </header>
    <div class="push">

    </div>
    <?php
    $game_score = $_POST['game_score'];
    $game_score = htmlspecialchars($game_score);
      print "<font size='5'><b>あなたの得点は<br></b></font>";
      print "<font style ='font-size:75px' color ='#ff7f7f'><center><b>$game_score </b></font>";
      print "<font size = '5'><b>点</b></font></center>";
      print "<font size='5'><b>です!! </b></font><br>";
      print "<form class='name' action='register_check.php' method='post'>";
      print '<input name = "game_score" type = "hidden" value = "'.$game_score.'">';
    ?>
      <br><br>
      <font size = "5"><b>ニックネームをつけてください<br></b></font>
      <div class="push_2"></div>
      <input class = "form_size" type="text" name="nickname">
      <input class = "button_size" type="submit" value="送信" onclick="location.href='register_check.php'">
    </form>

    <div class="push_3"></div>

    <input class = "button_set" type="button" value="ゲームに戻る" onclick="history.back()">
    <input class = "button_set" type="button" value="ランキング" onclick="location.href='ranking.php'">
    <div class="push"></div>
    <div class="push"></div>

    <footer>
      Copyright2019
    </footer>
  </body>
</html>
