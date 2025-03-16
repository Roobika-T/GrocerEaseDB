<?php
session_start();
$db = "grocery";
$connect = mysqli_connect('localhost', 'root', '', $db);

// Prepare the call to the stored procedure
$sql = "CALL clear_cart()";

// Execute the statement
$query = mysqli_query($connect, $sql);

// Close the connection
mysqli_close($connect);

// Redirect to index.php
header('Location: index.php');
exit; // Ensure no further code execution after redirection
?>
