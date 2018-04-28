<?php
include("lang/setlang.php");
define('PACKAGE', 'index');

// gettext setting
bindtextdomain(PACKAGE, 'lang'); // or $your_path/lang, ex: /var/www/test/lang
textdomain(PACKAGE);
?>
<html>
<head>
	<title><?php echo _('クラッシュダンプ解析機'); ?></title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="/css/main.css" />
	<script>
		$(document).ready(function(){

		});
	</script>
</head>
<body>
<p><?php echo _('送信方法を選択してください。'); ?></p>
<hr>
<form action="result.php" method="post" enctype="multipart/form-data">
	<input type="radio" name="method" value="buffer" checked> <?php echo _('クラッシュダンプをコピペしてください'); ?>
	<br>
	<pre>----------------------<?php echo _('レポートデータを下に入力してください'); ?>-----------------------
===<?php echo _('BEGIN CRASH DUMP'); ?>===
<textarea name="buffer" cols="100" rows="30"></textarea>
===<?php echo _('END CRASH DUMP'); ?>===
	</pre>
	<hr>
	<input type="radio" name="method" value="file"> <?php echo _('{試験的} クラッシュダンプファイルのアップロード'); ?><br>
	<input type="file" name="file"><br>
	<hr>
	<input type="submit">
	<input type="checkbox" name="api"> <?php echo _('JSONとして出力'); ?>
</form>
<?php readfile("../ad.txt");?>
</body>
</html>

