<?php
    $name = "";
    if (isset($_COOKIE["name"]) && ($_COOKIE["name"] != "") && isset($_COOKIE["pass"]) && ($_COOKIE["pass"] == "true")) {
        $name = $_COOKIE["name"];
setcookie("name", "", time()-3600);
setcookie("pass", "", time()-3600);
unset($_COOKIE["name"]);
unset($_COOKIE["pass"]);
    }

/*
    header("Location: login.php");
    die();
*/
?>

<html>
	<body>
		Dear <?php echo $name ?>, <br/>
		You have been successfully logged out.<br/>
		<br/>
		<br/>
		<a href="login.php">Login Again</a>

	</body>
</html>