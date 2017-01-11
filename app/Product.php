<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //se connecter a la base de donnee products
  public $timestamps = false;
  public function creator()
  {
    return $this->hasOne('App\Creator');
  }
}
