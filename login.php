<?php require_once  __DIR__ . './bootstrap/autoload.php';

?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="mt_auth col-md-4 my-5">
            <h1>ورود</h1>
            <div class="mt_auth_section p-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">نام کاربری</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">رمز عبور</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">لاگین</button>
                    </div>
                </form>
                <div class="form-group text-center">
                    <a href="" class="text-danger">
                        بازگشت به صفحه اصلی
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<?php viewRender('Auth/layout.php', 'ورود'); ?>