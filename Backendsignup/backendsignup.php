<?php 
session_start();
 
include_once $_SERVER['DOCUMENT_ROOT'].'\bankpro/connect/conn.php';


if(isset($_POST['sub'])){
	$username = trim(mysqli_real_escape_string($conn,$_POST['username']));

	$Email = trim(mysqli_real_escape_string($conn,$_POST['email']));

	$pin = trim(mysqli_real_escape_string($conn,$_POST['pin']));

	$phone_number = trim(mysqli_real_escape_string($conn,$_POST['phone_number']));

	$birth_date = trim(mysqli_real_escape_string($conn,$_POST['birth_date']));

	$location = trim(mysqli_real_escape_string($conn,$_POST['location']));

	$password = trim(mysqli_real_escape_string($conn,$_POST['password']));

	$password_pass = trim(mysqli_real_escape_string($conn,$_POST['password_pass']));
	
	

	if(empty($username)||empty($Email)||empty($pin)||empty($phone_number)||empty($birth_date)||empty($location)||empty($password)||empty($password_pass)){
		header('Location:\bankpro/login_signup/signup.php? please fill the space ');
		exit();
	}


	 elseif (preg_match('/[0-9]/',$username)){
		header('Location:\bankpro/login_signup/signup.php? username must be words');
		exit();
	 }

	elseif (preg_match('/[A-Za-z]/',$pin)) {
		header('Location:\bankpro/login_signup/signup.php? pin must be in digit');
		exit();
	}

	elseif (preg_match('/[A-Za-z]/',$phone_number)) {
		header('Location:\bankpro/login_signup/signup.php? pin must be in digit');
		exit();
	}

	elseif ($password != $password_pass) {
		header('Location:\bankpro/login_signup/signup.php?password does not match');
		exit();
	}

	else{

		$statement = mysqli_stmt_init($conn);
		$check_databse = "SELECT * FROM bnk WHERE username = ? OR email = ? ";

		if(!mysqli_stmt_prepare($statement, $check_databse)){
			header('Location:\bankpro/login_signup/signup.php?ERROR WITH THE DATABASE ');
			exit();
		}else{
			
			mysqli_stmt_bind_param($statement,'ss',$username,$Email);
			mysqli_stmt_execute($statement);

			$check_data = mysqli_stmt_get_result($statement);
			if($row_data = mysqli_fetch_assoc($check_data)){
				header('Location:\bankpro/login_signup/signup.php?USERNAME AND EMAIL EXIST  ');
				exit();
			}else{
				
				$insert_into_database = "INSERT INTO bnk(username,email,passwords,accountnumber, pin_number,totalamount,airtime,bvn,phonenumber,birthdate,debitcard,location) VALUES(?,?,?,?,?,0,0,?,?,?,?,?)";
				
				if(!mysqli_stmt_prepare($statement, $insert_into_database)){
					header('Location:\bankpro/login_signup/signup.php?ERROR WITH THE DATABASE INSERTING DATA ');
					exit();
				}else{
					$accountNumber = rand();
					$bvn = rand();
					$debit_card = rand();

					$bvn = rand(11,233546363565363);
					$debit_card = rand(11,52434634635636);

					$password_hash = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($statement,'sssiisssss',$username,$Email,$password_hash,$accountNumber,$pin,$bvn,$phone_number,$birth_date,$debit_card,$location);
					mysqli_stmt_execute($statement);

					header('Location:\bankpro/login_signup/login.php? WELCOME  ');
					exit();
				}
			}

		}

	}
}
			

		

	

