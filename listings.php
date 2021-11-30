<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Off Campus</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OffCampus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="map.php">Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listings.php">Listings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="companies.php">Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addProperty.php">Add Property</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button>
      </form>
    </div>
  </nav>
</head>

<body>
  <h1 style="text-align: center; margin:30px;">Listings</h1> 

<select onchange="location = this.value;">
  <option selected>Default Filter</option>
  <option value="listingLow.php">Price (low to high)</option>
  <option value="listingHigh.php">Price (high to low)</option>
  <option value="listingLow.php">Distance to Uptown</option>
  <option value="1">Walk to Armstrong</option>
</select>

  <div class="card-deck">
  <div class="card">
    <img src="https://hometownstudentrentals.com/wp-content/uploads/2019/11/20200811_220837611_iOS-270x180.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">107 S Poplar St</h5>
      <p class="card-text">House</p>
      <p class="card-text">4 Beds</p>
      <p class="card-text">2.5 Baths</p>
      <p class="card-text">$3,850</p>
      <a href="listings/107SPoplar.php" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card">
    <img src="https://hometownstudentrentals.com/wp-content/uploads/2018/02/205-W-Sycamore-horizontal.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">205 W Sycamore St</h5>
      <p class="card-text">Apartment</p>
      <p class="card-text">3 Beds</p>
      <p class="card-text">1 Baths</p>
      <p class="card-text">$6,300</p>
      <a href="listings/205WSycamore.php" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card">
    <img src="https://hometownstudentrentals.com/wp-content/uploads/2018/02/IMG_5447-1024x683.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">214 W Vine St</h5>
      <p class="card-text">House</p>
      <p class="card-text">4 Beds</p>
      <p class="card-text">2 Baths</p>
      <p class="card-text">$2,100</p>
      <a href="listings/214WVine.php" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>