<?php
include "include/config.php";
$category = isset($_GET["category"])
    ? htmlspecialchars($_GET["category"])
    : null;
$tittle = $category ?: "Online Courses";
$dir = isset($category) ? "course/$category" : "course";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style.css">
    <script src="https://kit.fontawesome.com/db5ea6be6b.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FayLearn | <?php echo htmlspecialchars($tittle); ?></title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta name="description" content="Explore a wide range of online courses at FayLearn. Learn differently with our unique educational platform.">
    <meta name="keywords" content="FayLearn, <?php echo htmlspecialchars(
        $tittle
    ); ?>, faylearn course, online learning, academic courses, nursing courses, educational platform">
    <meta name="author" content="Md. Faysal, Shovan Mandal">

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://learn.fay.com.bd/<?php echo htmlspecialchars(
        $dir
    ); ?>">

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
          "name": "<?php echo htmlspecialchars($tittle); ?>",
            "description": "Explore a wide range of online courses at FayLearn. Learn differently with our unique educational platform.",
            "url": "https://learn.fay.com.bd/<?php echo htmlspecialchars(
                $dir
            ); ?>",
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
        <div class="w-full mx-auto flex items-center justify-between gap-3 px-4 py-3 md:px-7 bg-white border-b border-gray-200">
            <div class="flex gap-2">
                <div class="md:hidden">
                    <a class="h-[27px] w-[100px]" href="https://learn.fay.com.bd">
                        <div class="flex items-center opacity-0 transition-opacity duration-300 ease-in-out font-semibold" style="font-size: 27px; opacity: 1;">
                            <img alt="FayLearn Logo" src="https://learn.fay.com.bd/logo.svg" width="40" height="27" style="color: transparent;">
                            <span>FayLearn</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="items-center hidden gap-9 md:flex">
                <a class="h-[27px] w-[100px]" href="/">
                    <div class="flex items-center opacity-0 transition-opacity duration-300 ease-in-out" style="font-size: 27px; opacity: 1;">
                        <img alt="FayLearn Logo" src="https://learn.fay.com.bd/logo.svg" width="40" height="27" style="color: transparent;">
                        <span>FayLearn</span>
                    </div>
                </a>
            </div>
            <div class="flex-1 hidden w-full pr-4 md:block"></div>
            <div class="flex items-center space-x-4 md:space-x-6">
                <div class="flex items-center gap-3 rounded-md pl-2 pr-2 md:border-2 max-h-96 md:gap-6">
                    <a class="items-center hidden gap-1 text-green md:flex" href="/index.html"><span class="inline-block">Home</span></a>
                </div>
                <div class="flex items-center gap-3 rounded-md pl-2 pr-2 md:border-2 max-h-96 md:gap-6">
                    <a class="items-center hidden gap-1 text-green md:flex" href="/course.php"><span class="inline-block">Course</span></a>
                </div>
                <div class="flex items-center gap-3 rounded-md border-1 max-h-96 md:gap-6">
                    <a class="items-center hidden gap-1 text-green md:flex" href="tel:09649488888">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                        </svg>
                        <span class="inline-block">09649488888</span>
                    </a>
                </div>
                <div class="block">
                    <a id="login-button" href="https://fay.com.bd" class="flex items-center px-3 py-1 text-white rounded-md bg-green md:px-6">
                        <span class="leading-[18px] whitespace-nowrap text-[12px] font-semibold leading-[24px] md:text-[16px] md:font-medium">FAY.COM.BD</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main pt-12 pb-16 md:ml-5">
        <?php if ($category): ?>
            <?php
            $sql = "SELECT * FROM faylearn_course WHERE category_name = '$category' AND active=1 ORDER BY id DESC";
            $result = $conn->query($sql);
            $total_rows = $result->num_rows;
            ?>
            <div class="m-5 pt-4 mb-5 sm:mt-4">
                <div class="w-full h-full md:ml-5">
                    <div class="mb-4 sm:mb-8">
                        <a class="flex items-center justify-between w-full md:justify-start" href="#">
                            <h2 class="mr-2 truncate text-lg font-bold hover:text-green md:text-[22px]"><?php echo htmlspecialchars(
                                $category
                            ); ?></h2>
                            <span class="text-sm font-light text-gray-600">(<?php echo $total_rows; ?> course)</span>
                        </a>
                    </div>
                    <div class="hideScrollbar flex flex-col md:flex-row items-center w-full md:flex-wrap gap-5 md:h-full md:gap-6">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <a href="/course_details/<?php echo htmlspecialchars(
                                    $row["id"]
                                ); ?>">
                                    <div class="border border-[#E5E7EB] my-0 flex h-auto min-w-[200px] max-w-[300px] cursor-pointer flex-col overflow-hidden rounded transition-colors hover:border-green md:min-w-[272px] md:rounded-[6px]">
                                        <div class="opacity-0 transition-opacity duration-300 ease-in-out" style="font-size: 0px; opacity: 1;">
                                            <img alt="<?php echo htmlspecialchars(
                                                $row["course_name"]
                                            ); ?>" src="<?php echo htmlspecialchars(
    $row["course_banner"]
); ?>" draggable="false" fetchpriority="high" width="272" height="152" decoding="async" style="color: transparent;">
                                        </div>
                                        <div class="flex min-w-0 flex-1 flex-col justify-between gap-2 p-[14px]">
                                            <div>
                                                <h2 class="mb-1 h-10 text-sm font-semibold line-clamp-2 md:text-lg"><?php echo htmlspecialchars(
                                                    $row["course_name"]
                                                ); ?></h2>
                                                <h3 class="max-h-[50px] overflow-hidden truncate text-xs text-[#6B7280] md:text-sm"><?php echo htmlspecialchars(
                                                    $row["course_bio"]
                                                ); ?></h3>
                                            </div>
                                            <div class="flex items-center justify-between md:items-end">
                                                <div class="price-template"><?php echo htmlspecialchars(
                                                    $row["final_fee"]
                                                ); ?> <s><?php echo htmlspecialchars(
     $row["course_fee"]
 ); ?></s></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p class="pt-10 text-xl font-semibold px-5" style="padding-bottom: 15rem;">No Course Available</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <?php
            $sql =
                "SELECT * FROM faylearn_category WHERE active=1 ORDER BY order_by";
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()):

                    $category_name = htmlspecialchars($row["category_name"]);
                    $course_count_sql = "SELECT COUNT(*) as total_courses FROM faylearn_course WHERE category_name = '$category_name' AND active=1";
                    $course_count_result = $conn->query($course_count_sql);
                    $course_count_row = $course_count_result->fetch_assoc();
                    $total_courses = $course_count_row["total_courses"];
                    ?>
                <div class="m-5 pl-2 pr-2 pt-4 mb-5 sm:mt-4">
                    <div class="w-full h-full md:ml-5">
                        <div class="mb-4 sm:mb-8">
                            <a class="flex items-center justify-between w-full md:justify-start" href="/course/<?php echo htmlspecialchars(
                                $row["category_name"]
                            ); ?>">
                                <h2 class="mr-2 truncate text-lg font-bold hover:text-green md:text-[22px]"><?php echo $category_name; ?><span class="text-sm font-light text-gray-600">(<?php echo $total_courses; ?> course)</span></h2>
                                <span class="text-l text-gray-600 underline hover:text-green">View All</span>
                            </a>
                        </div>
                        <div class="hideScrollbar grid w-full grid-cols-[1fr_1fr_1fr_1fr] overflow-x-auto md:flex-wrap mx-xl:flex mx-xl:flex-nowrap gap-5 md:h-full md:gap-6">
                            <?php
                            $sql2 = "SELECT * FROM faylearn_course WHERE category_name = '$category_name' AND active=1";
                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows > 0):
                                while ($row2 = $result2->fetch_assoc()): ?>
                                <a href="/course_details/<?php echo htmlspecialchars(
                                    $row2["id"]
                                ); ?>">
                                    <div class="border border-[#E5E7EB] my-0 flex h-auto min-w-[200px] max-w-[200px] cursor-pointer flex-col overflow-hidden rounded transition-colors hover:border-green md:min-w-[272px] md:rounded-[6px]">
                                        <div class="opacity-0 transition-opacity duration-300 ease-in-out" style="font-size: 0px; opacity: 1;">
                                            <img alt="<?php echo htmlspecialchars(
                                                $row2["course_name"]
                                            ); ?>" src="https://i.ibb.co/fks5CWr/U10n-Bu-ERNIA-HD.jpg" draggable="false" fetchpriority="high" width="272" height="152" decoding="async" style="color: transparent;">
                                        </div>
                                        <div class="flex min-w-0 flex-1 flex-col justify-between gap-2 p-[14px]">
                                            <div>
                                                <h2 class="mb-1 h-10 text-sm font-semibold line-clamp-2 md:text-lg"><?php echo htmlspecialchars(
                                                    $row2["course_name"]
                                                ); ?></h2>
                                                <h3 class="max-h-[50px] overflow-hidden truncate text-xs text-[#6B7280] md:text-sm"><?php echo htmlspecialchars(
                                                    $row2["course_bio"]
                                                ); ?></h3>
                                            </div>
                                            <div class="flex items-center justify-between md:items-end">
                                                <div class="price-template"><?php echo htmlspecialchars(
                                                    $row2["final_fee"]
                                                ); ?> <s><?php echo htmlspecialchars(
     $row2["course_fee"]
 ); ?></s></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            else:
                echo '<p class="pt-10 text-xl font-semibold px-5" style="padding-bottom: 22rem;">No Course Available</p>';
            endif;
            ?>
        <?php endif; ?>

        <div class="bg-white pb-2 px-10">
            <h2 class="mb-4 text-xl font-semibold md:text-2xl">আমরা আপনাকে সাহায্য করতে অপেক্ষা করছি</h2>
            <a href="tel:09649488888" class="flex w-full items-center justify-center rounded border border-[#E5E7EB] py-3 hover:border-[#1CAB55] md:max-w-[500px] md:rounded-lg md:px-6 md:py-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 29 28" class="w-[17px] h-[17px] md:w-6 md:h-6">
                    <path stroke="#1CAB55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.223" d="M17.246 2.917a9.298 9.298 0 018.213 8.204M17.246 7.05a5.164 5.164 0 014.083 4.083"></path>
                    <path stroke="#1CAB55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.223" d="M13.37 14.551c4.655 4.653 5.71-.73 8.673 2.231 2.857 2.856 4.5 3.428.88 7.047-.454.364-3.334 4.748-13.457-5.373C-.658 8.335 3.722 5.451 4.086 4.998c3.629-3.628 4.193-1.977 7.05.879 2.961 2.962-2.42 4.022 2.235 8.674z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="ml-2 text-base font-medium text-[#1CAB55] md:text-lg">কল করুন 09649488888 নম্বরে</h3>
            </a>
        </div>
    </div>

    <div class="bottomBar fixed bottom-0 z-20 w-full px-4 py-2 bg-white border-t border-gray-200 footer-container md:hidden">
        <div class="flex items-center justify-around">
            <a class="inline-flex flex-col items-center justify-center gap-1 transition-transform transform cursor-pointer hover:-translate-y-1" href="https://learn.fay.com.bd">
                <i class="fa-solid fa-house"></i>
                <div class="text-center text-xs font-normal leading-3 text-gray-400">হোম</div>
            </a>
            <a class="inline-flex flex-col items-center justify-center gap-1 transition-transform transform cursor-pointer hover:-translate-y-1" href="/course.php">
                <i class="fa-solid fa-book"></i>
                <div class="text-center text-xs font-normal leading-3 text-gray-400">কোর্স</div>
            </a>
            <a class="bg-green whitespace-nowrap button primary text-center md:w-auto centered-buttons" href="course_details/1">Nurture 1.0</a>
        </div>
    </div>
</body>

</html>
