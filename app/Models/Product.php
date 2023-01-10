<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $date=['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
