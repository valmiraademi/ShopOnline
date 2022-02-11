<?php
$error = false;
if (isset($_REQUEST['action'])) {
  switch ($_REQUEST['action']) {
    case 'login':
      require_once "./lib/Auth.php";
      $valid = Auth::login($_POST);
      if ($valid) {
        header('Location: index.php');
      } else {
        $error = 'Login failed.';
      }
      break;
    case 'signup':
      require_once "./lib/Registration.php";
      $valid = Registration::signup($_POST);
      if (!$valid) {
        $error = 'Registration failed.';
      }
      break;
  }
}


require_once "./header.php";

?>
<link rel="stylesheet" href="css/style.css?v=<?php echo time ();?>">
</head>

<body>

  <div class="container">
    <?php
    require_once "./nav.php";

    ?>
    <img src="img/object1.png" class="object1">
    <img src="img/object2.png" class="object2">

    <div class="content">
      <div class="content-text">
        <h1>Rose</h1>
        <br>
        <p> Put your best face forward with high-performance skin care.
          <br>Our range of skin care products cleanses, treats,
          <br> moisturizes, & protects with results-driven formulas & powerful ingredients.
          <br> Interested in learning how to achieve your skincare goals?
          <br>Sign in to see the newest products.
        </p>
        <br>
        <br>
      </div>
      <?php if (Auth::isLoggedIn()) : ?>
        
      <?php else : ?>
        <button onclick="document.getElementById('id02').style.display='block'" class="btn1" style="width:auto;">Sign In</button>
      <button onclick="document.getElementById('id01').style.display='block'" class="btn2" style="width:auto;">Sign Up</button>
      <?php endif; ?>
      

      <div id="id02" class="modal2">

        <form class="modal2-content animate" action="index.php?action=login" method="POST" name="forma2" onsubmit="return validate1(event)">

          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>


          <div class="container2">


            <h2>Log in here</h2>
            <br>
            <label for="uname"><b>Email</b></label>
            <input type="text" name="email" placeholder="Enter Email" required>
            <div class="error" id="e4"></div>


            <label for="psw"><b>Password</b></label>
            <input type="password" name="password" placeholder="password">
            <div class="error" id="e5"></div>


            <button type="submit"><input type="submit" value="Login" name="submit" style="background-color: #4CAF50; border: none;" />
            </button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>


          </div>

          <div class="container2">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot password?</a></span>
          </div>
        </form>
      </div>

      <div id="id01" class="modal2">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal2-content" action="index.php?action=signup" method="post" onsubmit="return validate(event)" name="forma">
          <div class="container2">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">
            <div class="error" id="e1"></div>

            <label for="psw"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email">
            <div class="error" id="e2"></div>

            <label for="psw-repeat"><b>Password</b></label>
            <input type="password" placeholder="Password" name="password">
            <div class="error" id="e3"></div>


            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
            <button type="submit" class="signupbtn"> <input type="submit" value="Sing up" name="submit" style="background-color: #4CAF50; border: none;" />
            </button>

          </div>
        </form>
      </div>
      <div class="content-image">
        <img src="img/skin.png" alt="">
      </div>
    </div>
    <i class="fas fa-adjust mode"></i>
    <script src="js/page.js"></script>
</body>

</html>