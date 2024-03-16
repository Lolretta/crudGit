<?php
// include database connection file
include "config.php";

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name = input($_POST["name"]);
	$code = input($_POST["code"]);
	$career = input($_POST["career"]);
	$phone = input($_POST["phone"]);
	$credits = input($_POST["credits"]);
		
	// update user data
	$result = mysqli_query($conn, "UPDATE iest SET name='$name',code='$code',career='$career',phone='$phone',credits='$credits' WHERE id='$id'");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM iest WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>