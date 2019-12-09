<?php require __DIR__ .'./index.php';
$courses = (new App\Controllers\HomeController)->index();
?>
<div class="col-md-12 mt_gray_bgc p-5">
    <div class="container">
        <div class="mt_title_bar">
            <h2>دوره ها</h2>
        </div>
        <div class="col-md-12 my-3">
            <div class="row">
              <?php foreach ($courses['courses'] as $course): ?>
                <div class="card col-md-3 p-0 mt_card">
                    <img src="<?= ROOT_PATH . $course['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body p-2">
                        <h5 class="card-title">
                            <?= $course['title'] ?>
                        </h5>
                        <p class="card-text mt_card_text">
                            <?= $course['body'] ?>
                        </p>
                        <a href="#" class="btn btn-danger btn-block">مشاهده دوره</a>
                    </div>
                </div>
              <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 p-5">
    <div class="container">
        <div class="mt_title_bar">
            <h2>جدید ترین اخبار</h2>
        </div>
        <div class="row my-5">
            <div class="col-md-6">
                <div class="mt_news_style_1 col-md-12 p-0">

                    <div class=" mt_news_style_1_thumbnail p-0">
                        <img src="<?= ROOT_PATH ?>images/learning.jpg" alt="">
                    </div>
                    <div class=" mt_news_style_1_description p-2">
                        <a href="">فرار مالیاتی پزشکان و وکلا معادل نیمی از یارانه نقدی</a>
                        <p>مدیرکل دفتر آبخیزداری و حفاظت خاک سازمان جنگلها گفت: سالانه 250 میلیون مترمکعب به دلیل فرسایش در پشت سدها رسوب جمع می‌شود که مفهوم آن این است هر سال معادل ظرفیت سد کرج را از دست می‌دهیم </p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="mt_news_style_1 col-md-12 p-0">

                    <div class=" mt_news_style_1_thumbnail p-0">
                        <img src="<?= ROOT_PATH ?>images/learning.jpg" alt="">
                    </div>
                    <div class=" mt_news_style_1_description p-2">
                        <a href="">فرار مالیاتی پزشکان و وکلا معادل نیمی از یارانه نقدی</a>
                        <p>مدیرکل دفتر آبخیزداری و حفاظت خاک سازمان جنگلها گفت: سالانه 250 میلیون مترمکعب به دلیل فرسایش در پشت سدها رسوب جمع می‌شود که مفهوم آن این است هر سال معادل ظرفیت سد کرج را از دست می‌دهیم </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php viewRender('Home/layout.php' , 'Home page'); ?>
