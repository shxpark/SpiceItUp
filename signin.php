<?php

setcookie("name", "", time()-3600);
setcookie("pass", "", time()-3600);

unset($_COOKIE["name"]);
unset($_COOKIE["pass"]);

$link = mysqli_connect("localhost", "root", "", "SpiceItUp");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$password = (string) $password;

$dbPass = mysqli_query($link, "SELECT Name, PasswordHash FROM SpicyCustomers WHERE Username = '$username'");

/* echo mysqli_num_rows($dbPass)."<br/>"; */

$pass = false;
$name = "";
$login = false;
 while ($row=mysqli_fetch_row($dbPass))
    {
    	$login = true;
	    if (password_verify($password, $row[1])) {
	    	$pass = true;
	    	$name = $row[0];
			setcookie("name", $name);
			setcookie("pass", "true");
		}
		else {
			setcookie("pass", "false");
		}
    }
if($login){

}else{
			setcookie("pass", "false");

}

mysqli_close($link);

if ($pass) {

	header("Location: homepage.php");
	die();

} else {
	header("Location: login.php");
	die();

}

?>
