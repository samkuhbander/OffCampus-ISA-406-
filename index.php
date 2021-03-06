

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
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="location.href='login.php'">Login</button>
      </form>
    </div>
  </nav>
</head>

<body>
  <h1 style="text-align:center;padding:50px;">Welcome to OffCampus!</h1>
  <h3 style="text-align:center; padding:25px;">This is a project for our ISA406 group. <br> The purpose of this project is to create a centralized system for students to view rental properties.</h3>
  <form>
  <div class = "w-50 p-4 m-4 mx-auto bg-light text-center border" style="border-radius: 25px;">
  <div class="form-group">
    <label for="exampleInputEmail1">Sign Up for Our Email List</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll keep you updated on our application!</small>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>
  </form>
  </div>

<?php

// connect to the database
$db = mysqli_connect('127.0.0.1', 'root', '', 'database1'); //"database1" is the name of my local database 
if ($db) {
  echo 'connected';
} else {
  echo 'not connected';
}
?> 

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>