<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style.css">
    <meta name="robots" content="noindex, nofollow">
    <script src="https://kit.fontawesome.com/db5ea6be6b.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php
                session_start(); // Start the session
                $login = $_SESSION['login'];
                include "include/config.php";
                $id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : 'error';
                
                $app_key = "a1uc6yFQgTYMe48VfuwuWue3tc";
                $app_secret = "BZCiPrFdpDS7R4Ah0j6PQKPbfs6PWHK6iTbfACLLT60n0NfZHy9I";
                $username = "01860515888";
                $password = "!XPR)S5QV4l";
                $base_url = "https://tokenized.pay.bka.sh";
                
                // Check if $id is set to "error"
                if ($id === "error") {
                    echo "
                        <script>
                        setTimeout(function() {
                            swal({
                                title: 'Error!',
                                text: 'An error occurred.',
                                icon: 'info',
                                button: 'Home',
                            }).then(() => {
                                window.location.href = 'https://learn.fay.com.bd';
                            });
                        }, 100);
                        </script>
                    ";
                } else {
                        // execute payment
                        if (isset($_GET["paymentID"], $_GET["status"])) {
                            $id_token = $_GET["auth"];
                            $paymentID = $_GET["paymentID"];
                            $auth = $id_token;
                            $post_token = ["paymentID" => $paymentID];
                            $url = curl_init($base_url . "/v1.2.0-beta/tokenized/checkout/execute");
                            $posttoken = json_encode($post_token);
                            $header = [
                                "Content-Type:application/json",
                                "Authorization:" . $auth,
                                "X-APP-Key:" . $app_key,
                            ];
                            curl_setopt($url, CURLOPT_HTTPHEADER, $header);
                            curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
                            curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($url, CURLOPT_POSTFIELDS, $posttoken);
                            curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
                            curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                            $resultdata = curl_exec($url);
                            curl_close($url);
                            $obj = json_decode($resultdata);
                        
                            $customerMsisdn = $obj->customerMsisdn;
                            $paymentID = $obj->paymentID;
                            $trxID = $obj->trxID;
                            $merchantInvoiceNumber = $obj->merchantInvoiceNumber;
                            $fay_id = $obj->payerReference;
                            $time = $obj->paymentExecuteTime;
                            $transactionStatus = $obj->transactionStatus;
                            $amount = $obj->amount;
                            
                            if ($transactionStatus == "Completed") {
                                    // Proceed with your existing code
                                    $result = $conn->query("SELECT * FROM faylearn_invoice WHERE invoice_number = '$id' AND active=1");
                                    $row = $result->fetch_assoc();
                                    $course_id = $row['course_id'];
                                    $course_name = $row['course_name'];
                                
                                    // Insert data into pathshal_bkash table
                                    $insertq = "INSERT INTO fay_bkash (status, type, number, from_fayid, to_fayid, amount, trx_id, payment_id, invoice, time, active) 
                                            VALUES ('$transactionStatus', 'FLWEB', '$customerMsisdn', '$fay_id', '8282828282', '$amount', '$trxID', '$paymentID', '$merchantInvoiceNumber', '$time', '1')";
                                    if ($conn->query($insertq) === true) {
                                        // Insert data into pathshal_bkash table
                                        $insertstu = "INSERT INTO faylearn_student (course_id, student_roll, status, active) 
                                            VALUES ('$course_id', '$fay_id', '1', '1')";
                                        if ($conn->query($insertstu) === true) {
                        
                                            $conn->query("UPDATE faylearn_invoice SET status = 1, paid_on = NOW() WHERE invoice_number = '$merchantInvoiceNumber' AND active = 1");
                                        }
                                    }
                                
                                if($login == 1){
                                    $home_url = "https://learn.fay.com.bd/course_details/$course_id";
                                    $btext = "View Course";
                                }else{
                                    $home_url = 'https://learn.fay.com.bd';
                                    $btext = "Home";
                                }
                                
                                echo "
                                    <script>
                                    setTimeout(function() {
                                        swal({
                                            title: 'Congratulations!',
                                            text: 'Payment successfull for $course_name.',
                                            icon: 'success',
                                            button: '$btext',
                                        }).then(() => {
                                            window.location.href = '$home_url';
                                        });
                                    }, 100);
                                    </script>
                                ";
                                exit;
                                
                            }else{
                                echo "
                                    <script>
                                    setTimeout(function() {
                                        swal('Error!', 'Payment Failed.', 'error');
                                    }, 100);
                                    </script>
                                ";
                            }
                            
                            
                    }
                    // Proceed with your existing code
                    $sql = "SELECT * FROM faylearn_invoice WHERE invoice_number = '$id' AND active=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $main = $result->fetch_assoc();
                        $status = $main['status'];
                        $paid_on = $main['paid_on'];
                        $course_id = $main['course_id'];
                        
                        if($login == 1){
                            $home_url = "https://learn.fay.com.bd/course_details/$course_id";
                            $btext = "View Course";
                        }else{
                            $home_url = 'https://learn.fay.com.bd';
                            $btext = "Home";
                        }
                        
                        if($status == 1){
                            echo "
                        <script>
                        setTimeout(function() {
                            swal({
                                title: 'Paid Invoice!',
                                text: 'Paid on $paid_on.',
                                icon: 'info',
                                button: '$btext',
                            }).then(() => {
                                window.location.href = '$home_url';
                            });
                        }, 100);
                        </script>
                    ";
                        }
                ?>
    <title>FayLearn | Checkout</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: white;
        }
        .loading {
            border: 2px solid #f3f3f3;
            border-radius: 50%;
            border-top: 2px solid #3498db;
            width: 12px;
            height: 12px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            display: inline-block;
            margin-left: 10px;
        }
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>


