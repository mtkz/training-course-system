<?php namespace App\Controllers;

use App\Models\Course;
// use App\Models\News;

class HomeController extends Controller {

  public function listCourses()
  {
      return (new Course)->get();
  }

  // public function listNews()
  // {
  //     return (new News)->get();
  // }

}

?>
