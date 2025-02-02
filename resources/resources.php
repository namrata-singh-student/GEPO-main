<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources & Support - GEPO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/resources.css">
</head>
<body>
    <header>
        <h1>Resources & Support</h1>
    </header>
    <div class="container">
        <section class="about-section">
            <h2>Resources & Support</h2>

            <!-- Student Resources -->
            <div class="resource-card">
                <h3>Student Resources</h3>
                <p>Guidance and support for students, including:</p>
                <ul>
                    <?php
                    $sql = "SELECT * FROM resources WHERE type = 'Student Resources'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row['description'] . "</li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- Faculty Resources -->
            <div class="resource-card">
                <h3>Faculty Resources</h3>
                <p>Support for faculty engaging in global academic initiatives:</p>
                <ul>
                    <?php
                    $sql = "SELECT * FROM resources WHERE type = 'Faculty Resources'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row['description'] . "</li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- International Guidelines -->
            <div class="resource-card">
                <h3>International Guidelines</h3>
                <p>Comprehensive guidelines for international engagements:</p>
                <ul>
                    <?php
                    $sql = "SELECT * FROM resources WHERE type = 'International Guidelines'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row['description'] . "</li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- Downloadable PDFs -->
            <div class="resource-card">
                <h3>Downloadable PDFs</h3>
                <p>Access important resources in downloadable format:</p>
                <ul>
                    <?php
                    $sql = "SELECT * FROM downloadable_files";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><a href="' . $row['file_url'] . '" download="' . $row['name'] . '">' . $row['name'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>
    <footer>
        <p>© 2025 Global Engagement & Partnerships Office. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
