<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$dsn = 'mysql:dbname=profile;host=localhost';
$user='root';
$password='';
$dbn = new PDO($dsn,$user,$password);
$dbn->query('SET NAMES utf8');

$sql = 'SELECT * FROM profile WHERE 1';
$stmt = $dbn->prepare($sql);
$stmt->execute();

$dbn = null;

echo '<form method="post"action="kensaku.php">';
$i = 0;
while(1){
	for($h = $i;$h <= 15 + $i;$h++){
		echo '　';
		if(($i + $h ) % 20 == 0)echo'<br/><br/>';
	}
	$i += $h;
	
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		break;
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						
	}
	if($rec['code'] != ''){
		echo'<button type = "submit"  name = "code" value = "'.$rec['code'].'">'.$rec['familyname'].'　'.$rec['givenname'].'</button>';
	}
	

}
echo '<input name = "type"type = "hidden"value = "code">';
echo '</form>';

?>

<br/>
<br/>
<input type="button"onclick="history.back()"value = "戻る">
<br/><br/>
<a href = kensakumenu.html>検索メニューに戻る</a>

</body>
</html>