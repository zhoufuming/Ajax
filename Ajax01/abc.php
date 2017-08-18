<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>abc</title>

</head>
<body>
	<?php
		// 这里一般都是先连接数据的~
		// 然后在把数据取出来

		$apple = '苹果';
		$flag = $_GET['param'];
		if ($flag == 1) {
			echo '<div>'.$apple.'</div>';	// 用'..'可以引用其他变量或者是数据库的信息，与js的'++'作用相似 
		}
		else if ($flag == 2) {
			echo '<div>香蕉</div>';
		}
		else {
			echo '<div>橘子</div>';
		}

	?>
</body>
</html>