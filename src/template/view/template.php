<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UOLITPHP</title>
  <link rel="stylesheet" href="<?php echo $this->link('property/assets/plugin/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo $this->link('property/assets/plugin/simple-line-icons/css/simple-line-icons.css'); ?>">
</head>
<body>

  <?php
    include_once('src/'.$location.'/view/'.$file_view.'.php');
  ?>

  <script src="<?php echo $this->link('property/assets/plugin/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>

