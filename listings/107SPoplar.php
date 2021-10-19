<!doctype html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../map.php">Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../listings.php">Listings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../companies.php">Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../addProperty.php">Add Property</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="location.href='login.php'">Login</button>
      </form>
    </div>
  </nav>
</head>

<body>
  <div class="w-50 p-4 m-4 mx-auto bg-light text-center border" style="border-radius: 25px;">
    <img src="https://hometownstudentrentals.com/wp-content/uploads/2019/11/20200811_220837611_iOS-270x180.jpg" class="card-img-top" alt="...">
    <table class="table table-striped">
      <tbody>
        <tr>
          <th scope="row">Address:</th>
          <td>107 S Poplar St</td>
        </tr>
        <tr>
          <th scope="row">Type:</th>
          <td>House</td>
        </tr>
        <tr>
          <th scope="row">Beds:</th>
          <td>4</td>
        </tr>
        <tr>
          <th scope="row">Bath:</th>
          <td>2.5</td>
        </tr>
        <tr>
          <th scope="row">Rent:</th>
          <td>$3,850</td>
        </tr>
        <tr>
          <th scope="row">Walk to Armstrong:</th>
          <td>15 minutes</td>
        </tr>
        <tr>
          <th scope="row">Walk to Uptown:</th>
          <td>3 minutes</td>
        </tr>
      </tbody>
    </table>
    <canvas id="pricingChart" style="width:100%;max-width:600px"></canvas>
  </div>
  <div>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    var xValues = [1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2021];
    var yValues = [1350, 1400, 1200, 1300, 1375, 1510, 1620, 1980, 2050, 2150, 1400, 1600, 1850, 2050, 2250, 2500, 2650, 2800, 3100, 3400, 3550, 3850];

    new Chart("pricingChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,0,1.0)",
          borderColor: "rgba(0,0,0,0.5)",
          label: 'Cost ($USD)',
          data: yValues
        }]
      },
      options: {
        plugins: {
            title: {
                display: true,
                text: 'Cost of Rent Over Time',
                padding: {
                    top: 10,
                    bottom: 10
                }
            }
        },
        scales: {
          yAxes: [{
            ticks: {
              min: 0,
              max: 4000
            }
          }],
        }
      }
    });
  </script>
</body>

</html>