<body>
       <div class="nav">
        <div
            class="w-full mx-auto flex max-w-[1440px] items-center justify-between gap-3 px-4 py-3 md:px-7 bg-white border-b border-gray-200">
            <div class="flex gap-2">
                <div class="md:hidden"><a class="h-[27px] w-[100px]" href="https://learn.fay.com.bd">
                        <div class="flex items-center opacity-0 transition-opacity duration-300 ease-in-out font-semibold"
                            style="font-size: 27px; opacity: 1;"><img alt="FayLearn" data-original-src="logo.svg"
                                draggable="false" fetchpriority="high" width="40" height="27" decoding="async"
                                data-nimg="1" class="" src="/logo.svg" style="color: transparent;"><span>FayLearn</span>
                        </div>
                    </a></div>
            </div>
            <div class="items-center hidden gap-9 md:flex"><a class="h-[27px] w-[100px]" href="/">
                    <div class="flex items-center opacity-0 transition-opacity duration-300 ease-in-out"
                        style="font-size: 27px; opacity: 1;"><img alt="FayLearn" data-original-src="logo.svg"
                            draggable="false" fetchpriority="high" width="40" height="27" decoding="async" data-nimg="1"
                            class="" src="/logo.svg" style="color: transparent;"><span>FayLearn</span></div>
                </a></div>
            <div class="flex-1 hidden w-full pr-4 md:block"></div>
            <div class="flex items-center space-x-4 md:space-x-6">
                <div class="flex items-center gap-3 rounded-md pl-2 pr-2 md:border-2 max-h-96 md:gap-6">
                    <a class="items-center hidden gap-1 text-green md:flex" href="/index.html"><span class="inline-block">Home</span></a>
                </div>
                <div class="flex items-center gap-3 rounded-md pl-2 pr-2 md:border-2 max-h-96 md:gap-6">
                    <a class="items-center hidden gap-1 text-green md:flex" href="/course.php"><span class="inline-block">Course</span></a>
                </div>
                <div class="flex items-center gap-3 rounded-md border-1 max-h-96 md:gap-6">
                    <a class="items-center hidden gap-1 text-green md:flex" href="tel:09649488888"><svg
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                            </path>
                        </svg><span class="inline-block">09649488888</span></a>
                </div>
                <div class="block"><a id="login-button" href="https://fay.com.bd"
                        class="flex items-center px-3 py-1 text-white rounded-md bg-green md:px-6"><span
                            class="leading-[18px] whitespace-nowrap text-[12px] font-semibold leading-[24px] md:text-[16px] md:font-medium">FAY.COM.BD</span></a>
                </div>
            </div>
        </div>
    </div>


    <div class="main py-14">

        <div
            class="p-5 md:p-14 gap-10 xs:flex xs:flex-col md:flex md:flex-row-reverse md:flex-wrap md:justify-center md:max-w-[1280px] w-full py-2 xs:px-0 md:px-1">
            <div
                class="xs:h-auto xs:bg-[#E5E7EB] xs:max-h-[630px] md:max-h-[480px] flex flex-col justify-between md:border md:rounded-[10px] md:border-gray-200">
                <div class="bg-white flex-1 py-4 pb-0 xs:pt-5 xs:pb-0 xs:px-5 md:px-6 xs:w-[100%] md:w-[472px]  ">
                   
                 <p class="md:hidden text-[16px] md:text-[21px] font-semibold mb-2">অর্ডার আইডি <?php echo htmlspecialchars($id); ?></p>


                    <div
                class="container bg-white w-full mb-4">
                <div class="flex justify-between">
                    <div>
                        <h1 class="xs:text-sm md:text-base font-normal xs:text-[#4B5563] md:text-[#111827]">অ্যাকাউন্টের
                            নাম</h1>
                    </div>
                    <div class="xs:max-w-[180px] md:max-w-[200px]">
                        <h1 class="xs:text-sm xs:font-medium md:text-base md:font-semibold text-[#111827]"><?php echo htmlspecialchars($main['name']); ?>
                        </h1>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div>
                        <h1 class="xs:text-sm md:text-base font-normal xs:text-[#4B5563] md:text-[#111827]">অ্যাকাউন্ট
                            রোল</h1>
                    </div>
                    <div class="xs:max-w-[180px]">
                        <h1 class="xs:text-sm xs:font-medium md:text-base md:font-semibold text-[#111827]">
                            <?php echo htmlspecialchars($main['roll']); ?></h1>
                    </div>
                </div>
            </div>
                    
                    <div class="flex justify-between items-center mb-5">
                        
                        <div class="text-[14px] font-[600]">পেমেন্ট মেথড সিলেক্ট করুন</div>
                        
                    </div>
                    <div class="mb-5">
                        <label>
                            <div
                                class="border-[1px] border-[#E5E7EB] rounded-[8px] h-[64px] flex justify-between px-3 mb-4 cursor-pointer">
                                <div class="flex items-center">
                                    <input type="radio" id="bkash" name="payment"
                                        class="h-[16.67px] w-[16.67px] accent-[green] cursor-pointer" value="bkash">
                                    <div class="font-bold text-[14px] ml-2 pl-1">বিকাশ</div>
                                </div>
                                <div class="flex items-center">
                                    <img src="https://cdn.10minuteschool.com/images/svg/bkash_logo.png" alt="বিকাশ"
                                        class="h-10">
                                </div>
                            </div>
                        </label>
                    </div>
                    
                    <div></div>
                    <div class="mt-4 mb-6 md:mb-0"><label for="iagree"
                            class="flex gap-3 items-start justify-center"><input type="checkbox" id="iagree"
                                name="iagree" class="accent-[green] h-[25px] md:h-[16px] w-[25px] md:w-[16px] ml-1"
                                checked="">
                            <p class="text-sm md:text-xs">আমি এই প্ল্যাটফর্ম
                                <!-- --> <a class="underline"
                                    href="https://learn.fay.com.bd/terms.php">ব্যবহারের শর্তাবলি</a>
                                <!-- -->ও
                                <!-- --> <a class="underline"
                                    href="https://learn.fay.com.bd/privacy_policy.php">গোপনীয়তা নীতির
                                    <!-- --> </a>ব্যাপারে সম্মতি দিচ্ছি</p>
                        </label></div>
                    <!--bottom start-->
                        <div class="hidden bottomBar w-full p-4 md:flex">
                            <button id="pay-button"
                                        class="w-full h-10 border-t-2 border-l-2 border-r-2 text-green button centered-buttons border-green outlined"
                                        style="font-size: 20px;">পেমেন্ট করুন</button>
                        </div>
                </div>
            </div>
            <div class="mt-3 md:mt-0">
                <div
                    class="bg-white flex-1 mb-2 xs:pt-4 xs:px-5 md:mr-16 w-full xs:w-[100%] xs:h-full pb-10 xs:min-h-[290px] xs:max-w-none md:max-w-[400px]">
                    <div class="md:p-8 md:h-auto md:border md:rounded-[8px] md:border-gray-200">
                        <div class="hidden mx-md:hidden md:block">
                            <div class="w-full">
                                <div class="flex items-center w-full bg-white xs:py-4 font-bold xs:px-5 md:mb-6">
                                    <p class="text-[16px] md:text-[21px] font-semibold mr-2">অর্ডার আইডি <?php echo htmlspecialchars($id); ?></p>
                                    
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="block mx-md:block md:hidden mb-4">
                            <h1 class="text-lg font-semibold" id="info_details">হিসাবের বিস্তারিত</h1>
                        </div>
                        <div class="mb-2">
                            <div class="font-medium flex justify-between">
                                <div class="max-w-[220px] text-sm"><?php echo htmlspecialchars($main['course_name']); ?> (<?php echo htmlspecialchars($main['course_bio']); ?>)<p class="mt-2 text-sm text-[#4B5563] font-normal"></p>
                                </div>
                                <div class=""><span class="font-extrabold"></span><span class="font-bold text-sm">
                                        <!-- --><?php echo htmlspecialchars($main['course_fee']); ?></span></div>
                            </div>
                        </div>
                        <div style="border:1px dotted #dfdfdf;margin:12px 0px" class="xs:block hidden"></div>
                        <div style="border:1px dotted #dfdfdf;margin:16px 0px" class="mx-md:hidden md:block hidden">
                        </div>
                        <div class="font-medium flex justify-between mt-4">
                            <div class="text-sm">সাব টোটাল</div>
                            <div class=""><?php echo htmlspecialchars($main['sub_total']); ?></div>
                        </div>
                        <div class="font-bold flex justify-between items-center mt-4 border-t pt-2 xs:mb-8">
                            <div>সর্বমোট
                                <!-- --> <span class="text-[11px] text-[#4B5563] ml-1 font-[400]">(ভ্যাট সহ)
                                    <!-- --> </span></div>
                            <div class=""><?php echo htmlspecialchars($main['total']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
    
    <!--bottom start-->
    <div class="bottomBar bottom-0 left-0 z-50 w-full p-4 mx-md:fixed mx-md:bg-white mx-md:drop-shadow-[0_-3px_15px_rgba(0,0,0,0.20)] md:hidden">
        <div class="relative md:static">
            <div class="flex items-center justify-between md:flex-col md:items-start">
                <button id="pay-button-bottom"
                                        class="w-full h-10 border-t-2 border-l-2 border-r-2 text-green button centered-buttons border-green outlined"
                                        style="font-size: 20px;">পেমেন্ট করুন</button>
            </div>
            <div class="hidden md:block"></div>
        </div>
    </div>
</body>
<!-- JavaScript -->
    <script>
        var invoiceNumber = "<?php echo $id; ?>";
        
        function showLoading() {
            const button1 = document.getElementById('pay-button');
            const button2 = document.getElementById('pay-button-bottom');
            button1.disabled = true;
            button2.disabled = true;
            button1.innerHTML = 'Processing <div class="loading"></div>';
            button2.innerHTML = 'Processing <div class="loading"></div>';
        }

        function hideLoading() {
            const button1 = document.getElementById('pay-button');
            const button2 = document.getElementById('pay-button-bottom');
            button1.disabled = false;
            button2.disabled = false;
            button1.innerHTML = 'পেমেন্ট করুন';
            button2.innerHTML = 'পেমেন্ট করুন';
        }
        
        // Function to check if the privacy policy checkbox is checked
        function isPrivacyPolicyChecked() {
            return document.getElementById('iagree').checked;
        }

        // Function to check if the bkash radio button is checked
        function isBkashChecked() {
            return document.getElementById('bkash').checked;
        }

        // Function to handle payment
        function handlePayment() {
            // Check if privacy policy checkbox is checked
            if (!isPrivacyPolicyChecked()) {
                // Show SweetAlert for unchecked checkbox
                swal("Error!", "Please agree to the terms and conditions.", "error");
                return;
            }

            // Check if bkash radio button is checked
            if (!isBkashChecked()) {
                // Show SweetAlert for unchecked radio button
                swal("Error!", "Please choose a payment method.", "error");
                return;
            }
            showLoading();
            window.location.href = `https://pay.fay.com.bd/faylearn.php?invoice_number=${invoiceNumber}`;
        }

        // Add event listener to the pay button
        document.getElementById('pay-button').addEventListener('click', function() {
            handlePayment();
        });
        // Add event listener to the pay button
        document.getElementById('pay-button-bottom').addEventListener('click', function() {
            handlePayment();
        });
    </script>

</html>
<?php
}else{
    echo "No active course found.";
}
}
?>