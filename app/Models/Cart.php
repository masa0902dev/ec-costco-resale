<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\LineItem;

class Cart extends Model
{
    use HasFactory;
    
    public function line_items()
    {
        return $this->hasMany(LineItem::class);
    }
}
