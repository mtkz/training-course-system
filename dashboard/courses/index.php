<?php require_once  __DIR__ . './../../bootstrap/autoload.php'; ?>
<h2 class="main_content_title">لیست دوره ها</h2>
<div class="card mt-5">
  <div class="card-header">
    <h5 class="card-title float-right">
      لیست دوره ها
    </h5>
  </div>

  <div class="card-body p-0">
    <table class="table">
      <tbody>
        <tr>
          <th>
            نام دوره
          </th>
          <th>
            ظرفیت
          </th>
          <th>
            مدرس
          </th>
          <th>
            زمان برگذاری
          </th>
          <th>
            قیمت
          </th>
          <th>
            لیست حضور و غیاب
          </th>
          <th>
            عملیات
          </th>
        </tr>
        <!-- TODO : course loop here ! -->
      </tbody>
    </table>
  </div>

</div>

<?php viewRender('Panel/layout.php', 'List Courses'); ?>