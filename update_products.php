<?php
if(isset($_POST["submit"])){
    $cpid = $_POST['cpid'];
    $current_no_of_items = $_POST['current_no_of_items'];
    $cost_of_item = $_POST['cost_of_item'];
    $database = "grocery";
    $db = mysqli_connect('localhost','root','',$database);
    
    // Prepare the call to the stored procedure
    $sql = "CALL update_product(?, ?, ?)";
    
    // Bind parameters and execute the statement
    $stmt = $db->prepare($sql);
    $stmt->bind_param("iid", $cpid, $current_no_of_items, $cost_of_item);
    $stmt->execute();
    
    // Close the statement and connection
    $stmt->close();
    $db->close();
    
    // Redirect to another page
    header('Location: manager_logged.php');
    exit; // Ensure no further code execution after redirection
}
?>
