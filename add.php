<?php
	echo "<form action='addok.php' method='post' id='form'>";
		echo "<input type='text' name='data_name' id='data_name' placeholder='留言人'>";
		echo "<input type='text' name='data_content' id='data_content' placeholder='留言内容'>";
		$ip1=gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$ip= gethostbyname($ip1);
		echo "<input type='hidden' name='ip' id='ip' value='$ip'>";
		echo "<input type='submit' name='submit' id='submit' value='提交'>";
	echo "</form>";

?>