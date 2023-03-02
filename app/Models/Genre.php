<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    protected $table = 'genres';
    
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    function clothes() {
        return $this->hasMany('App\Models\Clothes', 'idgenre');
    }
}
