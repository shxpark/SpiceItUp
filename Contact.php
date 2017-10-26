<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "SpiceItUp");

# print_r($_POST);
# print_r($_POST["name"]);
$error ="";
if(isset($_POST['email'])){
  
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
 // $address = $_POST['address'];
  //$city = $_POST['city'];
  //$state = $_POST['state'];
  //$zipCode = $_POST['zipcode'];
  //$password = $_POST['password'];
  //$pwhash = password_hash($password, PASSWORD_DEFAULT);
  // email pattern = "^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
  // password pattern = "^.{1,16}$"
  // name pattern = "^[a-zA-Z]+$"
  // address pattern = "^([0-9]+ )[a-zA-Z . ]+$"
  // city pattern = "^[a-zA-Z]+$"
  // state pattern="^[a-zA-Z]+$"
  // zipcode pattern="^[0-9]{5}$" 
  //phone number pattern="^\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$"

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
//$result = mysqli_query($link, "SELECT Username FROM SpicyCustomers WHERE Username = '$username'");
/*
if(mysqli_num_rows($result) == 0) {

  $sql = "INSERT INTO SpicyCustomers (Name, Email, Address, City, State, Zipcode, Username, PasswordHash) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipCode', '$username', '$pwhash')";

  if(mysqli_query($link, $sql)){
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
} else{
    $error = "Username is already in use.";
  }

}*/
}
mysqli_close($link);
?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spice It Up - Contact Us</title>
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
                <li><a href="Login.html">Log In</a></li>
                <li><a href="Register.php">Register</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
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
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Our Spices</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <li><a href="#">Savory</a></li>
                    <li><a href="#">Sweet</a></li>
                    <li><a href="#">Spicy</a></li>
                    <li><a href="#">Medicinal</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="images/templatemo_image_01.jpg" alt="Flowers" />
                <a href="#">Chinese Five Spice</a>
                <p>
                    Price:
                    <span class="price normal_price">$10</span>&nbsp;&nbsp;
                    <span class="price special_price">$9.99</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
		<h2>Contact</h2>
        <p>If you have any questions, conerns, or simply want to chat with us, please contact us using the information below! We love hearing from our spicy customers!</p>
        <div class="cleaner h20"></div>
        <div class="col col13">
            <h4>Mailing Address</h4>
        	<h6><strong>Office One</strong></h6>
            8975 Spring Circle <br />
            Tysons, Virginia, 22182<br />
            <br /><br />
            
			<strong>Phone:</strong> 703-628-9734<br />
            <strong>Email:</strong> <a href="mailto:contact@spiceitup.com">contact@spiceitup.com</a> <br />
            
            <div class="cleaner h20"></div>
            
            <h6><strong>Office Two</strong></h6>
            1267 Red Brick Rd <br />
            Brooklyn, New York, 11201<br />
            <br /><br />
            
			<strong>Phone:</strong> 347-458-6291<br />
            <strong>Email:</strong> <a href="mailto:info@spiceitup.com">info@spiceitup.com</a> <br />

           <!-- Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a> -->
		</div>
        <div class="col col23 no_margin_right">
        	<div class="map_border">
                <!--<iframe width="430" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe></div> -->
                <iframe width="430" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.mustseenewyork.com/maps/brooklyn-attractions-map.gif"></iframe></div>
			
        </div>
        <div class="cleaner h40"></div>
        <div id="contact_form">
           <form method="post" name="contact" action="#">
           		<div class="col col13">
                
                    <label for="name">Name:</label>
                    <input id="name" name="name" type="text" pattern="^[a-zA-Z]+$"  
      required="" oninvalid="this.setCustomValidity('Please enter a valid name')" onchange="try{setCustomValidity('')}catch(e){}" />

              		<!--<input name="name" type="text" class="input_field" id="name" maxlength="40" /> -->
                	<div class="cleaner h10"></div>
                    <label for="email">Email:</label>
                    <input type="email"  required="" id="email" name = "email" required pattern="^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="this.setCustomValidity('Please enter a valid email')" onchange="try{setCustomValidity('')}catch(e){}" /> 

          			<!--<input name="email" type="text" class="required input_field" id="email" maxlength="40" /> -->
                	<div class="cleaner h10"></div>
                    <label for="phone">Phone:</label> 
                    <input type="phone"  required="" id="phone" name = "phone" required pattern="^\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" oninvalid="this.setCustomValidity('Please enter a valid phone number')" onchange="try{setCustomValidity('')}catch(e){}" /> 
        			<!--<input name="phone" type="text" class="input_field" id="phone" maxlength="20" /> -->
                	<div class="cleaner h10"></div>
                	
                
			 	</div>
                
                <div class="col col23 no_margin_right">
                    <label for="message">Message:</label> 
               	  	<textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
                    <input type="submit" class="submit_btn left" name="submit" id="submit" value="Send" />
                    <input type="reset" class="submit_btn submit_right" name="reset" id="reset" value="Reset" />
				</div>
                
                
            </form>
        </div>
        <div class="cleaner h40"></div>        
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>  
        <div class="cleaner"></div>  
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	<div class="footer_left">
         <a href="#"><img src="images/bitpay-straight.png" alt="BitPay" /></a>
 
    </div>
	<div class="footer_right">
		<!--<p><a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p> -->
          <p>Copyright © 2017 <a href="#">Spice It Up</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>
