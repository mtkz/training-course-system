<?php require_once  __DIR__ .'./bootstrap/autoload.php';?>

<div class="row">
  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header bg-primary text-white">ورود کاربر</div>
      <div class="card-body">
        <form class="form-horizontal" action="/login.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <label for="username">نام کاربری</label>
              <input type="text" id="username" name="username" class="form-control" required="required" placeholder="نام کاربری" >
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputPassword">رمز عبور</label>
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="رمز عبور">
            </div>
          </div>
           <div class="form-group">
            <div class="checkbox">
              <label>
                مرا بخاطر داشته باش!
                <input type="checkbox" name="remember" value="remember">
              </label>
            </div>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">ورود</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php viewRender('Page/layout.php' , 'login page'); ?>
