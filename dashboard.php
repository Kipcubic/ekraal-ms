<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("Location: /index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<p>Welcome</p>
</body>
</html>