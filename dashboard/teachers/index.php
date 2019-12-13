<?php require_once  __DIR__ .'./../../bootstrap/autoload.php';?>
<h2 class="main_content_title">لیست مدرسین</h2>
<div class="card mt-5">
    <div class="card-header">
      <h5 class="card-title float-right">
        لیست مدرسین
      </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table">
        <tbody>
        <tr>
          <th>
            نام مدرس
          </th>
          <th>
            نام خانوادگی
          </th>
          <th>
            نام کاربری
          </th>
          <th>عملیات</th>
        </tr>
        <!-- TODO : teachers loop here ! -->
      </tbody></table>
    </div>
    <!-- /.card-body -->
</div>
<?php viewRender('Panel/layout.php', 'Admin Dashboard | News'); ?>
