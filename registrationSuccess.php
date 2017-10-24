

 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "SpiceItUp");

print_r($_POST);
# print_r($_POST["name"]);
$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipcode'];
$password = $_POST['password'];
$pwhash = password_hash($password, PASSWORD_DEFAULT);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$result = mysqli_query($link, "SELECT Username FROM SpicyCustomers WHERE Username = '$username'");

echo mysqli_num_rows($result);

if(mysqli_num_rows($result) == 0) {

	$sql = "INSERT INTO SpicyCustomers (Name, Email, Address, City, State, Zipcode, Username, PasswordHash) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipCode', '$username', '$pwhash')";

	if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
 
}  /*else{
		$sql = "INSERT INTO SpicyCustomers (Name, Email, Address, City, State, Zipcode, Username, PasswordHash) VALUES ('username exists', '$email', '$address', '$city', '$state', '$zipCode', '$username', '$pwhash')";
} */

/*
$sql = "INSERT INTO SpicyCustomers (Name, Email, Address, City, State, Zipcode, Username, PasswordHash) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipCode', '$username', '$pwhash')";

/*
$query = mysql_query("SELECT username FROM SpicyCustomers WHERE username='".$username."'");
if(mysql_num_rows($query) !=0){
	echo "Username already exists";
}
*/


// Close connection
mysqli_close($link);
?>