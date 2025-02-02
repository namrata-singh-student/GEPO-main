<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="edit_pi.css">
  </head>
  <body>
    
    <div class="container-fluid head fs-1 m-0 py-3 d-flex align-items-center justify-content-between">
        <button type="button" onclick="window.location.href='admin.html'" aria-label="Go Back" class="back align-items-center"><img src="images/back.png" alt="" width="24" height="30" class="bac"></button>
        <h2 class="title fw-bold mx-auto">Editing Program & Initiatives</h2>

    </div>
    <div class="container-fluid form-cont">
      <form action="edit_pi_update.php" method="POST" enctype="multipart/form-data">
          <div class=" p-5">
            <label for="exampleInputEmail1" class="form-label d-inline fw-bolder">Title :</label>
            <select name="title_id" class="form-select d-inline w-75" aria-label="Default select example">
              <option selected>Select title below</option>
              <?php include 'edit_pi_1.php';?>
              <?php foreach ($options as $option): ?>
                <option value="<?= $option['sl'] ; ?>"><?= htmlspecialchars($option['title']); ?></option> 
              <?php endforeach; ?>
            </select>
          </div>
          <div class=" p-5 d-flex flex-row align-items-start">
            <label for="exampleInputEmail1" class="form-label fw-bolder">Description :</label>
            <textarea name="description" class="form-control w-75 ms-1" id="description" rows="3"></textarea>
          </div>
          <div class=" p-5">
            <label for="exampleInputEmail1" class="form-label d-inline fw-bolder">Image :</label>
            <input name="image" class="form-control d-inline w-75" type="file" id="image">
          </div>

          <button type="submit" class="btn btn-primary w-50 ms-5">Submit</button>
      </form>
      <div class="d-flex align-items-center">
        <label for="map-link" class="ms-5 mt-5">Want to enter university locations ?</label>
        <button type="button" class="btn btn-link mt-5" id="map-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Click here!</button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Enter university location details</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="edit_pi_map.php" method="POST" enctype="multipart/form-data">
                <div class=" p-2 d-flex flex-row align-items-start">
                  <label for="exampleInputEmail1" class="form-label fw-bolder"> Latitude: </label>
                  <input type="number" name="latitude" id="inputPassword6" class="form-control" step="any">
                </div>
                <div class=" p-2 d-flex flex-row align-items-start">
                  <label for="exampleInputEmail1" class="form-label fw-bolder"> Longitude: </label>
                  <input type="number" name="longitude" id="inputPassword6" class="form-control" step="any">
                </div>
                <div class=" p-2">
                  <label for="exampleInputEmail1" class="form-label d-inline fw-bolder">Title :</label>
                  <input type="text" name="title" id="inputPassword6" class="form-control w-75 d-inline">
                </div>
                <div class=" p-2 d-flex flex-row align-items-start">
                  <label for="exampleInputEmail1" class="form-label fw-bolder">Description :</label>
                  <textarea name="description" class="form-control w-75 ms-1" id="description" rows="3"></textarea>
                </div>
                <div class=" p-2">
                  <label for="exampleInputEmail1" class="form-label d-inline fw-bolder">Image :</label>
                  <input name="image" class="form-control d-inline w-75" type="file" id="image">
                </div>

                <button type="submit" class="btn btn-primary w-50 ms-5">Submit</button>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>