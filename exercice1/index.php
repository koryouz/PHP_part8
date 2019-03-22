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
      <p>IP Adress : <?php print_r($_SERVER['REMOTE_ADDR']);?></p>
      <p>User Agent : <?php print_r($_SERVER['HTTP_USER_AGENT']);?></p>
      <p>Server name : <?php print_r($_SERVER['SERVER_NAME']);?></p>
    </div>
  </div>
</body>
</html>
