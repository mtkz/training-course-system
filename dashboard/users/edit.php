<?php require_once  __DIR__ . './../../bootstrap/autoload.php';
$user = (new App\Controllers\Dashboard\UserController)->edit();
?>

<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title float-right">
ویرایش اطلاعات کاربر
      </h5>
    </div>
    <div class="card-body">
      <div class="col-6">
        <form action="<?=ROOT?>dashboard/users/update.php?id=<?=$user->id?>" method="post">
            <div class="form-group">
                <label>نام و نام خانوادگی</label>
                <input type="text" name="full_name" class="form-control" value="<?= $user->full_name ?>">
            </div>
            <div class="form-group">
                <label>نام کاربری</label>
                <input type="text" name="username" class="form-control" value="<?=$user->username?>">
            </div>
            <div class="form-group">
                <label>رمز عبور</label>
                <input type="password" name="password" class="form-control" value="<?=$user->password?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-info">ویرایش</button>
            </div>
        </form>
      </div>
    </div>
</div>

<?php viewRender('Panel/layout.php', 'پنل مدیریت | ویرایش اطلاعات'); ?>
