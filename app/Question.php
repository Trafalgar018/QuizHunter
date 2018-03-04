<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function questionary(){
        return $this->belongsToMany(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(Question::class);
    }
    public function question(){
        return $this->belongsTo(Question::class);

    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
