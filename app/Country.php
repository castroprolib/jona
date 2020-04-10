<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

	//coloco el nombre de la tabla por que no renonoce countrys si no countries
	protected $table = 'countrys';
    

     // Relacion uno a muchos (1:N)
    public function state(){
      return $this->hasMany('App\State');
    }

     public function user(){
      return $this->hasMany('App\User');
    }
}
