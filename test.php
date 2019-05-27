<?php session_start();?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['FirstName'])){
	$_POST['sbirthDay'] = date('Y-m-d',strtotime($_POST['sbirthDay']));
$sql = "INSERT INTO education (FirstName, LastName, wantToapply, sbirthDay, ParentName, PhoneNumber, Adddress, email)
VALUES ('".$_POST['FirstName']."','".$_POST['LastName']."', '".$_POST['wantToapply']."','".$_POST['sbirthDay']."','".$_POST['ParentName']."','".$_POST['PhoneNumber']."','".$_POST['Adddress']."','".$_POST['email']."')";
}
if ($conn->query($sql) === TRUE) {
   $_SESSION['message'] = 'success';
    header("Location: educationform.php");
} else {
     echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql1 = "SELECT * FROM education";
$result = $conn->query($sql1);


$conn->close();
?>