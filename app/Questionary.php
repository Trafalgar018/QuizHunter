<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionary extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    /**
     * Un chusqer tiene varios hashtags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questions(){
        return $this->belongsToMany(Question::class);
    }
}
