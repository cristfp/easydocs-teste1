<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomLog extends Model
{
   public $fillable = ['content','operation'];
}
