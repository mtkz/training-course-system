<?php require_once  __DIR__ .'./../../bootstrap/autoload.php';?>
<h2 class="main_content_title">لیست اخبار</h2>
<div class="card mt-5">
    <div class="card-header">
      <h5 class="card-title float-right">
      لیست اخبار
      </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table">
        <tbody>
        <tr>
          <th>
            عنوان خبر
          </th>
          <th>
            زمان انتشار
          </th>
          
          <th>عملیات</th>
        </tr>
        <!-- TODO : news loop here ! -->
      </tbody></table>
    </div>
    <!-- /.card-body -->
</div>
<?php viewRender('Panel/layout.php', 'Admin Dashboard | News'); ?>
