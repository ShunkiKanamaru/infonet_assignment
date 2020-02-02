<?php
$dsn = "mysql:dbname=infonet_assignment;host=localhost";
$user = "root";
$password = "root";
$dbh = new PDO($dsn, $user, $password);
$dbh->query("SET NAMES utf8");

$nickname = $_POST["nickname"];
$game_score = $_POST["game_score"];

$nickname = htmlspecialchars($nickname);
$game_score = htmlspecialchars($game_score);
$sql = 'INSERT INTO ranking(nickname, score)VALUES("'.$nickname.'","'.$game_score.'")';
$stmt = $dbh->prepare($sql);
$data[] = $nickname;
$data[] = $game_score;
$stmt->execute($data);

$dbh = null;
print "<br><br><br><br>";
print "<font size ='5'><center> ";
print "<b> $nickname</b>";
print "さんをランキングに追加しました．<br>";
print "3秒後にゲームに戻ります．<br>";
print "引き続きゲームをお楽しみください．";
print "</center></font>";

?>
<script type="text/javascript">
setTimeout("link()",3000);
function link(){
  location.href = 'http://localhost:8888/infonet_assignment/2048.html';
}


</script>
