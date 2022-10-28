<?php 

if (isset($_POST['logout'])) {
	session_start();
	session_destroy();


header('Location:\bankpro/bankpage/gathomepage.php');
exit();
}