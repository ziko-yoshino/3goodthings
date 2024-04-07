<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3goodthings</title>
</head>

<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
    よかったこと1つめ: <textarea name="goodthingfirst" cols="10" rows="10"></textarea><br>
    理由: <textarea name="reasonfirst" cols="30" rows="10"></textarea><br>
    よかったこと2つめ: <textarea name="goodthingsecond" cols="10" rows="10"></textarea><br>
    理由: <textarea name="reasonsecond"  cols="30" rows="10"></textarea><br>
    よかったこと3つめ: <textarea name="goodthingthird" cols="10" rows="10"></textarea><br>
    理由: <textarea name="reasonthird" cols="30" rows="10"></textarea><br>
	<button type="submit">送信</button>
</form>
</body>
</html>