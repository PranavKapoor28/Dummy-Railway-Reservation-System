<!DOCTYPE html>
<?php
  // Authorisation details.
if(isset($_GET['Submit'])){
  $username = $_GET['query2'];
  $hash = "dd3913317703e111bd00e4c9a2399bd7e67d1ee2d18e1ae6996a8f3213db98d0";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $_GET['query3']; // A single number or a comma-seperated list of numbers
  $message = "This is a test message from the PHP API script.";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  echo($result);
}
?>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Train Availability</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Train Availability"/>
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                                <span class="right">
                                    </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Train Availability</h1>
				            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                        
<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>


<p style="font-size:40px; color:green;font-family:Impact"><?php echo "Booking For OLA Cabs"; ?> </p>
<p style="font-size:30px; color:green;font-family:Impact"><?php echo "Available Places"; ?> </p>

<p style="font-size:20px; color:blue;"><?php echo "Chennai"; ?> </p>
<h1>
<p style="font-size:20px; color:blue;"><?php echo "Bengaluru"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Kodaikanal"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Hyderabad"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Trichy"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Madurai"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Coimbatore"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Kanyakumari"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Bhubaneshwar"; ?> </p>





<br>
<br>
  
<div>

<form action="olacabs.php" method="GET">
<p style="font-family:Impact; font-size:30px; color:red;">I Want a CAB in (City): </p><input style="padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query" /><br><br>


<p style="font-family:Impact; font-size:30px; color:red;">Username: </p><input style=" padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query2" /><br><br>

<p style="font-family:Impact; font-size:30px; color:red;">Mobile Number: </p><input style=" padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query3" /><br><br>




<p style="font-family:Impact; font-size:30px; color:red;">Pick up Date: </p><input style="padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query4" /><br><br>

<p style="font-family:Impact; font-size:30px; color:red;">Pickup Address: </p><input style="padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query5" /><br><br>



<input style="padding: 10px 24px;background-color: #008CBA;"type="submit" value="Submit" />
</form>

</div>



<?php
include("footer.php");
?>
