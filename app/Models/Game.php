<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    protected $table = 'game';
    
    protected $fillable = [
            'name',
            'idplatform',
            'release',
            'idesrb',
            'developer',
            'publisher',
            'idgenre1',
            'idgenre2',
            'idgenre3',
            'description',
            'price',
            'boxart'
        ];
        
    public function platform() {
        return $this->belongsTo('App\Models\Platform', 'idplatform');
    }
    
    public function idesrb() {
        return $this->belongsTo('App\Models\ESRB', 'idesrb');
    }
    
    public function idgenre1() {
        return $this->belongsTo('App\Models\Genre', 'idgenre1');
    }
    
    public function idgenre2() {
        return $this->belongsTo('App\Models\Genre', 'idgenre2');
    }
    
    public function idgenre3() {
        return $this->belongsTo('App\Models\Genre', 'idgenre3');
    }
}
