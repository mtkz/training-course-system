<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?= ROOT_PATH  ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= ROOT_PATH  ?>css/simple-sidebar.css" rel="stylesheet">
  <link href="<?= ROOT_PATH  ?>css/bootstrap-rtl.min.css" rel="stylesheet">
  <link href="<?= ROOT_PATH  ?>css/font-vazir.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= ROOT_PATH  ?>css/panel.css">
</head>

<body>

  <div class="sidenav">
    <a href="#about"><span class="fa fa-dashboard"></span>داشبورد</a>
    <a class="dropdown-btn"><span class="fa fa-user"></span>مدرسان

      <i class="fa fa-caret-down"></i>
      <div class="dropdown-container">
        <a href="#">لیست مدرسین</a>
        <a href="#">افزودن مدرس</a>
      </div>
    </a>


    <a class="dropdown-btn"><span class="fa fa-users"></span>مدیریت کاربران

      <i class="fa fa-caret-down"></i>
      <div class="dropdown-container">
        <a href="#">لینک 1</a>
        <a href="#">لینک 2</a>
        <a href="#">لینک 3</a>
      </div>
    </a>
    <a class="dropdown-btn"><span class="fa fa-certificate"></span>دوره های آموزشی

      <i class="fa fa-caret-down"></i>
      <div class="dropdown-container">
        <a href="#">لیست دوره ها</a>
        <a href="#">افزودن دوره</a>
      </div>
    </a>
    <a class="dropdown-btn"><span class="fa fa-newspaper-o"></span>اخبار

      <i class="fa fa-caret-down"></i>
      <div class="dropdown-container">
        <a href="#">لیست اخبار</a>
        <a href="#">افزودن اخبار</a>
      </div>
    </a>

    <a href="#contact"><span class="fa fa-credit-card"></span>پرداختی</a>
    <div class="mt_exit_panel my-4">
      <button class="btn btn-block btn-danger" href="">خروج از پنل</a>
    </div>
  </div>

  <div class="main">
    <nav class="navbar navbar-expand-lg navbar-light  mt_dark_navbar">
      <a class="navbar-brand" href="#">محمد طهوریان</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown">

            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Dashboard</a>
              <a class="dropdown-item" href="#">Edit Profile</a>
              <a class="dropdown-item" href="#">Log Out</a>
            </div>
          </li>
        </ul>
        <form class="form-inline m-2 mx-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="جست و جو" aria-label="Search">
          <button class="btn btn-danger my-2 my-sm-0" type="submit">جست و جو</button>
        </form>
      </div>
    </nav>
    <div class="content">
      <div class="main_content">
           <div class="col-12 mt-3">
            <?= flash()->each() ?>
          </div>
        <?= $content ?>
      </div>
    </div>

  </div>

  <script src="<?= ROOT_PATH  ?>js/jquery.min.js"></script>
  <script src="<?= ROOT_PATH  ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ROOT_PATH  ?>js/panel.js"></script>
</body>

</html>