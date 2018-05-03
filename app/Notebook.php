<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Notebook extends Model
{
    use Searchable;
    public $timestamps = false;
    protected $attributes = ['categories_id' => 1];
    protected $fillable = ['categories_id', 'brand', 'model', 'mass', 'resolution', 'ram', 'cpu', 'graphics', 'hdd', 'price' , 'img'];
    public function get_feedback(){
        $this->hasMany(Feedback::class, 'item_id');
    }
}
