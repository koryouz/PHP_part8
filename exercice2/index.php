<?php session_start();
$_SESSION['firstname'] = 'Jean';
$_SESSION['name'] = 'Dupont';
$_SESSION['age'] = 24;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP P8E1</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <a href="user.php">Lien vers user.php</a>
      <?php  ?>
    </div>
  </div>
</body>
</html>
