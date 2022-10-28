<?php
$v1="insert into base values(\"abc\",10)";
require 'conn.php';
$v2=mysqli_query($conn,$v1);
if($v2){
	echo "successfull";

}
else{
	echo "failed";
}


?>