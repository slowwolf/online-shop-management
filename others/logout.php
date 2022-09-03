<?php
	setcookie("clt", null, time()-3600, "/");
	header("Location: index.php")
?>