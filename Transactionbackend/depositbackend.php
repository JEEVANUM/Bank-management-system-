<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']. '\bankpro/connect/conn.php';


if(isset($_POST['submit'])){

	$Account_number= trim(mysqli_real_escape_string($conn,$_POST['account_number']));
	$Amount_to_deposit  = trim(mysqli_real_escape_string($conn,$_POST['amount_to_deposit']));
	$Account_name= trim(mysqli_real_escape_string($conn,$_POST['account_name']));
	$Depositor_name  = trim(mysqli_real_escape_string($conn,$_POST['depositor_name']));

	if(empty($Account_number)||empty($Amount_to_deposit) || empty($Account_name) || empty($Depositor_name)){
		header('Location:\bankpro/bankpage/gathomepage.php? please fill the space ');
		exit();
	}

	else{
		$fetch_data = "SELECT * FROM bnk WHERE username = '".$Account_name."' and '".$Account_number."' ";
		$run_query= mysqli_query($conn,$fetch_data);

		 
		if(mysqli_num_rows($run_query) > 0 ){
			while ($row_data = mysqli_fetch_assoc($run_query)) {
				$time = date('Y-m-d');
				$_SESSION['accountnumber'] = $row_data['accountnumber'];
				$_SESSION['username'] = $row_data['username'];
				$deposit_account = "INSERT INTO deposit(accountnumber,amountdeposit,accountowner,depositorname,dates) VALUES('".$_SESSION['accountnumber']."', '".$Amount_to_deposit."', '".$_SESSION['username']."', '".$Depositor_name."','".$time."' )";
				mysqli_query($conn,$deposit_account);
				
				$_SESSION['totalamount'] = $row_data['totalamount'];
				$update_totalamount =  "UPDATE bnk SET totalamount = '".$Amount_to_deposit."' + '".$_SESSION['totalamount']."'   where username= '".$Account_name."'  ";
				mysqli_query($conn,$update_totalamount);
				header('Location:\bankpro/bankpage/gathomepage.php? u have deposited ');

			}


		}else{
			echo "<h1> Account number or Account name does not exist </h1> ";
		}



	}

}