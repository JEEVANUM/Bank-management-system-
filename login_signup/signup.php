<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>SIGN UP</title>
    
  </head>
  <body> 
  	<style>
  		 body{
  		 	background-image: linear-gradient(to right top, #1c1d1f, #032449, #002874, #00269c, #1a10be);
  		 }
  	</style>



 <div class="columns">
 	<div class="column is-offset-4">
 		 <h1 class="title has-text-white pt-4">ONLINE GAT BANK </h1>
 	</div>
</div>


<form action="\bankpro/Backendsignup/backendsignup.php"   method="post">
	<div class="columns">
		<div class="column is-offset-4">
			<label for="" class="is-size-5 has-text-primary">Username</label><br>
			<input type="text" class="input is-outlined  column is-5" name="username"><br>

			<label for="" class="is-size-5 has-text-primary">Email</label><br>
			<input type="text" class="input is-outlined  column is-5" name="email"><br>
			
			<label for="" class="is-size-5 has-text-primary">4 digit pin</label><br>
			<input type="text" class="input is-outlined  column is-5" name="pin"><br>

			<label for="" class="is-size-5 has-text-primary">Phone Number</label><br>
			<input type="text" class="input is-outlined  column is-5" name="phone_number"><br>

			<label for="" class="is-size-5 has-text-primary">Birth date</label><br>
			<input type="date" class="input is-outlined  column is-5"name="birth_date"><br>

			<label for="" class="is-size-5 has-text-primary">
			Address</label><br>
			<input type="text" class="input is-outlined  column is-5" name="location"><br>

			<label for="" class="is-size-5 has-text-primary">Password</label><br>
			<input type="text" class="input is-outlined  column is-5" name="password"><br>

			<label for="" class="is-size-5 has-text-primary">Re-Enter Password</label><br>
			<input type="text" class="input is-outlined  column is-5" name="password_pass"><br>

		<div class="mt-5">
			<button class="button is-primary px-6 mr-3"name="sub" type="submit" >Signup</button>
			<button class="button is-inverted is-outlined px-6">Login</button>
		</div>
			

		</div>
	</div>

</form>
</body>
</html>



