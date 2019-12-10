<?php require __DIR__ .'./index.php';
$news = (new App\Controllers\NewsController)->index();
?>

<div class="mt_single_news col-md-12 py-5">
    <div class="container">
        <div class="mt_single_post col-md-12">
            <div class="mt_single_post_titlebar my-5">
                <h1>
                  <?= $news['title'] ?>
                </h1>
                <div class="mt_single_post_data">
                    <ul>
                        <li><a href=""> <span class="fa fa-clock-o"></span> زمان قرارگیری</a></li>
                        <li><a href=""> <span class="fa fa-user"> </span> نویسنده  </a></li>
                    </ul>
                </div>
            </div>
            <div class="mt_single_post_section col-md-12">
                <img src="<?= ROOT_PATH . $news['image']?>" class="img-fluid" alt="<?= $news['title'] ?>">

            </div>
            <div class="mt_single_post_description my-5">
                <p>
                  <?= $news['body'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php viewRender('Home/layout.php' , $news['title']); ?>
