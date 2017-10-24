
AddType application/x-httpd-php .php .htm .html

 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "SpiceItUp");

print_r($_POST);
print_r($_POST["name"]);
$firstName = $_POST['first_name'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution

$sql = "INSERT INTO SpicyCustomers (Name, Email, Address, City) VALUES ('$firstName', '$firstName', '$firstName', '$firstName')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>