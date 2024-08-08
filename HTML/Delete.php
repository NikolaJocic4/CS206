<?php
// Perform deletion
$id = $_POST['id'];
$table = $_POST['table'];

// Include database configuration
include('../Database/dbconfig.php');

// Perform deletion
$sql = "DELETE FROM `$table` WHERE review_id = '$id'";
if (mysqli_query($conn, $sql)) {
    // Return success response
    echo json_encode(['success' => true]);
} else {
    // Return failure response with error message
    echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
}
?>
