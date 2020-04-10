<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $table = 'roles';
    

    // Relacion uno a muchos (1:N)
    public function user(){
      return $this->hasMany('App\User');
    }
}
