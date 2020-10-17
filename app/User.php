<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * Assigning the table 'user' to the Model
     *
     * @var array
     */

    protected $table = 'users' ;

    protected $primaryKey = 'User_Id';

    public $timestamps = false;

    protected $guarded = [];

    public function equipments(){
        return $this->hasMany(Equipment::class, 'Equipment_ID');
    }
}
