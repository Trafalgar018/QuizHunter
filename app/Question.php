<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Un hashtag tiene varios chusqers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questionaries(){
        return $this->belongsToMany(Questionary::class);
    }

    public function answer()
    {
        return $this->hasMany(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
