<!DOC$TYPE HTML PUBLIC"-//W3C//DTD HTML 4.01Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php


$type = $_POST['type'];
$text = $_POST[''.$type.''];

$dsn = 'mysql:dbname=profile;host=localhost';
$user='root';
$password='';
$dbn = new PDO($dsn,$user,$password);
$dbn->query('SET NAMES utf8');
$sql = 'SELECT * FROM profile WHERE '.$type.' LIKE "'.$text.'"';
$stmt = $dbn->prepare($sql);
$stmt->execute();



while(1){

	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		break;
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						
	}
	echo $rec['familyname'];
	echo $rec['givenname'];
	echo $rec['year'];
	echo '年';
	echo $rec['month'];
	echo '月';
	echo $rec['day'];
	echo '日生まれ';
	echo $rec['work'];
	echo $rec['email'];
	echo $rec['introduce'];
	echo '<br/><br/>';

}

$dbn = null;
echo '<br/>';
echo'<input type="button"onclick="history.back()"value = "戻る">';
echo'<br/><br/>';
echo '<a href = kensakumenu.html>検索メニューに戻る</a>';
?>

</body>
</html>