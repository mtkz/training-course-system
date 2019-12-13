<?php namespace App\Controllers\Dashboard;

use App\Controllers\Controller as Controller;

class DashboardController extends Controller {

    public function __construct()
    {

      if(!auth('teacher')->check())
          redirect('sign-in.php');
    }
}

?>
