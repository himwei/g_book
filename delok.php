<?php
	$id=$_GET['id'];
	$yay=mysqli_connect("127.0.0.1","root","","gbook");
	mysqli_query($yay,"set names 'utf8'");
	mysqli_query($yay,"DELETE FROM `gbook_test` WHERE `gbook_test`.`id` = $id");
	echo "删除成功！";
	echo "<a href='index.php'>返回主页</a>";

?>