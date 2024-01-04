<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FirstCategory;
use App\Models\SecondCategory;

class Product extends Model
{
    use HasFactory;
    
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'line_items')
            ->withPivot(['id', 'quantity']);
    }
    
    public function first_category()
    {
        return $this->belongsTo(FirstCategory::class);
    }
    public function second_category()
    {
        return $this->belongsTo(SecondCategory::class);
    }
}
