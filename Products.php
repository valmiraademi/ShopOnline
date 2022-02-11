<?php
require_once './lib/Dashboard.php';
require_once "./header.php";
$products = Dashboard::getProducts();
$productslider = Dashboard::getSlider();

?>
<link rel="stylesheet" href="css/products.css?v=<?php echo time ();?>">
</head>

<body>



  <div class="logo">
    <a href="index.php"><img src="img/logo.png" alt=""></a>
  </div>
  <!-- Slideshow container -->

<h1 class="h1">OUR PRODUCTS</h1>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

  <div class="slideshow-container" >
    <?php foreach ($productslider as $productslider) : ?>
      <div class="mySlides fade">
        <img src="<?php echo $productslider['foto']; ?>" class="foto"/>
      </div>
  </div>
  <br>
<?php endforeach; ?>

<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- The dots/circles -->



<br>
<br>
<br>


<?php foreach ($products as $products) : ?>
  <div class="containerproducts">
    <h2 class="title" style="font-size:35px;"><?php echo $products['titulli']; ?></h2>
    <img src="<?php echo $products['foto']; ?>" alt="" width="500px" height="auto"class="fotoja" />
    <p class="paragraf"><?php echo $products['teksti']; ?></p>
    <hr class="new4">
  </div>
<?php endforeach; ?>

<script src="js/slider.js"></script>
</body>

</html>