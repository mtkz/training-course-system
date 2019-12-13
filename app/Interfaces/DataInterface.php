<?php namespace App\Interfaces;


interface DataInterface
{
  public function exists($key);

  public function set($key, $value);

  public function get($key);

  public function forget($key);
}
