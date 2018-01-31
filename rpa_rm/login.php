<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php require_once('inc\css.inc.php'); ?>
    
    <link rel="stylesheet" href="css/login.css" class="rel">  
    
  </head>
  <body>


  <!-- Navbar 
  <nav class="navbar navbar-toggleable-md navbar-dark bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>-->

  <!-- Navbar-Logo 
  <img class="logo" src="images/prodapt_logo_white.png">
  -->

  <!-- Navbar-Title 
  <a class="navbar-brand text-white" href="#" id="navbar-title" style="padding-left:0;">RPAT</a>
   
   </nav>
   -->


<div class="container-fluid conn-login">

<div class="header text-center text-white h1">RPA Team Management Tool</div>
  

      <div class="row login-window">
      <div class="offset-2 col-4 addImg">

    </div>


   <!--Login Window -->
       <div class=" col-4">
        <div class="card login">
        <h3 class="card-header  text-white">Login</h3>
        <div class="card-block bg-transparent">
            <div class="row input-group">
               <label for="username" class="w-100 text-orange">Email or Username</label>
                <input type="text" title='Username' id="username" name="username" class="w-100" required/>
            </div>
            <div class="row input-group">
               <label for="password" class="w-100 text-orange" >Password</label>
                <input type="password" id="password" title='Passsword' name="password" class="w-100 form-control-lg" required/>
            </div>

            <a href="#" class="btn-link text-orange" style="margin-bottom:10px;">forgot password?</a>
            
            <button type="button" class="btn btn-success w-100 btn-login" name="btn-login" id="btn-login">Login</button>
            <p class="err text-danger" id="err" name="err"></p>
        </div>
         </div>
    </div>

    
    

    </div>
    </div>



  </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/tether.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>

     <!-- Adding Login js -->
     <script src="scripts/login.js"></script> 
     

  </body>
</html>