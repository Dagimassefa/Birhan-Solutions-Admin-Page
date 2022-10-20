<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Birhan Solutions|Admin Page|Filter all employee record</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }

        th,
        td {
            padding-left: 2px;
            padding-right: 5px;
        }
    </style>

    <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://t.me/+-fl3lAV1HNxkOTlh" class="telegram"><i class="bi bi-telegram"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="admin dashboard.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Birhan Solutions<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="admin dashboard.php#available">Set Availablity</a></li>
                    <li><a href="admin dashboard.php#assign">Assign Employee</a></li>
                    <li><a href="admin dashboard.php#change-password">Change Password</a></li>
                    <li class="dropdown"><a href="#"><span>Update</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="Update-Status.php" target="_blank">Developer's Status</a></li>

                            <li><a href="Update-Personal-Info.php" target="_blank">Developer's Personal Information</a></li>
                            <li><a href="Update-Educational-Info.php" target="_blank">Developer's Educational Information</a></li>
                            <li><a href="Update_CV.php" target="_blank">Developer's CV</a></li>
                            <li><a href="Update-Links.php" target="_blank">Developer's Links</a></li>
                            <li><a href="Update-skills.php" target="_blank">Update Developer's Skills</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Filter By</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="filter-by-status.php" target="_blank">By Status</a></li>

                            <li><a href="filter-by-language.php" target="_blank">By Language</a></li>
                            <li><a href="filter-by-availablity.php" target="_blank">By Availablity</a></li>
                            <li><a href="all-employee-record.php" target="_blank">All Employee Record</a></li>
                            <li><a href="search-employee.php" target="_blank">Search Employee Record By Email</a></li>
                            <li><a href="employee-work-history.php" target="_blank">Show Employee Work History</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>


    <div style="margin-left: 30px;margin-right:30px">

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>All Employee's Record </h2>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <?php
        include_once 'dbconnect.php';
        $sql = "SELECT * FROM Developers_info";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {

            echo "<table style=' border-collapse: collapse; margin: 25px 0;  font-size: 1.2em; font-family: sans-serif;min-width: 400px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); border: 1px solid black;'>";
            echo "<tr style=' background-color: #009879; color: #ffffff; border: 1px solid black;'><th style=' border: 1px solid black;'>First Name </th>
        <th style=' border: 1px solid black;'>Last Name</th><th style=' border: 1px solid black;'>Email Address </th><th style=' border: 1px solid black;'>Phone Number </th>
        <th style=' border: 1px solid black;'>College Name </th><th style=' border: 1px solid black;'>Level</th><th style=' border: 1px solid black;'>Major</th>
        <th style=' border: 1px solid black;'>CV</th><th style=' border: 1px solid black;'>LinkedIn</th><th style=' border: 1px solid black;'>Github</th><th>Languages</th>
        <th style=' border: 1px solid black;'>OtherSkills</th><th>status</th></tr>";
            while ($row = $result->fetch_assoc()) {

                echo "<tr style='border: 1px solid black;'><td style=' border: 1px solid black;'>" . $row['FirstName'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['LastName'] . "</td><td style=' border: 1px solid black;'>" . $row['EmailAddress'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['PhoneNumber'] . "</td><td style=' border: 1px solid black;'>" . $row['CollegeName'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['edu_level'] . "</td><td style=' border: 1px solid black;'>" . $row['Major'] . "</td>
            <td style=' border: 1px solid black;'>" ?> <a href="downloads.php?file=<?php echo $row['CV'] ?>" target="_blank">View</a><?php echo "</td><td style=' border: 1px solid black;'>" . $row['LinkedInLink'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['GithubLink'] . "</td><td style=' border: 1px solid black;'>" . $row['LanguagesAndSkills'] . "</td>
            <td style=' border: 1px solid black;'>" . $row['OtherSkills'] . "</td><td style=' border: 1px solid black;'>" . $row['emp_status'] . "</td></tr>";
                                                                                                                                    }
                                                                                                                                    echo "</table>";
                                                                                                                                } else
                                                                                                                                    echo " 0 Results found";
                                                                                                                                $con->close();

                                                                                                                                        ?>
    </div>
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Birhan Solutions</span>
                    </a>
                    <div class="social-links d-flex mt-4">
                        <a href="https://t.me/+-fl3lAV1HNxkOTlh" class="linkedin"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="../privacypolicy.html">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#services">Development</a></li>
                        <li><a href="#services">Database Administration</a></li>
                        <li><a href="#services">Software Testing</a></li>
                        <li><a href="#contact">Request a service</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong>birhan.solutions@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Birhan Solutions</span></strong>. All Rights Reserved
            </div>

        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>