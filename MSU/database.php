<?php
	$link = mysqli_connect("localhost","root","12345678","msu");
	if (!$link)
	{
		echo "MySQL Error: " . mysqli_connect_error();
	}
?>