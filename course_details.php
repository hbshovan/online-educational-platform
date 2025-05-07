<?php
session_start(); // Start the session
include "include/config.php";
$login = $_SESSION['login'];
$fayid = $_SESSION['fayid'];
$id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : null;
$dir = isset($id) ? "course_details/$id" : "course_details";

if($login == 1){
    $enroll_url = "https://learn.fay.com.bd/create_invoice.php?fayid=$fayid&id=$id&from=course_details";
}else{
    $enroll_url = "https://learn.fay.com.bd/order_info.php?id=$id";
}
$result = $conn->query("SELECT * FROM faylearn_student WHERE course_id = '$id' AND student_roll = '$fayid' AND active=1");
if ($result->num_rows > 0){ ?>
    
    
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h3>Course Dashboard</h3>
        </body>
    </html>
    
    
    
    
    
<?php }else{
    
$sql = "SELECT * FROM faylearn_course WHERE id = '$id' AND active=1";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    $main = $result->fetch_assoc();
    $course_name = $main['course_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style.css">
    <script src="https://kit.fontawesome.com/db5ea6be6b.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FayLearn | <?php echo htmlspecialchars($course_name); ?> | Course Details</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://learn.fay.com.bd/<?php echo htmlspecialchars($dir); ?>">
    
    <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "EducationalOrganization",
                  "name": "FayLearn",
                  "description": "FayLearn is an educational platform trying to convince the students to learn differently.",
                  "url": "https://learn.fay.com.bd",
                  "logo": "https://learn.fay.com.bd/logo.svg",
                  "parentOrganization": {
                    "@type": "Organization",
                    "name": "Fay",
                    "url": "https://fay.com.bd"
                  },
                  "sameAs": [
                    "https://www.facebook.com/FayLearn",
                    "https://www.youtube.com/@FayLearn"
                  ],
                  "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+8809649488888",
                    "contactType": "Customer Service",
                    "areaServed": "BD",
                    "availableLanguage": "Bengali"
                  },
                  "email": "mailto:learn@fay.com.bd",
                  "foundingDate": "2024-05",
                  "location": {
                    "@type": "PostalAddress",
                    "addressLocality": "Barisal",
                    "addressCountry": "Bangladesh"
                  },
                  "founder": {
                    "@type": "Person",
                    "name": "Md. Faysal",
                    "email": "mailto:ceo@fay.com.bd",
                    "jobTitle": "Founder & CEO",
                    "affiliation": "Fay",
                    "sameAs": "https://ceo.fay.com.bd"
                  },
                  "employee": {
                    "@type": "Person",
                    "name": "Shovan Mandal",
                    "description": "Shovan Mandal is the founder and CEO of HBWorld. Passionate about programming from an early age, Shovan turned his hobby into a career by founding HBWorld. He later created Pathshal as a product of HBWorld. Currently, he serves as the CTO of Fay, overseeing all its products including FayLearn and FayMart. Remarkably, Shovan built all these platforms single-handedly without any developer partners. Academically, he excelled with a GPA of 5 in both SSC and HSC.",
                    "familyName": "Mandal",
                    "givenName": "Shovan",
                    "birthDate": "2006-03-20",
                    "gender": "Male",
                    "nationality": "Bangladeshi",
                    "telephone": "+8809638420400",
                    "email": "mailto:ceo@hbworld.com.bd",
                    "address": {
                      "@type": "PostalAddress",
                      "addressLocality": "Pirojpur",
                      "addressCountry": "Bangladesh",
                      "postalCode": "8541",
                      "streetAddress": "192 Naotana, Nazirpur, Pirojpur, Barisal"
                    },
                    "jobTitle": "CTO",
                    "affiliation": "Fay",
                    "url": "https://ceo.hbworld.com.bd",
                    "sameAs": [
                      "https://web.facebook.com/hbshovanhb",
                      "https://www.instagram.com/hbshovanhb/"
                    ],
                    "memberOf": [
                      {
                        "@type": "Organization",
                        "name": "HBWorld",
                        "url": "https://hbworld.com.bd"
                      },
                      {
                        "@type": "Organization",
                        "name": "Pathshal",
                        "url": "https://pathshal.hbworld.com.bd"
                      },
                      {
                        "@type": "Organization",
                        "name": "Fay",
                        "url": "https://fay.com.bd"
                      },
                      {
                        "@type": "Organization",
                        "name": "FayLearn",
                        "url": "https://learn.fay.com.bd"
                      },
                      {
                        "@type": "Organization",
                        "name": "FayMart",
                        "url": "https://mart.fay.com.bd"
                      }
                    ]
                  }
                }
                </script>
    <!-- Structured Data for Breadcrumbs -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://learn.fay.com.bd/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Courses",
          "item": "https://learn.fay.com.bd/course"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Nurture",
          "item": "https://learn.fay.com.bd/course/Nurture"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Academic",
          "item": "https://learn.fay.com.bd/course/Academic"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Privacy Policy",
          "item": "https://learn.fay.com.bd/privacy_policy"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Terms and Conditions",
          "item": "https://learn.fay.com.bd/terms"
        }
      ]
    }
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "FayLearn | Course",
          "description": "Explore a wide range of online courses at FayLearn. Learn differently with our unique educational platform.",
          "url": "https://learn.fay.com.bd/course",
          "publisher": {
                "@type": "Organization",
                "name": "FayLearn",
                "logo": {
                  "@type": "ImageObject",
                  "url": "https://learn.fay.com.bd/logo.svg"
                }
              },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://learn.fay.com.bd/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>
    
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
    
    <!--main-->
    <div class="main py-16 md:py-5">
        <div class="container flex flex-col md:flex-row md:gap-12 md:py-10 min-h-[300px]">
            <div class="order-1 flex flex-col flex-1 md:order-1 md:max-w-[calc(100%_-_348px)] lg:max-w-[calc(100%_-_448px)]">
                <div class="block mt-4 md:mt-0 md:hidden">
                    <div class="bg-black youtube-video aspect-video">
                        <img alt="<?php echo htmlspecialchars($main['course_name']); ?>" src="<?php echo htmlspecialchars($main['course_banner']); ?>">
                    </div>
                </div>
                <h1 class="pt-5 text-[21px] font-semibold md:text-4xl"><?php echo htmlspecialchars($main['course_name']); ?> (<?php echo htmlspecialchars($main['course_bio']); ?>)</h1>
                <div class="text-gray-500">
                    <div>
                        <p class="tenms__paragraph md:p-5" dir="ltr">
                            <span><?php echo htmlspecialchars($main['course_details']); ?></span>
                        </p>
                    </div>
                </div>
                <div class="hidden md:block mb-5 xs:bg-[#EEF2F4]">
                <div class="bg-white">
                    <h2 class="mb-4 text-xl font-semibold md:text-2xl">কোর্স ইন্সট্রাক্টর</h2>
                    <?php
                        $sql = "SELECT * FROM faylearn_instructor WHERE course_id = '$id' AND active=1";
                        $result = $conn->query($sql);
                        $total_rows = $result->num_rows;
                        if ($result->num_rows > 0){
                            while ($row = $result->fetch_assoc()){
                            $fay_id = $row['fay_id'];
                            $result2 = $conn->query("SELECT * FROM fay_team WHERE fay_id = '$fay_id' AND active=1");
                            $row2 = $result2->fetch_assoc();
                            ?>
                    <div class="grid grid-cols-1 px-4 mb-4 border rounded-md lg:grid-cols-2 hover:border-green">
                            <div class="flex items-center py-2 pb-0 last:pb-5 md:p-5 lg:pb-5">
                            <div class="mt-2 rounded-md" style="width: 73px; height: 73px; overflow: hidden; min-width: 50px;">
                                <div class="rounded-md oveflow-hidden opacity-0 transition-opacity duration-300 ease-in-out" style="font-size: 0px; opacity: 1;">
                                    <img alt="MD. Faysal" data-original-src="<?php echo htmlspecialchars($row2['image']); ?>" draggable="false" loading="lazy" width="73" height="73" decoding="async" data-nimg="1" class="" src="<?php echo htmlspecialchars($row2['image']); ?>" style="color: transparent;">
                                </div>
                            </div>
                            <div class="flex-1 ml-3">
                                <h3 class="text-lg"><?php echo htmlspecialchars_decode($row2['name_english']); ?></h3>
                                <div class="text-sm"><?php echo htmlspecialchars_decode($row2['job_tittle']); ?></div>
                                <div class="text-sm"><?php echo htmlspecialchars_decode($row2['known_for']); ?></div>
                            </div>
                        </div>
                    </div>
                      <?php  }
                        }
                        ?>
                </div>
            </div>
            <div class="hidden pb-5 md:block flex items-center justify-between">
                <h2 class="mb-4 text-base font-semibold md:text-2xl">ক্লাস রুটিন</h2>
                <div class="flex items-center"><img src="https://s3.ap-southeast-1.amazonaws.com/cdn.10minuteschool.com/images/1667985694407.png" class="h-4 w-[14px]" alt="download">
                    <div class="ml-2">
                        <div class="text-sm font-medium cursor-pointer text-green md:text-base">ডাউনলোড রুটিন</div>
                    </div>
                </div>
            </div>
            <!--Contact-->
        <div class="flex items-center justify-between bg-white pb-5 md:pb-0 hidden md:block">
        <div class="mb-0">
            <h2 class="mb-4 text-xl font-semibold md:text-2xl">আমরা আপনাকে সাহায্য করতে অপেক্ষা করছি</h2>
            <div class="md:max-w-[500px]"><a href="tel:09649488888">
                    <div class="flex w-full items-center justify-center rounded border border-[#E5E7EB] py-3 hover:border-[#1CAB55] md:max-w-[500px] md:rounded-lg md:px-6 md:py-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 29 28" class="w-[17px] h-[17px] md:w-6 md:h-6">
                            <path stroke="#1CAB55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.223" d="M17.246 2.917a9.298 9.298 0 018.213 8.204M17.246 7.05a5.164 5.164 0 014.083 4.083"></path>
                            <path stroke="#1CAB55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.223" d="M13.37 14.551c4.655 4.653 5.71-.73 8.673 2.231 2.857 2.856 4.5 3.428.88 7.047-.454.364-3.334 4.748-13.457-5.373C-.658 8.335 3.722 5.451 4.086 4.998c3.629-3.628 4.193-1.977 7.05.879 2.961 2.962-2.42 4.022 2.235 8.674z" clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="ml-2 text-base font-medium text-[#1CAB55] md:text-lg">কল করুন 09649488888 নম্বরে</h3>
                    </div>
                </a></div>
        </div>
        </div>
            </div>
            
            <section class="w-full md:max-w-[330px] lg:max-w-[400px] order-2 bg-white right-0 md:top-[50px]">
                <div class="md:sticky md:top-[112px]">
                    <div class="md:border">
                        <div class="hidden p-1 md:block" id="">
                            <div class="bg-black youtube-video aspect-video">
                               <img alt="<?php echo htmlspecialchars($main['course_name']); ?>" src="<?php echo htmlspecialchars($main['course_banner']); ?>">
                            </div>
                        </div>
                        <div class="bottom-0 left-0 z-50 w-full p-4 mx-md:fixed mx-md:bg-white mx-md:drop-shadow-[0_-3px_15px_rgba(0,0,0,0.20)]">
                            <div class="md:static">
                                <div class="flex items-center justify-between md:flex-col md:items-start">
                                    <div>
                                        <div class="flex items-center justify-between md:flex-col md:items-start">
                                            <div class="md:mb-3">
                                                <div class="inline-block text-2xl font-semibold"><?php echo htmlspecialchars($main['final_fee']); ?></div><del class="ml-2 text-base font-normal md:text-xl"><?php echo htmlspecialchars($main['course_fee']); ?></del>
                                                <p class="text-xs font-normal text-gray-500 md:text-base"><?php echo htmlspecialchars($main['course_name']); ?></p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between mb-2"></div>
                                    </div><a class="bg-green whitespace-nowrap button primary text-center md:w-full centered-buttons" href="<?php echo htmlspecialchars($enroll_url); ?>">Enroll Now</a>
                                </div>
                                <div class="md:static top-[-45px] left-0">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="grid py-2 md:p-4">
                <p class="mb-4 text-xl font-semibold">এই কোর্সে যা থাকছে</p>
                <?php echo htmlspecialchars_decode($main['course_materials']); ?>
            </div>
                        </div>
                    </div>
                    
                </div>
                
                
            </section>
        </div>
        <div class="block px-4 pt-4 md:hidden">
            <div class="grid py-2 md:p-4">
                <p class="mb-4 text-xl font-semibold">এই কোর্সে যা থাকছে</p>
                <?php echo htmlspecialchars_decode($main['course_materials']); ?>
            </div>
            <div class="xs:bg-[#EEF2F4]">
                <div class="pt-4 pb-2 bg-white">
                    <h2 class="mb-4 text-xl font-semibold md:text-2xl">কোর্স ইন্সট্রাক্টর</h2>
                    <?php
                        $sql = "SELECT * FROM faylearn_instructor WHERE course_id = '$id' AND active=1";
                        $result = $conn->query($sql);
                        $total_rows = $result->num_rows;
                        if ($result->num_rows > 0){
                            while ($row = $result->fetch_assoc()){
                            $fay_id = $row['fay_id'];
                            $result2 = $conn->query("SELECT * FROM fay_team WHERE fay_id = '$fay_id' AND active=1");
                            $row2 = $result2->fetch_assoc();
                            ?>
                            
                            <div class="grid grid-cols-1 px-4 mb-4 border rounded-md lg:grid-cols-2 hover:border-green">
                            <div class="flex items-center py-2 pb-0 last:pb-5 md:p-5 lg:pb-5">
                                <div class="mt-2 rounded-md" style="width: 73px; height: 73px; overflow: hidden; min-width: 50px;">
                                    <div class="rounded-md oveflow-hidden opacity-0 transition-opacity duration-300 ease-in-out" style="font-size: 0px; opacity: 1;">
                                        <img alt="MD. Faysal" data-original-src="<?php echo htmlspecialchars($row2['image']); ?>" draggable="false" loading="lazy" width="73" height="73" decoding="async" data-nimg="1" class="" src="<?php echo htmlspecialchars($row2['image']); ?>" style="color: transparent;">
                                    </div>
                                </div>
                                <div class="flex-1 ml-3">
                                    <h3 class="text-lg"><?php echo htmlspecialchars_decode($row2['name_english']); ?></h3>
                                    <div class="text-sm"><?php echo htmlspecialchars_decode($row2['job_tittle']); ?></div>
                                    <div class="text-sm"><?php echo htmlspecialchars_decode($row2['known_for']); ?></div>
                                </div>
                            </div>
                            </div>
                                
                                
                                
                                
                                
                          <?php  }
                        }
                        ?>
                </div>
                
            </div>
            
            <div class="mb-5">
                <h2 class="mb-4 text-xl font-semibold md:text-2xl">যেভাবে পেমেন্ট করবেন</h2>
                <div class="rounded-md md:border md:p-4 xs:py-2">
                    <p>কীভাবে পেমেন্ট করবেন তা বিস্তারিত জানতে   <a href="https://www.youtube.com/watch?v=EV_iBpNfEGE" class="underline"> এই ভিডিওটি দেখুন</a></p>
                </div>
            </div>
            
        </div>
        
        
        
            <!--Contact-->
    <div class="bg-white pb-10 px-10 md:hidden">
        <div class="mb-0">
            <h2 class="mb-4 text-xl font-semibold md:text-2xl">আমরা আপনাকে সাহায্য করতে অপেক্ষা করছি</h2>
            <div class="md:max-w-[300px]"><a href="tel:09649488888">
                    <div class="flex w-full items-center justify-center rounded border border-[#E5E7EB] py-3 hover:border-[#1CAB55] md:max-w-[300px] md:rounded-lg md:px-6 md:py-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 29 28" class="w-[17px] h-[17px] md:w-6 md:h-6">
                            <path stroke="#1CAB55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.223" d="M17.246 2.917a9.298 9.298 0 018.213 8.204M17.246 7.05a5.164 5.164 0 014.083 4.083"></path>
                            <path stroke="#1CAB55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.223" d="M13.37 14.551c4.655 4.653 5.71-.73 8.673 2.231 2.857 2.856 4.5 3.428.88 7.047-.454.364-3.334 4.748-13.457-5.373C-.658 8.335 3.722 5.451 4.086 4.998c3.629-3.628 4.193-1.977 7.05.879 2.961 2.962-2.42 4.022 2.235 8.674z" clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="ml-2 text-base font-medium text-[#1CAB55] md:text-lg">কল করুন 09649488888 নম্বরে</h3>
                    </div>
                </a></div>
        </div>
    </div>
        
        
        
    </div>

    <!--bottom start-->
    <div class="bottomBar bottom-0 left-0 z-50 w-full p-4 mx-md:fixed mx-md:bg-white mx-md:drop-shadow-[0_-3px_15px_rgba(0,0,0,0.20)] md:hidden">
        <div class="relative md:static">
            <div class="flex items-center justify-between md:flex-col md:items-start">
                <div>
                    <div class="flex items-center justify-between md:flex-col md:items-start">
                        <div class="md:mb-3">
                            <div class="inline-block text-2xl font-semibold"><?php echo htmlspecialchars($main['final_fee']); ?></div><span class="infline-flex">
                                <del class="ml-2 text-base font-normal md:text-xl"><?php echo htmlspecialchars($main['course_fee']); ?></del>
                                <div class="c-Tukmu inline-block"></div>
                            </span>
                            <p class="text-xs font-normal text-gray-500 md:text-base"><?php echo htmlspecialchars($main['course_name']); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mb-2"></div>
                </div><a class="w-auto border-t-2 border-l-2 border-r-2 text-green button centered-buttons border-green outlined" href="<?php echo htmlspecialchars($enroll_url); ?>">Enroll Now</a>
            </div>
            <div class="hidden md:block"></div>
        </div>
    </div>
</body>

</html>
<?php
}else{
    echo "No active course found.";
}
}
?>