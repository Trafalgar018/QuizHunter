<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

<<<<<<< HEAD
    public function questionary(){
        return $this->belongsToMany(Question::class);
    }

    public function answer(){
        return $this->hasMany(Question::class);
=======
    public function question(){
        return $this->belongsTo(Question::class);
>>>>>>> 7c944f28a49df114f0330c91c0f518ae3ceeffe4
    }
}
