<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Equipment extends Model
{
    
    /**
     * Assigning the table 'user' to the Model
     *
     * @var array
     */
    
    protected $table = 'equipment' ;

    protected $primaryKey = 'Equipment_ID';

    public $timestamps = false;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class, 'User_ID');
    }

}
