<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spice It Up - Log In</title>

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
<?php
    if (isset($_COOKIE["name"]) && ($_COOKIE["name"] != "") && isset($_COOKIE["pass"]) && ($_COOKIE["pass"] == "true")) {
        $name = $_COOKIE["name"];
setcookie("name", "", time()-3600);
setcookie("pass", "", time()-3600);
unset($_COOKIE["name"]);
unset($_COOKIE["pass"]);
}
?>


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
                <li><a href="Login.php" class="selected">Log In</a></li>
                <li><a href="Register.php">Register</a></li>
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
    <form action="signin.php" method="POST">
      <h1>You have successfully logged out!</h1>
     
  </br>


        <div>
      <!--  <input type="submit" value="Log in" /> -->
                <div style="text-align: center" class="blank_box"> <span class="center"></span>
        </div> 

      <div>
      <!--  <input type="submit" value="Sign in" /> -->
                <div style="text-align: center" class="blank_box"> <span class="center"></span>
        </div> 

       <!-- <a href="#">Register</a> -->
      </div>
    </form><!-- form -->
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