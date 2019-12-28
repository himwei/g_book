<?php
	$yay=mysqli_connect("127.0.0.1","root","","gbook");
	mysqli_query($yay,"set names 'utf8'");
	$wah=mysqli_query($yay,"select * from gbook_test");
	echo "<table border='1'>";
		echo "<tr>";
			echo "<td>编号</td>";
			echo "<td>留言人</td>";
			echo "<td>留言内容</td>";
			echo "<td>留言时间</td>";
			echo "<td>留言人ip</td>";
			echo "<td>管理员回复</td>";
			echo "<td>管理员回复时间</td>";
			echo "<td>管理员操作</td>";
		echo "</tr>";
		echo "<tr>";
		while($watch=mysqli_fetch_array($wah))
			{	
				for($i=0;$i<=6;$i++)
				{
					echo "<td>";
					echo $watch[$i];
					echo "</td>";
				}
				echo "<td><a href='delok.php?id=$watch[0]'>删除</a>         ";
				echo "<a href='edit.php?id=$watch[0]&data_name=$watch[1]&data_string=$watch[2]&data_time=$watch[3]&data_ip=$watch[4]&data_reply=$watch[5]&data_reply_time=$watch[6]'>编辑</a></td>";
				echo "</tr>";
			}
	echo "</table>";
	



?>