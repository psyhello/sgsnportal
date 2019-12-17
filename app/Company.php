<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function dept()
    {
    	return $this->hasMany(Dept::class);
    }
}
