<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #5c4ac7;
	  }
	  </style>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
</hea

<body>
<style> 
              @font-face {
                            font-family: myFirstFont;
                            src: url(fonts/MinecraftTen-VGORe.ttf);
                        }

                      * {
                           font-family: myFirstFont;
                        }
        </style>
  
<header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/store.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                       <ul class="nav navbar-nav">
                       <li class="nav-item"> <a class="nav-link active" href="index.php" style="font-family:myFirstFont">👑 Home <span class="sr-only">(current)</span></a> </li>
                            
                           
                            <?php
                          if(empty($_SESSION["user_id"])) // if user is not login
                            {
                              echo '<li class="nav-item"><a href="login.php" class="nav-link active" style="font-family:myFirstFont">🔑 Login</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active" style="font-family:myFirstFont">📝 Register</a> </li>';
                            }
                          else
                            {
              
                                
                                echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active" style="font-family:myFirstFont">🎟️ My Orders</a> </li>';
                                echo  '<li class="nav-item"><a href="logout.php" class="nav-link active" style="font-family:myFirstFont">🚀 Logout</a> </li>';
                            }
              
                          ?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
<div style=" background-image: url('images/img/backmc.jpg');">
  

<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										 header("refresh:1;url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; 
                                }
	 }
	
	
}
?>
  

<div class="pen-title">
  <
</div>

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form" style="font-family:myFirstFont">
    <h2 style="font-family:myFirstFont">Login to your account</h2>
	  <span style="color:red;" style="font-family:myFirstFont"><?php echo $message; ?></span> 
   <span style="color:green;" style="font-family:myFirstFont"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>
  
  <div class="cta" style="font-family:myFirstFont">Not registered?<a href="registration.php" style="color:#5c4ac7;"> Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   
  <div class="container-fluid pt-3">
	<p></p>
  </div>


   
  <footer class="footer">
            <div class="container">
                
          
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5 style="font-family:myFirstFont">Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/khqr.png" alt="KH QR" width="45" height="25"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5 style="font-family:myFirstFont">Address</h5>
                                    <p style="font-family:myFirstFont">Cambodia , Phnom Penh</p>
                                    <h5 style="font-family:myFirstFont">Phone: <a style="font-family:myFirstFont"> +855 17268421</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5 style="font-family:myFirstFont">Addition informations</h5>
                                   <p style="font-family:myFirstFont">Thank you for supporting our store.</p>
                                </div>
                    </div>
                </div>
          
            </div>
        </footer>
       


</body>

</html>
