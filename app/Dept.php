<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
	protected $fillable = ['name','parentid'];

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }

    public function user()
    {
    	return $this->hasMany(User::class);
    }
    
}
