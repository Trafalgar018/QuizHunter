<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id','user_id','created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
