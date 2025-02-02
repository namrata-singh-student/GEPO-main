<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GEPO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">

</head>
<body>
    <header>
        <h1>About Us<br>Global Engagement & Partnerships Office</h1>
    </header>
    <div class="container">
        <!-- Vision, Mission, Objectives -->
        <section class="about-section">
            <div id="vmoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $vmoResult = $conn->query("SELECT * FROM vmo");
                    $active = 'active';
                    while ($row = $vmoResult->fetch_assoc()) {
                        echo "<div class='carousel-item $active'>
                                <div class='carousel-content'>
                                    <h3>{$row['title']}</h3>
                                    <p>{$row['description']}</p>
                                </div>
                              </div>";
                        $active = ''; // Remove "active" for subsequent items
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#vmoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#vmoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Leadership Team -->
        <section class="about-section">
            <h2>Our Leadership Team</h2>
            <div id="leadershipCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $leadershipResult = $conn->query("SELECT * FROM leadership");
                    $active = 'active';
                    while ($row = $leadershipResult->fetch_assoc()) {
                        echo "<div class='carousel-item $active'>
                                <div class='profile'>
                                    <img src='{$row['image_url']}' alt='{$row['name']}' class='profile-img'>
                                    <h3>{$row['name']}</h3>
                                    <p>{$row['position']}</p>
                                </div>
                              </div>";
                        $active = ''; // Remove "active" for subsequent items
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#leadershipCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#leadershipCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    <div class="container">
        <!-- Simplified Organizational Structure -->
        <section class="about-section">
            <h2>Organizational Structure</h2>
            <div class="org-structure">
                <?php
                $query = "SELECT * FROM organizational_structure";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    $data = [];
                    while ($row = $result->fetch_assoc()) {
                        $data[$row['parent_position']][] = $row['position'];
                    }

                    function render_structure($parent, $data) {
                        if (isset($data[$parent])) {
                            echo '<div class="org-row">';
                            foreach ($data[$parent] as $child) {
                                echo '<div class="org-box">' . htmlspecialchars($child) . '</div>';
                                render_structure($child, $data);
                            }
                            echo '</div>';
                        }
                    }

                    render_structure(null, $data);
                } else {
                    echo '<p>No data available.</p>';
                }
                ?>
            </div>
        </section>

        <!-- FAQs Section -->
        <section class="about-section">
            <h2>Frequently Asked Questions (FAQs)</h2>
            <div class="faqs">
                <?php
                $query = "SELECT * FROM faqs";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="faq-item">';
                        echo '<strong>Q: ' . htmlspecialchars($row['question']) . '</strong>';
                        echo '<p>A: ' . htmlspecialchars($row['answer']) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No FAQs available.</p>';
                }
                ?>
            </div>
        </section>
    </div>
    <footer>
        <p>© 2025 Global Engagement & Partnerships Office. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
