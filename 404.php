<?php 
include "config.php";
$login = new login();
$html->data['page']='404 Erreur';
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <?php  include("./partials/head.php");?>
</head>
<body>
<?php  include("./partials/header.php");?>
<!-- First Parallax Image with Logo Text -->
<div class="height-full-screen w3-display-container bgimg img1" id="home">
  <div class="w3-display-middle w3-text-white"  style="white-space:nowrap;">
    <h1 class="w3-opacity-min w3-padding-large w3-black w3-wide w3-animate-opacity w3-round-large">404</h1>
    <p class="w3-opacity-min w3-padding-large w3-black w3-wide w3-animate-opacity w3-round-large">Page not found</p>
    <div>
      <a onclick="history.back(-1)" class="w3-btn w3-red w3-round-large">Go Back</a>
      <a href="<?php  echo $chemain; ?>" class="w3-btn w3-red w3-round-large">Go to Home Page</a>
    </div>
  </div>
</div>
<?php  include("./partials/footer.php");?>
</body>
</html>