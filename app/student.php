<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   protected $fillable=['name','surname','patronymic','math','physics','geometry','music','painting','birthdata'];
}
