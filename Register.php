<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->



 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Applications/XAMPP/xamppfiles/htdocs/spiceitup/phpmailer/src/PHPMailer.php';
require '/Applications/XAMPP/xamppfiles/htdocs/spiceitup/phpmailer/src/SMTP.php';
require '/Applications/XAMPP/xamppfiles/htdocs/spiceitup/phpmailer/src/Exception.php';


$link = mysqli_connect("localhost", "root", "", "SpiceItUp");

# print_r($_POST);
# print_r($_POST["name"]);
$error ="";
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $username = $_POST['username'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipCode = $_POST['zipcode'];
  $password = $_POST['password'];
  $pwhash = password_hash($password, PASSWORD_DEFAULT);
  // email pattern = "^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
  // password pattern = "^.{1,16}$"
  // name pattern = "^[a-zA-Z]+$"
  // address pattern = "^([0-9]+ )[a-zA-Z . ]+$"
  // city pattern = "^[a-zA-Z]+$"
  // state pattern="^[a-zA-Z]+$"
  // zipcode pattern="^[0-9]{5}$" 



// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$result = mysqli_query($link, "SELECT Username FROM SpicyCustomers WHERE Username = '$username'");

if(mysqli_num_rows($result) == 0) {
$sql = "INSERT INTO SpicyCustomers (Name, Email, Address, City, State, Zipcode, Username, PasswordHash) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipCode', '$username', '$pwhash')";
/*
  $mail = new PHPMailer(true);
  $mail->SMTPDebug = 2;
  $mail->isSMTP();
  $mail->Host = 'smtp1.gmail.com;smtp2.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'spicycustomerservice@gmail.com';
  $mail->Password = 'ecommerce';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->setFrom('spicycustomerservice@gmail.com', 'Spice It Up');
  $mail->addAddress($email, $name);
  $mail->Subject  = "You've successfully joined Spice It Up, " . $name . "!";
  $mail->Body     = "You've successfully signed up for an account! Your username is " . $username . ". We value our customers - thank you for registering for an account with us. We will send any correspondences to this email. Feel free to contact us at spicycustomerservice@gmail.com if you have any questions regarding our products or an existing order.";
  if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo "You've successfully registered for an account. You will receive an email confirmation shortly.";
}
*/
  

  if(mysqli_query($link, $sql)){
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
} else{
    $error = "Username is already in use.";
  }

}
mysqli_close($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spice It Up - Register</title>

<meta name="keywords" content="" />
<meta name="description" content="" />


<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">


/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
$link = mysqli_connect("localhost", "root", "", "SpiceItUp");

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>


</head>

<body>

<div id="templatemo_wrapper_sp">
<div id="templatemo_header_wsp">
	<div id="templatemo_header" class="header_subpage">
    	<div id="site_title"><a href="#">Spice It Up</a></div>
      <label> <font size="+2"><FONT FACE="courier">Spice up your life today!</FONT></font></label>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="products.html">Products</a>
                    <!--
                    <ul>
                        <li><a href="#subpage1">Sub Page One</a></li>
                        <li><a href="#subpage2">Sub Page Two</a></li>
                        <li><a href="#subpage3">Sub Page Three</a></li>
                        <li><a href="#subpage4">Sub Page Four</a></li>
                        <li><a href="#subpage5">Sub Page Five</a></li>
                  	</ul> -->
                </li>
                <li><a href="checkout.html">Checkout</a></li>

                <!--<li><a href="contact.html">Contact</a></li> -->
                <li><a href="Login.php">Log In</a></li>
                <li><a href="Register.php" class="selected">Register</a></li>
               <li><a href="contact.php">Contact Us</a></li>

              <!--  <li><a href="contact.html">Contact</a></li> -->
            </ul>
            <!--
            <div id="templatemo_search">
                <form action="#" method="get">
                  	<input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  	<input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div> -->
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->

    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<center>
<div class="container">
  <section id="content">
    <form action="Register.php" method="post">
      <h1>Start buying your favorite spices!</h1>
      <div>
        <input type="email" placeholder="Email" required="" id="email" name = "email" required pattern="^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="this.setCustomValidity('Please enter a valid email')" onchange="try{setCustomValidity('')}catch(e){}" />
      </div>

      <div>
        <?php echo $error;?>
        <br>
        <input type="text" placeholder="Username" required="" id="username" name="username" />
      </div>
  </br>
      <div>

      <input id="password" name="password" type="password" pattern="^.{1,16}$" placeholder="Password" required oninvalid="this.setCustomValidity('Please enter a password.')" onchange="try{setCustomValidity('')}catch(e){}" />

      </div>
  </br>
      <div>

      <input id="name" name="name" type="text" pattern="^[a-zA-Z]+$" placeholder="Name" 
      required="" oninvalid="this.setCustomValidity('Please enter a valid name.')" onchange="try{setCustomValidity('')}catch(e){}" />

      </div>
  </br>
      <div>

      <input id="address" name="address" type="VARCHAR(50)" pattern="^([0-9]+ )[a-zA-Z . ]+( )[a-zA-Z.]+$" placeholder="Address" required="" oninvalid="this.setCustomValidity('Please enter a valid address.')" onchange="try{setCustomValidity('')}catch(e){}" />

      </div>
  </br>
      <div>

      <input id="city" name="city" type="text" required pattern="^[a-zA-Z]+$" placeholder="City" oninvalid="this.setCustomValidity('Please enter a valid city.')" onchange="try{setCustomValidity('')}catch(e){}" />

      </div>
  </br>
      <div>

      <input id="state" name="state" type="text" pattern="^[a-zA-Z]+$" placeholder="State" required oninvalid="this.setCustomValidity('Please enter a valid state.')" onchange="try{setCustomValidity('')}catch(e){}" />

      </div>
  </br> 
      <div>

      <input id="zipcode" name="zipcode" type="VARCHAR(5)" pattern="^[0-9]{5}$" placeholder="Zip Code" required oninvalid="this.setCustomValidity('Please enter a valid Zip Code.')" onchange="try{setCustomValidity('')}catch(e){}" />

      </div>
  </br>
        <div>
      <!--  <input type="submit" value="Log in" /> -->
                <div style="text-align: center" class="blank_box"> <span class="center"></span>
        </div> 

      <div>
      <!--  <input type="submit" value="Sign in" /> -->
                <div style="text-align: center" class="blank_box"> <span class="center"></span>
            <a href="index.html">
              <input type="image" src="images/sign_in.png" name="saveForm" class="btTxt submit" id="saveForm" />
            </a>
            <!--<a href="Register.html"><img src="images/sign_in.png" alt="about us"/></a> -->
        </div> 

        <!--<a href="#"><br />Lost your password?<br /></a>-->
       <!-- <a href="#">Register</a> -->
      </div>
    </form><!-- form -->
    <div class="button">
    </div><!-- button -->
  </section><!-- content -->
</div><!-- container -->
</center>

        </div>
    </div>
    
    </br>
    </br>
    </br>
    <div id="content" class="right faqs">
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	<div class="footer_left">
        <!--
    	<a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a> -->
                <a href="#"><img src="images/bitpay-straight.png" alt="BitPay" /></a>

    </div>
	<div class="footer_right">

        <!--
		<p><a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p> -->
        <p>Copyright © 2017 <a href="#">Spice It Up</a></p>

		
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

