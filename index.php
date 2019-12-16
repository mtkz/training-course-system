<?php require_once  __DIR__ .'./bootstrap/autoload.php';

use App\Models\Course;
use App\Models\News;

?>

<div class="col-md-12 mt_gray_bgc p-5">
    <div class="container">
        <div class="mt_title_bar">
            <h2>دوره ها</h2>
        </div>
        <div class="col-md-12 my-3">
            <div class="row">
                <div class="card col-md-3 p-0 mt_card">
                    <a href=""><img src="public/images/13980623000670_Test_PhotoN.jpg" class="card-img-top object-fit-cover" alt=""></a>
                    <div class="card-body p-2">
                        <h6 class="card-title">
                            <a href="" class="text-secondary">مدیریت پروژه های متن‌باز با git و github</a>
                        </h6>
                        <p class="card-text mt_card_text">
                            اگر از دنبال کنندگان مجله آموزشی راکت باشید میدانید که در راکت دوره های زیادی از ابزارهای اوپن سورس مثل لاراول ، فریمورک های جاوا اسکریپت ، نود جی اس...
                        </p>

                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <small class="text-danger">1200000 تومان</small><br>
                            </div>
                            <div class="col-md-6 text-center">
                                <small class="text-primary">ظرفیت 4 نفر</small><br>
                            </div>
                        </div>
                    </div>
                    <div class="mt_time_data">
                        <small>زمان برگذاری : 21 دی </small>
                    </div>
                </div>
              <?php foreach ((new Course)->get() as $course): ?>
                <div class="card col-md-3 p-0 mt_card">
                    <img src="<?= ROOT_PATH . $course->image ?>" class="card-img-top object-fit-cover" alt="<?= $course->title ?>">
                    <div class="card-body p-2">
                        <h6 class="card-title">
                            <?= $course->title ?>
                        </h6>
                        <p class="card-text mt_card_text">
                            <?= substr($course->body, 0, 200). '...' ?>
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
          <?php foreach (array_chunk((new News)->where('status', true)->get(), 2) as $items): ?>
            <div class="col-md-6">
              <?php foreach ($items as $item): ?>
                <div class="mt_news_style_1 col-md-12 p-0">
                    <div class=" mt_news_style_1_thumbnail p-0">
                        <img src="<?= ROOT_PATH. $item->image ?>" class="object-fit-cover" alt="<?= $item->title ?>">
                    </div>
                    <div class=" mt_news_style_1_description p-2">
                        <a href=""><?= $item->title ?></a>
                        <p><?=  substr($item->content, 0, 100). '...' ?></p>
                    </div>

                </div>
              <?php endforeach ?>
            </div>
          <?php endforeach ?>
        </div>
    </div>
</div>

<?php viewRender('Home/layout.php' , 'Home page'); ?>
