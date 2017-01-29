<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
<?php
try
{
$dsn = 'mysql:dbname=profile;host = localhost';
$user = 'root';
$password = '';
$dbn = new PDO($dsn,$user,$password);
$dbn -> query('SET NAMES utf8');


$familyname = $_POST['familyname'];
$givenname = $_POST['givenname'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$work = $_POST['work'];
$email = $_POST['email'];
$introduce = $_POST['introduce'];

$familyname = htmlspecialchars($familyname);
$givenname = htmlspecialchars($givenname);
$year = htmlspecialchars($year);
$month = htmlspecialchars($month);
$day = htmlspecialchars($day);
$work = htmlspecialchars($work);
$email = htmlspecialchars($email);
$introduce = htmlspecialchars($introduce);

echo ''.$familyname.'　'.$givenname.'様の情報を登録いたしました。<br/>';
echo '<br/>';
echo '生年月日：'.$year.'年'.$month,'月'.$day.'日<br/>';
echo '<br/>';

echo 'ご職業：';
if($work == ''){
	echo '非公開';
}
else {
	echo $work;
}
echo '<br/><br/>';

echo '自己紹介文：';
echo '<br/><br/>';
if($introduce == ''){
	echo 'なし<br/>';
}
else {
	echo '『'.$introduce.'』<br>';
}

echo '<br/>';

echo ''.$email.'にメールを送りましたので、ご確認ください<br/>';
echo '<br/>';

$mail_sub='プロフィールを登録しました！';
$mail_body=$familyname."様へ\nプロフィールのご登録ありがとうございました。";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head='From:profiler@yahoo.co.jp';
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email,$mail_sub,$mail_body,$mail_head);

$sql = 'INSERT INTO profile (familyname,givenname,year,month,day,email,work,introduce)VALUES ("'.$familyname.'"
,"'.$givenname.'","'.$year.'","'.$month.'","'.$day.'","'.$email.'","'.$work.'","'.$introduce.'")';

$stmt = $dbn->prepare($sql);
$stmt->execute();

$dbn = null;
}
catch(Exception $e)
{
	echo'ただいま障害により、大変ご迷惑をおかけしております';
}
?>
<br/>
<br/>
<a href = menu.html>管理メニューに戻る</a>
</body>
</html>