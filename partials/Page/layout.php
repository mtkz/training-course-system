<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?></title>
  <link href="<?= ROOT_PATH  ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= ROOT_PATH  ?>css/bootstrap-rtl.min.css" rel="stylesheet">
  <link href="<?= ROOT_PATH  ?>css/font-vazir.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="mx-auto col-5 mt-5">
      <?= flash()->each() ?>
    </div>

    <?= $content ?>
  </div>
  <script src="<?= ROOT_PATH  ?>js/jquery.min.js"></script>
  <script src="<?= ROOT_PATH  ?>js/bootstrap.bundle.min.js"></script>
</body>
</html>
