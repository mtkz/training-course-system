<?php require_once  __DIR__ .'./../../bootstrap/autoload.php'; ?>

<div class="card mt-5">
    <div class="card-header">
      <h5 class="card-title float-right">
        لیست دانش پذیران
      </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table">
        <tbody>
        <tr>
          <th>
            نام
          </th>
          <th>
            نام خانوادگی
          </th>
          <th>
            نام کاربری
          </th>
          <th>عملیات</th>
        </tr>
        <tr>
          <td>آپدیت نرم افزار</td>
          <td>
            لابیاتیلاتبتاال
          </td>
          <td>
            لابیاتیلاتبتاال
          </td>
          <td>
            <div class="btn-groupbtn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">حذف</button>
                <button type="button" class="btn btn-secondary">ویرایش</button>
            </div>
          </td>
        </tr>
      </tbody></table>
    </div>
    <!-- /.card-body -->
</div>

<?php viewRender('Panel/layout.php' , 'List Users'); ?>
