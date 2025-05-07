<?php
session_start(); // Start the session
include 'include/config.php';

// Function to generate a unique invoice number
function generateUniqueInvoiceNumber($conn) {
    do {
        $invoice_id = "FL" . mt_rand(10000000, 99999999);
        $check_query = "SELECT COUNT(*) as count FROM faylearn_invoice WHERE invoice_number = '$invoice_id'";
        $check_result = mysqli_query($conn, $check_query);
        $count = mysqli_fetch_assoc($check_result)['count'];
    } while ($count > 0);
    
    return $invoice_id;
}

// Function to generate a unique fayid
function generateUniqueFayId($conn) {
    do {
        $fayid = "87" . mt_rand(10000000, 99999999);
        $check_fayid = mysqli_query($conn, "SELECT COUNT(*) as count FROM fay_user WHERE fayid = '$fayid'");
        $count = mysqli_fetch_assoc($check_fayid)['count'];
    } while ($count > 0);
    
    return $fayid;
}

// Main process
if(isset($_GET['fayid'])) {
    $fayid = $_GET['fayid'];
    $course_id = $_GET['id'];
    $from = $_GET['from'];

    $query = "SELECT c.course_name, c.course_bio, c.course_fee, c.final_fee, u.name_english
              FROM faylearn_course c
              INNER JOIN fay_user u
              WHERE c.id = $course_id AND u.fayid = $fayid";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $name = $row['name_english'];
        $roll = $fayid;
        $course_name = $row['course_name'];
        $course_bio = $row['course_bio'];
        $course_fee = $row['course_fee'];
        $sub_total = $row['final_fee'];
        $total = $row['final_fee'];

        // Generate unique invoice number
        $invoice_id = generateUniqueInvoiceNumber($conn);

        // Insert data into faylearn_invoice
        $insert_query = "INSERT INTO faylearn_invoice (invoice_number, name, roll, course_id, course_name, course_bio, course_fee, sub_total, total, active)
                         VALUES ('$invoice_id', '$name', '$roll', '$course_id', '$course_name', '$course_bio', '$course_fee', '$sub_total', '$total', 1)";
        if(mysqli_query($conn, $insert_query)) {
            $_SESSION['login'] = 1;
            $_SESSION['fayid'] = $fayid;
            if($from == 'course_details'){
                header("Location: https://learn.fay.com.bd/checkout/$invoice_id");
                exit();
            }else{
            echo $invoice_id; // Successfully inserted
            }
        } else {
            echo 'error'; // Error in insertion
        }
    } else {
        echo 'error'; // No data found for the given fayid and course_id
    }
} else {
    if(isset($_GET['mobile']) && isset($_GET['name'])) {
        
        $course_id = $_GET['id'];
        $mobile = $_GET['mobile'];
        $name = $_GET['name'];
        $fayid = generateUniqueFayId($conn);
        
        // Insert data into fay_user
        $insert_user = "INSERT INTO fay_user (fayid, mobile, name_english, active)
                        VALUES ('$fayid', '$mobile', '$name', 1)";
        
        if(mysqli_query($conn, $insert_user)) {
            
            // Fetch course details
            $query = "SELECT course_name, course_bio, course_fee, final_fee FROM faylearn_course WHERE id = '$course_id'";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $roll = $fayid;
                $course_name = $row['course_name'];
                $course_bio = $row['course_bio'];
                $course_fee = $row['course_fee'];
                $sub_total = $row['final_fee'];
                $total = $row['final_fee'];
                
                // Generate unique invoice number
                $invoice_id = generateUniqueInvoiceNumber($conn);
                
                // Insert data into faylearn_invoice
                $insert_query = "INSERT INTO faylearn_invoice (invoice_number, name, roll, course_id, course_name, course_bio, course_fee, sub_total, total, active)
                                 VALUES ('$invoice_id', '$name', '$roll', '$course_id', '$course_name', '$course_bio', '$course_fee', '$sub_total', '$total', 1)";
                if(mysqli_query($conn, $insert_query)) {
                    $_SESSION['login'] = 1;
                    $_SESSION['fayid'] = $fayid;
                    echo $invoice_id; // Successfully inserted
                } else {
                    echo 'error'; // Error in insertion
                }
            } else {
                echo 'error'; // No data found for the given course_id
            }
        } else {
            echo 'error'; // Error in insertion
        }
    } else {
        echo 'error'; // Missing mobile or name
    }
}
?>
