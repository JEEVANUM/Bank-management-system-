<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Login</title>
    
  </head>
  <body>



    <style>
      body{
        background-image: linear-gradient(to right top, #1f260f, #352c01, #532d00, #752415, #940c39);
      }
      .tops{
        margin-top: 120px;
      }
    </style>



  <form action="\bankpro/Transactionbackend/checkbalance.php" method="post">

    <div class="columns">
      <div class="tops column is-offset-4">

          <label for="" class="is-size-5 has-text-white">Account Number</label><br>
          <input type="text" class="input is-primary column is-5" placeholder="Account Number" name="account_number"><br>

          <label for=""  class="is-size-5 has-text-white">Pin Number</label>
          <input type="text" class="input is-primary column is-5 " placeholder="Pin Number" name="pin"><br>


     <div class="mt-5">
      <button class="button is-info px-6  mr-3" type="submit" name="sub">Check Balance</button>
      
    </div>
          

      </div>
    </div>
  </form>

























</body>
</html>
























