<?php require_once  __DIR__ . './../../bootstrap/autoload.php'; ?>
<h2 class="main_content_title">ویرایش دوره </h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">نام دوره</label>
        <input type="text" name="course_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">توضیحات دوره</label>
        <textarea type="text" name="course_description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label> مدرس</label>
        <select class="form-control" name="course_teacher[]">
            <option value="1">1</option>
            <option value="1">1</option>
            <option value="1">1</option>
            <option value="1">1</option>
        </select>
    </div>

    <div class="form-group">
        <label>ظرفیت دوره</label>
        <input type="number" name="course_number" class="form-control">
    </div>
    <div class="form-group">
        <label>زمان برگزاری</label>
        <input type="text" name="course_date" class="form-control">
    </div>
    <div class="form-group">
        <label>قیمت</label>
        <input type="text" name="course_price" class="form-control">
    </div>
    <div class="form-group">
        <label>تصویر شاخص</label>
        <input type="file" name="course_thumbnail">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-dark btn-lg">ثبت دوره</button>
    </div>
</form>
<?php viewRender('Panel/layout.php', 'Admin Dashboard | Add Courses'); ?>