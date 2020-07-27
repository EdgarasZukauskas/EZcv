<!DOCTYPE HTML>
<html>
  <head>
    <title>Edgaras Žukauskas // Access</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="includes/styles/style.style.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='includes/images/favicon.ico' type='image/x-icon'/ >
  </head>
  <body>
    <div class="content">
      <div class="container">
        <form action="index.php" method="get">
          <input class="codeEnter" name="id" type="text" placeholder = "Please enter code:" onfocus="this.placeholder = ''">
          <?php if ($error == 1){ echo '<div class="incorrectCode">Incorrect Access Code<br>Contact <a href="tel:+37069233663" class="telPhone">+370 692 33663</a></div>';} ?>
        </form>
      </div>
    </div>
  </body>
</html>
