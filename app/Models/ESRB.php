<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESRB extends Model
{
    use HasFactory;
    
    protected $table = 'esrb';
    
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    function yates() {
        return $this->hasMany('App\Models\Game', 'idesrb');
    }
}
