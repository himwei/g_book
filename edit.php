<?php
	echo "<form action='editok.php' method='post' id='form'>";
	
		$id=$_GET['id'];
		$data_name=$_GET['data_name'];
		$data_string=$_GET['data_string'];
		$data_time=$_GET['data_time'];
		$data_ip=$_GET['data_ip'];
		$data_reply=$_GET['data_reply'];
		$data_reply_time=$_GET['data_reply_time'];
		echo "<input type='text' name='id' id='id' placeholder='编号' value='$id'>";
		echo "<input type='text' name='data_name' id='data_name' placeholder='留言人' value='$data_name'>";
		echo "<input type='text' name='data_string' id='data_string' placeholder='留言内容' value='$data_string'>";
		echo "<input type='text' name='data_time' id='data_time' placeholder='留言时间' value='$data_time'>";
		echo "<input type='text' name='data_ip' id='data_ip' placeholder='留言ip' value='$data_ip'>";
		echo "<input type='text' name='data_reply' id='data_reply' placeholder='管理员回复' value='$data_reply'>";
		echo "<input type='text' name='data_reply_time' id='data_reply_time' placeholder='管理员回复时间' value='$data_reply_time'>";
		echo "<input type='submit' name='submit' id='submit' value='提交'>";
	echo "</form>";

?>