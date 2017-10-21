<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

  public $table = "teams";


   protected $fillable = [
       'name', 'email', 'image','fb','linkedin','profile'
   ];



}
