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

$sql = "INSERT INTO education (FirstName, LastName, wantToapply, sbirthDay, ParentName, PhoneNumber, Adddress, email)
VALUES ($_POST['FirstName'], $_POST['LastName'], $_POST['wantToapply'],$_POST['sbirthDay'],$_POST['ParentName'],$_POST['PhoneNumber'],$_POST['Adddress']$_POST['email'])";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql1 = "SELECT * FROM education";
$result = $conn->query($sql1);


$conn->close();
?>