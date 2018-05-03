<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table = 'Feedbacks';
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    protected $fillable = ['user_id','item_id', 'message'];
}
