<?php
// Include the database connection
include 'include/config.php';

// Get the search term from the URL
$search_term = isset($_GET['q']) ? $_GET['q'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FayLearn | Search</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta name="description" content="Explore a wide range of online courses at FayLearn. Learn differently with our unique educational platform.">
    <meta name="keywords" content="FayLearn, Search, faylearn course, online learning, academic courses, nursing courses, educational platform">
    <meta name="author" content="Md. Faysal, Shovan Mandal">
    
    <!-- Canonical Tag -->
    <link rel="canonical" href="https://learn.fay.com.bd/search">

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
          "name": "FayLearn | Search",
          "description": "Explore a wide range of online courses at FayLearn. Learn differently with our unique educational platform.",
          "url": "https://learn.fay.com.bd/search",
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
</head>

<body>
<header>
    <h1>FayLearn Search</h1>
    <form action="search.php" method="get">
        <input type="text" name="q" value="<?php echo htmlspecialchars($search_term); ?>" placeholder="Search for courses...">
        <button type="submit">Search</button>
    </form>
</header>

<main>
<?php
// Check if search term is not empty
if (!empty($search_term)) {
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, course_name FROM faylearn_course WHERE course_name LIKE ?");
    $like_term = '%' . $search_term . '%';
    $stmt->bind_param('s', $like_term);

    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Check if there are any results
    if ($result->num_rows > 0) {
        echo '<section>';
        echo '<h2>Search Results</h2>';
        // Print each course name as a hyperlink
        while ($row = $result->fetch_assoc()) {
            $course_name = htmlspecialchars($row['course_name']);
            $course_id = htmlspecialchars($row['id']);
            echo '<p><a href="/course_details.php?id=' . $course_id . '">' . $course_name . '</a></p>';
        }
        echo '</section>';
    } else {
        echo '<p>No courses found.</p>';
    }
    
    // Close the statement
    $stmt->close();
} else {
    echo '<p>Please enter a search term.</p>';
}

// Close the database connection
$conn->close();
?>
</main>

</body>
</html>
