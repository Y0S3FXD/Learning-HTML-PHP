<?php
$imagefilenmae = $_GET['imagefilename'];

$servername = 'mysql63.unoeuro.com';
$username = 'uwu_websito_dk';
$password = 'hyxnBgze2bk9wcmrAdEt';
$dbname = 'uwu_websito_dk_db';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check the connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
//creating the database
$sql = "SELECT image_text "
$response = array('text' => $imagetext);
echo json_encode($response);
?>
