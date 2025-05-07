<?php
include "include/config.php";
$id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style.1.css">
    <meta name="robots" content="noindex, nofollow">
    <script src="https://kit.fontawesome.com/db5ea6be6b.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FayLearn | Order Information</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        .form-control {
            width: 100%;
        }
        .button {
            width: 100%;
        }
        #errorText {
            color: red;
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
            class="w-full mx-auto flex items-center justify-between gap-3 px-4 py-3 md:px-7 bg-white border-b border-gray-200">
            <div class="flex gap-2">
                <div class="md:hidden"><a class="h-[27px] w-[100px]" href="https://learn.fay.com.bd">
                        <div class="flex items-center opacity-0 transition-opacity duration-300 ease-in-out font-semibold"
                            style="font-size: 27px; opacity: 1;"><img alt="FayLearn" data-original-src="logo.svg"
                                draggable="false" fetchpriority="high" width="40" height="27" decoding="async"
                                data-nimg="1" class="" src="logo.svg" style="color: transparent;"><span>FayLearn</span>
                        </div>
                    </a></div>
            </div>
            <div class="items-center hidden gap-9 md:flex"><a class="h-[27px] w-[100px]" href="/">
                    <div class="flex items-center opacity-0 transition-opacity duration-300 ease-in-out"
                        style="font-size: 27px; opacity: 1;"><img alt="FayLearn" data-original-src="logo.svg"
                            draggable="false" fetchpriority="high" width="40" height="27" decoding="async" data-nimg="1"
                            class="" src="logo.svg" style="color: transparent;"><span>FayLearn</span></div>
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
    <div class="main p-5 flex justify-center items-center flex-col">
        <div class="rounded-md border pl-5 pr-5 max-w-[800px] w-full">
            <form id="multiStepForm" class="mx-auto w-full ng-pristine ng-invalid ng-touched">
                <!-- Step 1: Mobile Number/Roll Input -->
                <section class="step active" id="step1">
                    <div>
                        <div class="login-flex">
                            <div class="control has-icons-right mb-3 ng-star-inserted">
                                <div class="py-5 text-[21px] font-semibold">
                                    <span>পেমেন্ট সম্পন্ন করতে মোবাইল নাম্বার/ রোল দিয়ে এগিয়ে যান</span>
                                </div>
                                <div class="tenms-field">
                                    <label>
                                        <input type="number" name="username" id="username" placeholder="01XXXXXXXXX" class="ng-pristine ng-invalid ng-touched form-control" required>
                                        <span class="tenms-field-label text-xs text-gray-600">মোবাইল নাম্বার/ রোল</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Step 2: OTP Input -->
                <section class="step" id="step2">
                    <div class="py-5 text-[21px] font-semibold">
                        <span>OTP দিন</span>
                    </div>
                    <div class="tenms-field">
                        <label>
                            <input type="number" name="otp" id="otp" placeholder="Enter OTP" class="ng-pristine ng-invalid ng-touched form-control" required>
                            <span class="tenms-field-label text-xs text-gray-600">OTP</span>
                        </label>
                    </div>
                </section>

                <!-- Step 3: Name Input -->
                <section class="step" id="step3">
                    <div class="py-5 text-[21px] font-semibold">
                        <span>আপনার নাম লিখুন</span>
                    </div>
                    <div class="tenms-field">
                        <label>
                            <input type="text" name="name" id="name" placeholder="Your Name" class="ng-pristine ng-invalid ng-touched form-control">
                            <span class="tenms-field-label text-xs text-gray-600">নাম</span>
                        </label>
                    </div>
                </section>
                
                <p class="text-sm text-red pb-5 md:pb-0" id="errorText"></p>

                <!-- Navigation Buttons -->
                <div class="bottomBar bottom-0 left-0 z-50 w-full md:w-auto p-4 mx-md:fixed mx-md:bg-white mx-md:drop-shadow-[0_-3px_15px_rgba(0,0,0,0.20)]">
                    <div class="relative md:static">
                        <div class="flex items-center justify-between md:flex-col md:items-start">
                            <button type="button" id="next-button" class="w-full h-10 border-t-2 border-l-2 border-r-2 text-green button centered-buttons border-green outlined" style="font-size: 20px;" onclick="nextStep()">এগিয়ে যান</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        let currentStep = 1;
        let isRegistered = false;
        let fayId = '';
        const phpId = '<?php echo $id; ?>';

        function nextStep() {
            const errorText = document.getElementById('errorText');
            errorText.innerText = '';

            if (validateStep(currentStep)) {
                showLoading();
                if (currentStep === 1) {
                    checkMobileNumber();
                } else if (currentStep === 2) {
                    verifyOTP();
                } else {
                    createInvoice();
                }
            }
        }

        function showLoading() {
            const button = document.getElementById('next-button');
            button.disabled = true;
            button.innerHTML = 'Processing <div class="loading"></div>';
        }

        function hideLoading() {
            const button = document.getElementById('next-button');
            button.disabled = false;
            button.innerHTML = 'এগিয়ে যান';
        }

        function validateStep(step) {
            let valid = true;
            const errorText = document.getElementById('errorText');

            switch(step) {
                case 1:
                    const username = document.getElementById('username').value;
                    valid = username.length === 11 && !isNaN(username);
                    if (!valid) errorText.innerText = 'Please enter a valid 11-digit mobile number';
                    break;
                case 2:
                    const otp = document.getElementById('otp').value;
                    valid = otp.length > 0;
                    if (!valid) errorText.innerText = 'Please enter the OTP';
                    break;
                case 3:
                    if (!isRegistered) {
                        const name = document.getElementById('name').value;
                        valid = name.length > 0;
                        if (!valid) errorText.innerText = 'Please enter your name';
                    }
                    break;
                default:
                    valid = false;
            }
            return valid;
        }

        function checkMobileNumber() {
            const mobile = document.getElementById('username').value;
            fetch(`user_check.php?mobile=${mobile}`)
                .then(response => response.text())
                .then(data => {
                    if (data === '0') {
                        document.getElementById('errorText').innerText = 'Use 1234.';
                        isRegistered = false;
                        proceedToNextStep();
                    } else if (data.length === 10) {
                        isRegistered = true;
                        fayId = data;
                        proceedToNextStep();
                    } else {
                        document.getElementById('errorText').innerText = 'An error occurred. Please try again.';
                        hideLoading();
                    }
                })
                .catch(error => {
                    document.getElementById('errorText').innerText = 'An error occurred. Please try again.';
                    hideLoading();
                });
        }

        function verifyOTP() {
            const mobile = document.getElementById('username').value;
            const otp = document.getElementById('otp').value;
            fetch(`otp_check.php?mobile=${mobile}&otp=${otp}`)
                .then(response => response.text())
                .then(data => {
                    if (data === '1') {
                        if (isRegistered) {
                            createInvoice(); // Skip name input step for registered users
                        } else {
                            proceedToNextStep(); // Proceed to name input step for non-registered users
                        }
                    } else {
                        document.getElementById('errorText').innerText = 'Invalid OTP. Please try again.';
                        hideLoading();
                    }
                })
                .catch(error => {
                    document.getElementById('errorText').innerText = 'An error occurred. Please try again.';
                    hideLoading();
                });
        }

        function createInvoice() {
            const mobile = document.getElementById('username').value;
            const name = document.getElementById('name').value;
            const id = phpId;

            let params = isRegistered ? 
                `fayid=${fayId}&id=${id}` : 
                `mobile=${mobile}&name=${name}&id=${id}`;

            fetch(`create_invoice.php?${params}`)
                .then(response => response.text())
                .then(invoiceNumber => {
                    window.location.href = `checkout/${invoiceNumber}`;
                })
                .catch(error => {
                    document.getElementById('errorText').innerText = 'An error occurred. Please try again.';
                    hideLoading();
                });
        }

        function proceedToNextStep() {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep++;
            if (currentStep === 3 && isRegistered) {
                createInvoice(); // Directly create invoice for registered users
            } else {
                document.getElementById(`step${currentStep}`).classList.add('active');
                if (currentStep === 3 && !isRegistered) {
                    document.getElementById('next-button').innerText = 'Checkout';
                    document.getElementById('next-button').onclick = function() {
                        showLoading();
                        createInvoice();
                    };
                }
            }
            hideLoading();
        }
    </script>
</body>

</html>
