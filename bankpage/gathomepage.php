<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>ONLINE GAT BANK</title>
    
  </head>
  <body>
    <style>
      body{
          background-image: linear-gradient(to right top, #527dbd, #7575c7, #a068c4, #ca53b2, #eb3793);
         height: 120ph;
      }
      .gat{
        margin-top: 120px ;
      }
      /*background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);*/
    </style>
      <nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
        <h1 class="title is-size-4 has-text-white"> ONLINE GAT BANK </h1> 
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
     <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary mr-6" href="\bankpro/login_signup/signup.php">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="\bankpro/login_signup/login.php">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
  </nav>
   <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="https://img.freepik.com/free-vector/banking-financial-isometric-composition-with-images-laptop-computer-icons-still-bank-wallet-money-vector-illustration_1284-30719.jpg?t=st=1660923356~exp=1660923956~hmac=8866f206a0aa8cecbf359f6310214eb5c12f68c8dbcc0d1a1c79015b3063a61f" class="d-block w-100" alt="img1"   width=auto
        length=400px>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.freepik.com/free-vector/linear-flat-internet-banking-infographics-template-icons-website-hero-image-vector-illustration_126523-2982.jpg?w=2000" width=auto
        length=400px class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://media.istockphoto.com/vectors/bank-modern-thin-line-design-style-vector-illustration-vector-id1031507604?k=20&m=1031507604&s=612x612&w=0&h=OnkDaDwsnKLzTC3m9g3h5Sj3jtMNjYd_GEdxD48Cg0A=" width=auto
        length=400px class="d-block w-100" alt="IMG3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="gat columns">
      <div class="column ml-6">
         <div class="card">
           <header class="card-header title"> SWITCH TO OUR SERVICES </header>
            <div class="card-content">
              <p>GET STARTED WITH YOUR FINANCES</p>
            </div> 
            <form action=" ">
                   <button class="button is-success is-outlined ml-4" formaction="\bankpro/transaction/checkbalance.php">Check Balance</button>
                   <button class="button is-info " formaction="\bankpro/transaction/buyairtime.php">Buy Airtime </button>

                   <button class="button is-info has-backgroundcolor-blue mb-5" formaction="\bankpro/transaction/deposit.php">Deposit</button>
            </form>

       </div>
  </div>


      <div class="column mr-6 ">
         <div class="card">
           <header class="card-header title"> LEARN MORE</header>
            <div class="card-content">
              <p>yes</p>
            </div> 
            <form action=" ">
                   <button class="button is-outlined is-inverted ml-5">Customer Care </button>
                   <button class="button is-success mb-5">Know More</button>
            </form>
        </div>
</div>
    
  
  </body>
</html>