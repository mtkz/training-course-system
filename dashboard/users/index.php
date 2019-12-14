<?php require_once  __DIR__ .'./../../bootstrap/autoload.php';
$users = (new App\Controllers\Dashboard\UserController)->index();
?>


<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title float-right">
        لیست کاربران
      </h5>
    </div>
    <div class="card-body">
      <table class="table">
        <tbody>
        <tr>
          <th>
            نام
          </th>
          <th>
            نام کاربری
          </th>
          <th>عملیات</th>
        </tr>

        <?php foreach($users as $user): ?>
          <tr>
            <th><?= $user->full_name ?></th>
            <th><?= $user->username ?></th>
            <th>
                <a href="<?= ROOT ?>dashboard/users/delete.php?id=<?= $user->id ?>" class="btn btn-danger btn-sm">
                  حذف
                </a>
                <a href="<?= ROOT ?>dashboard/users/edit.php?id=<?= $user->id ?>" class="btn btn-info btn-sm">
                    ویرایش
                </a>
            </th>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>

<?php viewRender('Panel/layout.php' , 'پنل مدیریت | لیست کاربران'); ?>
