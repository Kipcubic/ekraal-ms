<?php
session_start();
include_once("DBConfig.php");
if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $user_email);
    $stmt->execute();
	$row= $stmt->fetch();
	$_SESSION['user_id']=$row['user_id'];
    if($stmt->rowCount() > 0){
        echo "ok";
    } else {
		echo "Consider Registering";
    }
		}
?>