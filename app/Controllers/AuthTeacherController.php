<?php namespace App\Controllers;

use App\Models\Teacher;

class AuthTeacherController extends Controller {


  public function login()
  {

    if(auth('teacher')->check())
        redirect('dashboard/');

    if(request()->isPost()){

      $rules = [
           'username' => 'required',
           'password' => 'required|min:3',
       ];

       if(!validation(request()->all() , $rules)) {
           redirect('sign-in.php');
           return;
       }

       $auth = new Teacher;
       $auth->username = request('username');
       $auth->password = request('password');

       if(!$auth->login()){
          flash()->danger('.نام کاربری ویا رمز عبور شما صحیح نمی باشد');
          redirect('sign-in.php');
       }

      flash()->success('.باموفقیت وارد پنل مدیریت شدید');
      redirect('dashboard/');

    }

  }

  public function logout()
  {
    if(!auth('teacher')->check())
        redirect('sign-in.php');

     auth('teacher')->logout();
     redirect('sign-in.php');
  }


}
 ?>
