<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionary extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->belongsToMany(Questionary::class);
    }
}
