<?php

	
	$data_name=$_POST['data_name'];
	$id=$_POST['id'];
	$data_string=$_POST['data_string'];
	date_default_timezone_set("PRC");
	$data_ip=$_POST['data_ip'];
	$data_reply=$_POST['data_reply'];
	$data_reply_time=date("Y-m-d H:i:s");
	$data_time=$_POST['data_time'];
	$yay=mysqli_connect("127.0.0.1","root","","gbook");
	mysqli_query($yay,"set names 'utf8'");
	var_dump(mysqli_query($yay,"UPDATE `gbook_test` SET `data_name` = '$data_name', `data_string` = '$data_string', `data_time` = '$data_time', `data_ip` = '$data_ip', `data_reply` = '$data_reply', `data_reply_time` = '$data_reply_time' WHERE `gbook_test`.`id` = $id;"));
	echo "编辑成功！";
	echo "<a href='index.php'>返回主页</a>";
?>