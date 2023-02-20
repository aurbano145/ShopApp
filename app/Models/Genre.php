<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    protected $table = 'genre';
    
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    function yates1() {
        return $this->hasMany('App\Models\Game', 'idgenre1');
    }
    
    function yates2() {
        return $this->hasMany('App\Models\Game', 'idgenre2');
    }
    
    function yates3() {
        return $this->hasMany('App\Models\Game', 'idgenre3');
    }
}
