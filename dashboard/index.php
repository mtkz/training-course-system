<?php require_once  __DIR__ . './../bootstrap/autoload.php';

(new App\Controllers\Dashboard\DashboardController);
?>

<h2 class="main_content_title">داشبورد</h2>

<?php viewRender('Panel/layout.php', 'پنل مدیریت'); ?>
