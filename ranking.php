<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/ranking.css">
    <meta http-equiv = "content-type" content = "text/html:charset=utf-8">
    <title>ランキング</title>
  </head>
  <body>
    <header>
      ランキング
    </header>
    <div class="push_2">

    </div>
    <div class = "ranktable">
    <table align = "center"class = "rank" border="1" width = "500" cellspacing = "0" cellpadding = "5" style = "border-style:solid;margin-left:auto;margin-right: auto;border-color:#ffffff">
    <tr>
    <th><font color = "#ffffff" size = "6">rank</font></th>
    <th><font color = "#ffffff" size = "6">name</font></th>
    <th><font color = "#ffffff" size = "6">score</font></th>
    </tr>
    <?php
    $dsn = "mysql:dbname=infonet_assignment;host=localhost";
    $user = "root";
    $password = "root";
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query("SET NAMES utf8");
    $sql = "SELECT nickname,score FROM ranking ORDER BY score DESC";
    $stmt = $dbh->query($sql);
    $count = 1;
    foreach ($stmt as $row){
      if($count >=11){
        break;
      }
      print "<tr>";
      print "<td><font color = '#ffffff' size ='5'>".$count. "</font></td>";
      print "<td><font color = '#ffffff' size ='5'>".$row['nickname']. "</font></td>";
      print "<td><font color = '#ffffff' size = '5'>".$row['score']."</font></td>";
      print "</tr>";
      $count++;
    }

     ?>
    </table>
    <br>

    </div>
    <div class="push_2">

    </div>
    <input class = "button_set" type="button" value="ゲームに戻る" onclick="history.back()">
    <div class="push_3">

    </div>
    <footer>
      Copyright2019
    </footer>
  </body>
</html>
