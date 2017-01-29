<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
<form method = "post"action = "check.php">
苗字を入力してください<br/>
<input name = "familyname"type = "text"style = "width:100px"><br/>
<br/>

名前を入力してください<br/>
<input name = "givenname"type = "text"style = "width:100px"><br/>
<br/>

<select name = "year">
<option>生まれた年</option>
<?php
	$this_year = date("Y");
	$end_year = $this_year - 80;
	$y = $this_year - 5;
	while($y >= $end_year){
		echo "<option value = '$y'>西暦{$y}</option>";
		$y--;
	}
?>
</select>
<br/>

<br/>
<select name = "month">
<option>生まれた月</option>
<?php
	for($i = 1;$i <= 12;$i++){
		echo "<option value = '$i'>{$i}月</option>";
	}
?>
</select>
<br/>

<br/>
<select name = "day">
<option>生まれた日</option>
<?php
	for($i = 1;$i <= 31;$i++){
		echo "<option value = '$i'>{$i}日</option>";
	}
?>
</select>
<br/>

<br/>
職業を入力してください<br/>
<input name = "work"type = "text"style = "width:300px">
<br/>

<br/>
メールアドレスを入力してください<br/>
<input name = "email"type = "text"style = "width:300px"><br/>
<br/>
好きなことや、苦手なことなどの自分の紹介文を書いてください。
<p>
<textarea rows = "10" cols = "40" name = "introduce"></textarea><br/>
</p>


<input type = "submit"value = "送信">
<br/>
<br/>
<a href = "menu.html">メニューに戻る<a>
</form>
</body>
</html>