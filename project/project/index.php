<?php
  include_once 'includes/init.php';
$conn;
$sql = "SELECT * FROM products WHERE featured =1";

$featured = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>SDSU Essentials</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" >
  </script>
  <script src ="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class ="container">
    <a href="/project/index.php" class="navbar-brand" id="text">SDSU Essentials</a>
    <ul class ="nav navbar-nav">
      <!--Drop Down Menu-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>
        <ul class ="dropdown-menu" role="menu"
          <li><a href="#" id="dropdowntext">Shirts</a></li>
          <li><a href="#"id="dropdowntext">Pants</a></li>
          <li><a href="#"id="dropdowntext">Shoes</a></li>
          <li><a href="#"id="dropdowntext">Accessories</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!--Inserting images-->
  <div id="background-image">
    <div id="image-1"></div>
    <!--<div id="image-2"></div>-->
  </div>
  <p>
    Welcome to our online shopping site where you can find all the SDSU back to school essentials!
  </p>
  <!--remove the spaces and center the products-->

  <div class="container"></div>


  <!--main content of featured products-->
  <div class = "text-center">
    <h2 id = "text2">Featured Products</h2>
  <div class ="row d-flex justify-content-center">
  <div class="col-md-10">
    <div class="row">
      <?php $counter = 1; while($product = mysqli_fetch_assoc($featured)): ?>
      <!-- echo "<tr><form action = "update.php" method = post>"; -->
      <div class ="col-md-4">
        <h4><?=$product['title']; ?></h4>
        <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" id="images"/>
        <p class ="list-price text-danger">List Price: <s>$<?=$product['list_price']; ?></s></p>
        <p class="price">Our Price: $<?=$product['price']; ?></p>
        <button type="button" class="btn-success" data-toggle="modal" data-target="#details-<?$counter;?>">Details</button>
      </div>
    <?php $counter++; endwhile; ?>
  </div>
</div>
</div>

<div>
  <footer class ="text-center" id="footer">&copy;Copyright 2019 SDSU Essentials</footer>
</div>

<!--details modal-->
<?php include 'details-modal-RubberDuck.php';
      include 'details-modal-BoatShoes.php';
      include 'details-modal-Airpods.php';
      include 'details-modal-Hydroflask.php';
      include 'details-modal-SororityGirlStarterPack.php';
      include 'details-modal-FratBoyStarterPack.php';
?>
<!--end of details modal-->


</body>
</html>
