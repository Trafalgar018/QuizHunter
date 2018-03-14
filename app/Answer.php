<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['id', 'answer','question_id','correct','created_at', 'updated_at'];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
