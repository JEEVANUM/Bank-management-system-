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
        background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);


      }
      .tops{
        margin-top: 120px;
      }
    </style>



  <form action="\bankpro/Backendlogin/backendlogin.php"  method="post">
    <div class="columns">
      <div class="tops column is-offset-4">

          <label for="" class="is-size-5 has-text-white">Username or Email</label><br>
          <input type="text" class="input is-primary column is-5" placeholder="Username or Email " name="username"><br>

          <label for=""  class="is-size-5 has-text-white">Password</label><br>
          <input type="password" class="input is-primary column is-5 " placeholder="Password" name="password"><br>


     <div class="mt-5">
      <button class="button is-primary px-6  mr-3" type="submit" name="sub">Login</button>
      <button class="button is-inverted is-outlined px-6">Forgot Password</button>
    </div>
          

      </div>
    </div>
  </form>

























</body>
</html>
























