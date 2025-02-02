<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programs and Initiave Section</title>
    <link rel="stylesheet" href="pi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./pi_map.css">
  </head>
  <body>
    <div class="loading" id="loadingOverlay" >
      <div class="spinner-border" role="status"></div>
      Loading...
    </div>
    <div class="outer">
        <dotlottie-player class="background" src="https://lottie.host/4c16a2f1-487f-4d9c-820f-59f1029f7f94/51DlagJpgs.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>
        <div class="container h1 pt-2">
            <div class="row align-items-center">
                <div class="col-2">
                    <img class="w-75 h-50 pt-2" src="images/log.png" alt="logo">
                </div>
                <div class="col-10 text-center">
                    <div class="h1 mt-2 heading" id="tit">
                        Welcome to Programs and Initiative Section !
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- data-bs-ride="carousel" -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="d-flex flex-row">
                <div class="container slides-info">
                    <div class="slide1">
                        <h2 class="pt-2 text-center first">
                          <?php include 'pi_1.php'; echo $title1; ?>
                        </h2><br>
                          <?php include 'pi_1.php'; echo $description1; ?> 
                        <span class="auto-text"></span>
                        <br>
                        Information on partner universities :- <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#s11">Click Here</button>
                        <br>
                        We have scholarships also :- <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#s12">Click Here</button>
                    </div>
                </div>
                <img src="<?php include 'pi_1.php'; echo $image1; ?>" class="d-block w-100 slides flex-grow-1" alt="...">
            </div>
          </div>
          <div class="modal fade" id="s11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable  modal-xl">
              <div class="modal-content map-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel1">Information on partner universities</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div id="map"></div>
                  <div id="myModal" class="mapmodal">
                    <div class="modal-map" id="mycontent">
                      <span class="close">&times;</span>
                      <div class="map_content">
                        <h2 id="modal-title"></h2>
                        <p id="modal-description"></p>
                      </div>
                      <div class="images" id="modal-images"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="s12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Scholarships in partner universities</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  We are committed to making study abroad experiences accessible to all students.<br> 
                  Scholarships are available based on merit and need, including:<br>
                  Global Vision Scholarship: Awarded to students demonstrating exceptional academic performance and a commitment to international engagement.<br>
                  Cultural Exchange Grant: Provides financial assistance to students participating in programs focused on cultural studies or language immersion.<br>
                  Sustainability Initiative Grant: Supports students involved in environmentally focused research or projects during their study abroad.<br>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div class="d-flex flex-row">
                <div class="container slides-info">
                    <div class="slide1">
                        <h2 class="pt-2 text-center first">
                          <?php include 'pi_1.php'; echo $title2; ?>
                        </h2><br><br>
                          <?php include 'pi_1.php'; echo $description2; ?>
                        <br>
                        <span class="auto-text1"></span>
                    </div>
                </div>
                <img src="<?php include 'pi_1.php'; echo $image2; ?>" class="d-block w-100 slides flex-grow-1" alt="...">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div class="d-flex flex-row">
                <div class="container slides-info w-50">
                    <div class="slide1">
                        <h2 class="pt-2 text-center first">
                          <?php include 'pi_1.php'; echo $title3; ?>
                        </h2><br><br>
                          <?php include 'pi_1.php'; echo $description3; ?>
                    </div>
                </div>
                <img src="<?php include 'pi_1.php'; echo $image3; ?>" class="d-block w-50 slides" alt="...">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div class="d-flex flex-row">
                <div class="container slides-info w-50" >
                    <div class="slide1">
                        <h2 class="pt-2 text-center first">
                          <?php include 'pi_1.php'; echo $title4; ?>
                        </h2><br><br>
                          <?php include 'pi_1.php'; echo $description4; ?>
                        <br>
                        <span class="auto-text2"></span>
                    </div>
                </div>
                <img src="<?php include 'pi_1.php'; echo $image4; ?>" class="d-block w-50 slides" alt="...">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <script type="module" src="pi.js"></script>
    <script>
        const loadingOverlay = document.getElementById('loadingOverlay');
        setTimeout(() => {
            loadingOverlay.style.display = 'none';
        }, 2000); // Adjust the time as needed
    </script>
    <script src="pi_map.js"></script>
  </body>
</html>