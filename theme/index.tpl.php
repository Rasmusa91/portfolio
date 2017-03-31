<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $config["title"]; ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php foreach($config["CSS"] as $css): ?>
        <link href="<?= $css; ?>" rel="stylesheet">
    <?php endforeach; ?>
  </head>
  <body>
    <?php include(__DIR__ . '/header.tpl.php'); ?>

    <?php
        if ($config["URL"]["mainPage"] === "home") {
            include(__DIR__ . '/../views/carousel.tpl.php');
        }
    ?>

    <div class="container">
      <?php include(__DIR__ . '/../views/' . $config['page'] . '.tpl.php'); ?>
      <?php include(__DIR__ . '/footer.tpl.php'); ?>
    </div>

    <?php foreach($config["JS"] as $js): ?>
        <script src="<?= $js; ?>"></script>
    <?php endforeach; ?>
  </body>
</html>
