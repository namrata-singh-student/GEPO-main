<?php include 'event_image.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="event.css">
    <title>Events & News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d06c559023.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Andika&family=Montserrat:wght@300;400;500;600&family=Roboto:wght@300&display=swap"
        rel="stylesheet" />
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="event_2.js" defer></script>
</head>

<body>
    <div class="outer">
        <div class="container h1 pt-2 mb-0">
            <div class="row align-items-center">
                <div class="col-2">
                    <img class="w-75 h-50 pt-2" src="images/log.png" alt="logo">
                </div>
                <div class="col-10 text-center heading">
                    <div class="h1 mt-2 heading" id="tit">
                        Events and News Section !
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="container-fluid px-0 calender">
        <header class="main-header">
            <div class="down-arrow"></div>
            <h1>Timeline of Several Events</h1>
        </header>
        <section id="timeline">
            <ul>
                <?php include 'event_1.php'; ?>                
            </ul>
        </section>
    </div>    

    <div class="container-fluid px-0 sub-1">
        <div class="container pt-2 sub-2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Latest News
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body body-1">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators" id="carousel-indicators"></div>
                            <div class="carousel-inner" id="carousel-inner"></div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Photo and Video Gallery
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body body-1">
                        <div class="row">
                        <?php 
                        foreach ($mediaItems as $index => $item) {
                            if ($index % 3 == 0 && $index != 0) {
                                echo '</div><div class="row pt-2">'; // Start a new row after every 3 items
                            }
                            if ($item['type'] == 'image') {
                                echo '<div class="col">
                                        <img src="' . htmlspecialchars($item['path']) . '" class="img-fluid" alt="">
                                    </div>';
                            } elseif ($item['type'] == 'video') {
                                echo '<div class="col">
                                        <video class="img-fluid" controls>
                                            <source src="' . htmlspecialchars($item['path']) . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>';
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="module" src="event.js"></script>
</body>

</html>