<?php namespace App\Controllers\Dashboard;

use App\Controllers\Controller as Controller;
use App\Models\Teacher;

class TeacherController extends Controller {

    public function __construct()
    {
      if(!auth('teacher')->check())
          redirect('sign-in.php');
    }

    public function index()
    {
       return (new Teacher)->all();
    }


    public function store()
    {
        if(request()->isPost()){

          $rules = [
                'full_name' => 'required',
                'bio' => 'required',
                'username' => 'required',
                'password' => 'required|min:3',
           ];

           if(!validation(request()->all() , $rules)) {
               redirect('dashboard/teachers/create.php');
           }

          (new Teacher)->create([
              'full_name' => request('full_name'),
              'bio' => request('bio'),
              'username' => request('username'),
              'password' => request('password'),
              'avater' => 'images/profiles/original.png'
          ]);

          flash()->success('باموفقیت اطلاعات مدرس ذخیره شد.');
          redirect('dashboard/teachers/create.php');
       }

    }

    public function edit()
    {

      if(empty(request()->input('id',false)))
            redirect('dashboard/teachers');

        if(!(new Teacher())->find('id', request()->input('id',false)))
          redirect('dashboard/teachers');

       return (new Teacher())->find('id', request()->input('id',false));

    }

    public function update()
    {

      if(empty(request()->input('id',false)))
          redirect('dashboard/teachers');

      $id = request()->input('id',false);

      if(!request()->isPost())
          redirect('dashboard/teachers');

      $rules = [
            'full_name' => 'required',
            'bio' => 'required',
            'username' => 'required',
            'password' => 'required|min:3',
       ];

       if(!validation(request()->all() , $rules)) {
           redirect("dashboard/teachers/edit.php?id={$id}");
       }

      (new Teacher)->update($id, [
          'full_name' => request('full_name'),
          'bio' => request('bio'),
          'username' => request('username'),
          'password' => request('password'),
          'avater' => 'images/profiles/original.png'
      ]);

      flash()->success('باموفقیت اطلاعات مدرس ذخیره شد.');
      redirect('dashboard/teachers/');


    }

    public function delete()
    {
      if(empty(request()->input('id',false)))
            redirect('dashboard/teachers');

        if(!(new Teacher())->find('id' , request()->input('id',false)))
          redirect('dashboard/teachers');

       (new Teacher())->delete(request()->input('id',false));
       flash()->info('مدرس مدنظر حذف شد.');
       redirect('dashboard/teachers');
    }

}

?>
