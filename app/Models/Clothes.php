<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    use HasFactory;
    
    protected $table = 'clothes';
    
    protected $fillable = [
            'name',
            'price',
            'description',
            'idgenre',
            'idcategory',
            'idbrand',
            'photo'
        ];
        
    public function genre() {
        return $this->belongsTo('App\Models\Genre', 'idgenre');
    }
    
    public function category() {
        return $this->belongsTo('App\Models\Category', 'idcategory');
    }
    
    public function brand() {
        return $this->belongsTo('App\Models\Brand', 'idbrand');
    }
}
