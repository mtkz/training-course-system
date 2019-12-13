<?php require_once  __DIR__ .'./../../bootstrap/autoload.php';?>
<h2 class="main_content_title">ویرایش خبر</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">عنوان خبر</label>
        <input type="text" name="news_title" class="form-control">
    </div>
    <div class="form-group">
        <label for="">توضیحات</label>
        <textarea name="news_description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">تصویر شاخص</label>
        <input type="file" name="news_thumbnail">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-dark btn-lg">ثبت خبر</button>
    </div>
</form>
<?php viewRender('Panel/layout.php', 'Admin Dashboard | Add News'); ?>