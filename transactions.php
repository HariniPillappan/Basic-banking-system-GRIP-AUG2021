<!-- transactionDetails -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction Summary</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    body {
      background-image: url("1.jpg");
      height:100%;
      width=100%;
      background-size:cover;
    }

    .logo-text,
    .nav-link1 {
      color: white;
      padding-top: 0 px;
    }

    .list-customer {
      padding-left: 1100px;
    }

    .nav-link1:hover {
      color: aqua;
    }

    h2 {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="main-container nav-bg-color">
    <div class="inside-container nav-contain">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="index.php"><img src="logo.png" class="img-fluid" alt="" style="width:100px; height:100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav nav-list ml-auto">
            <a class="menu" href="index.php"><b>HOME</b></a>
            <a class="menu" href="transactions.php"><b>TRANSACTION</b></a>
            <a class="menu" href="index.php"><b>LOGOUT</b></a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!--carousel-->
  <div class="container divStyle"><br><br>
    <h2><b>Transaction Summary</b></h2>

    <br>
    <div class="table-responsive-sm">
      <table class="table roundedCorners tabletext table-sm table-condensed table-bordered table-darkblue">
        <thead>
          <tr>
            <th scope="col">Id</th>
                <th scope="col">Sender</th>
                <th scope="col">Receiver</th>
                <th scope="col">Transferred amount</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';

          $sql = "select * from transfers";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $rows['id']; ?></td>
              <td><?php echo $rows['fromuser']; ?></td>
              <td><?php echo $rows['touser']; ?></td>
              <td><?php echo $rows['transamount']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

    </div>
  </div>  
  <center>
    <footer style="padding-top: 200px;">
      <p>&copy 2021; Sparks Banking | Harini</p>
    </footer>
  </center>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</body>

</html>