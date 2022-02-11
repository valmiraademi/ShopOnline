<?php
require_once "./header.php";
require_once "./lib/Dashboard.php";


$team = Dashboard::getTeam();


?>
<link rel="stylesheet" href="css/whoarewe.css?v=<?php echo time ();?>">
</head>
<body>
<div class="container">
		<?php
		require_once "./nav.php";

		?>


    <img src="img/object1.png" class="object1">
    <img src="img/object2.png" class="object2">
    <i class="fas fa-adjust mode"></i>

    <h1>MEET THE TEAM</h1>

    <br>
    <div class="row">
      <?php foreach ($team as $team) : ?>
        <div class="column">
          <div class="card">
            <div class="content">
              <img style="height: 400px; width: 350px;" src="<?php echo $team['foto']; ?>">
              <h2><?php echo $team['name']; ?></h2>
              <p class="title" style="font-style: italic;"><?php echo $team['position']; ?></p>
              <p><?php echo $team['bio']; ?></p>
              <p><a href="./ContactUs.php"><button class="button">Contact</button></a></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <script src="js/page.js"></script>

</body>

</html>