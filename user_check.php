<?php
// Include the config file
include 'include/config.php';

// Check if mobile number is provided in the GET request
if(isset($_GET['mobile'])) {
    // Sanitize the mobile number to prevent SQL injection
    $mobile = mysqli_real_escape_string($conn, $_GET['mobile']);

    // Prepare SQL query to check if the mobile number exists in fay_user table
    $query = "SELECT COUNT(*) AS total, fayid FROM fay_user WHERE mobile='$mobile'";
    $result = mysqli_query($conn, $query);

    // Fetch the result
    $row = mysqli_fetch_assoc($result);

    // Check if a row with the provided mobile number exists
    if ($row['total'] > 0) {
        // Row found, echo fayid
        echo $row['fayid'];
    } else {
        // Row not found, echo 0
        echo "0";
    }
} else {
    // Mobile number not provided in the GET request
    echo "Mobile number not provided";
}

// Close the database connection
mysqli_close($conn);
?>
