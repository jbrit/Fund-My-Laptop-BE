<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    //

    protected $fillable = ['provide_name','provider','user_id'];
    protected $guarded = ['id'];
    public function User(){
        return $this->belongsTo('App\User');
    }
}
