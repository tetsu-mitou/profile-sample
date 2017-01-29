<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
<?php
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
$prifile = htmlspecialchars($introduce);

if($familyname == ''){
	echo'苗字が入力されてません';
}
else {
	echo '苗字 ： ';
	echo $familyname;
}
echo '<br/>';
if($givenname == ''){
	echo '名前が入力されてません';
}
else {
	echo '名前 ： ';
	echo $givenname;
}
echo '<br/>';
print'生年 ： ';
if($year == '生まれた年'){
	print'秘密';
}
else {
	echo $year;
}
echo '<br/>';
print'生月 ： ';
if($month == '生まれた月'){
	print'秘密';
}
else {
	echo $month;
}
echo '<br/>';
print'生日 ： ';
if($day == '生まれた日'){
	print'秘密';
}
else {
	echo $day;
}
echo '<br/>';
print'職業 ： ';
if($work == ''){
	print'秘密';
}
else {
	echo $work;
}
echo '<br/>';
print'メールアドレス ： ';
if($email == ''){
	print'メールアドレスが入力されてません！';
}
else {
	echo $email;
}
echo '<br/>';
print'自己紹介 : ';
if($introduce == ''){
	print'なし';
	echo'<br/>';
}
else {
	
	echo $introduce;
	echo '<br>';
}
echo '<br/>';


if($familyname == '' || $givenname == '' || $year == '生まれた年' || 
$month == '生まれた月' || $day == '生まれた日'|| $email == ""){
	echo '<form>';
	echo '<input type="button"onclick="history.back()"value = "戻る">';
	echo '</form>';
}
else {
	echo '<form method = "post" action="thanks.php">';
	echo '<input name = "givenname" type = "hidden" value = '.$givenname.'>';
	echo '<input name = "familyname" type = "hidden" value = '.$familyname.'>';
	echo '<input name = "year"type = "hidden" value = '.$year.'>';
	echo '<input name = "month"type = "hidden" value = '.$month.'>';
	echo '<input name = "day"type = "hidden"value = '.$day.'>';
	echo '<input name = "work"type = "hidden"value = '.$work.'>';
	echo '<input name = "email"type = "hidden"value = '.$email.'>';
	echo '<input name = "introduce"type = "hidden"value = '.$introduce.'>';
	echo 'これでよろしいですか<br/><br/>';
	echo '<input type="button"onclick="history.back()"value = "戻る">';
	echo '<input type = "submit"value="ＯＫ">';
	echo '</form>';
}

?>
</body>
</html>