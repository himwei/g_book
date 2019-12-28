<?php
	$data_name=$_POST['data_name'];
	$data_string=$_POST['data_content'];
	$ip=$_POST['ip'];
	$yay=mysqli_connect("127.0.0.1","root","","gbook");
	date_default_timezone_set("PRC");
	$data_time=date("Y-m-d H:i:s");
	mysqli_query($yay,"set names 'utf8'");
	mysqli_query($yay,"INSERT INTO `gbook_test` (`id`, `data_name`, `data_string`, `data_time`, `data_ip`, `data_reply`, `data_reply_time`) VALUES (NULL, '$data_name', '$data_string', '$data_time', '$ip', '管理员暂无回复', '$data_time');");
	echo "回复成功！";
	echo "<a href='index.php'>返回主页</a>";

?>