<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  
{
	header('location:login.php');
}
else
{
}
?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />

    <title>FerFer Store | QR code</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <style>
      .attribution {
        font-size: 11px;
        text-align: center;
      }
      .attribution a {
        color: #FFC0CB;
      }
      body {
        background-color: rgb(255, 192, 203);
      }
      .container {
        background-color: white;
        border: 2x solid red;
        display: block;
        height: 500px;
        width: 300px;
        margin: auto;
        margin-top: 50px;
        padding: 20px;
        border-radius: 25px;
      }
      .box {
        background-color: #FFC0CB;
        
        height: 280px;
        width: 280px;
        border-radius: 25px;
        margin-left: 10px;
        margin-top: 10px;
      }
      .code {
        width: 100%;
        height: 100%;
        border-radius: 25px;
      }
      .me{
        display: inline-block;
        margin: auto;
        height: 100px;
        width: 100px;

      }

      @font-face {
                    font-family: myFirstFont;
                    src: url(fonts/MinecraftTen-VGORe.ttf);
                }

              * {
                   font-family: myFirstFont;
                }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="box">
        <img  class="code" src="./images/myqr.png" alt="Qr code image" />
        <br/>
        <center><img src="./images/logo.png" alt="My bitmoji image" class="me" > 
        <h3 class="why"></h3>Name : Pay FerFer Store</center></h3>
        <br/>
        <p><center><progress value="0" max="10" id="progressBar"></progress></center></p>
        <p><center><a href="your_orders.php"><button >Next</button></a></center></p>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
var timeleft = 3;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  }
  document.getElementById("progressBar").value = 10 - timeleft;
  timeleft -= 1;
}, 1000);

document.addEventListener('DOMContentLoaded', function() {
		var timer = setTimeout(function() {
	            var win = window.open('your_orders.php', '_blank');
				if (win) {
				    win.focus();
            window.close();
				} else {
				    alert('Please allow popups for this website, and then refresh this page.');
				}
	        }, 5000);
	}, false);

    </script>

