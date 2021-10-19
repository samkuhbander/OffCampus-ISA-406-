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
  <h1 style="text-align: center; margin:30px;">Add a Property </h1> 
  <h3 style="text-align: center; margin:40px;">Submit a property and our team will contact you for more information and review.</h1>
  <div class="col-md-6" style="margin: auto; padding: 30px;">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Rental Company</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="John Smith">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Relation to Property</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
    <label for="inputCity">State</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Beds</label>
      <input type="number" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Baths</label>
      <input type="number" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Price</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Property Type</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="House or Apartment">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I own this property
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit Property</button>
</form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>