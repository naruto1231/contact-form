<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>ファイルにフォームの文字列を書き込む</title>
</head>
<body>
<form method="post" action="write.php">
<textarea name="contents" cols="40" rows="20"></textarea>
<input type="submit" value="送信">
</form>

<?php
$contents = $_POST['contents'];
if ($contents) {
  $fp = fopen('write.txt', 'w');
  fputs($fp, $contents);
  fclose($fp);
  print "書き込み完了しました。";
}
?>

</body>
</html>
