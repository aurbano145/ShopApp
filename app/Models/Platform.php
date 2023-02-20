<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    
    protected $table = 'platform';
    
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    function yates() {
        return $this->hasMany('App\Models\Game', 'idplatform');
    }
}
