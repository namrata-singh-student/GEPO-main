<?php
session_start();

// Redirect to login page if admin is not logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.html");
    exit();
}

$admin_name = $_SESSION['admin_username'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container_fluid main">
        <div class="container-fluid heading fs-1 m-0 py-3 text-center position-relative">
            <img src="images/log-1.png" alt="" class="h-100 position-absolute top-0 start-0 ps-3">
            <div class="h1 title fst-italic">Global Engagement & Partnerships Office (GEPO) Website<br><span class="underline">Admin Control Panel</span></div>
        </div>
        <nav class="navbar mb-3 bar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/R.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <div class="user">Welcome, <?php echo htmlspecialchars($admin_name); ?>!</div>
                </a>
                <a href="logout.php" class="btn btn-secondary position-absolute top-50 end-0 translate-middle-y">Logout</a>
            </div>
        </nav>
        <div class="d-flex card-cont m-0 w-100 justify-content-center">
            <div class="d-flex flex-column mb-6 w-75 align-items-center">
                <?php
                $sections = [
                    ["about_us.jpg", "About Us Section", "To edit the about us section click the button below"],
                    ["global-part.jpg", "Global Partnerships Section", "To edit the global partnership's content"],
                    ["prog_ini.jpg", "Programs & Initiatives Section", "To edit information in Programs & Initiatives Section"],
                    ["re_su.jpg", "Resources & Support Section", "To edit information in Resources & Support Section"],
                    ["e_n.jpg", "Events & News Section", "To edit information in Events & Support Section"],
                    ["c_s.jpeg", "Contact & Support Section", "To edit information in Contact and Support Section"]
                ];
                foreach ($sections as $section) {
                    echo "<div class='card sect-card my-3'>
                            <img src='images/{$section[0]}' class='card-img-top card-1' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$section[1]}</h5>
                                <p class='card-text'>{$section[2]}</p>
                                <a href='#' class='btn btn-primary'>Edit Now</a>
                            </div>
                          </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin.js"></script>
</body>
</html>
