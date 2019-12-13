<?php require_once  __DIR__ . './../../bootstrap/autoload.php'; ?>
<h2 class="main_content_title">افزودن مدرس</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="">نام مدرس</label>
        <input type="text" class="form-control" name="teacher_name">
    </div>
    <div class="form-group">
        <label for="">درباره مدرس</label>
        <textarea name="teacher_description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-lg btn-dark">ثبت مدرس</button>
    </div>
</form>
<?php viewRender('Panel/layout.php', 'Admin Dashboard | News'); ?>