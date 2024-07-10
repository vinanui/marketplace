<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id', 'quantity', 'delivery_date'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
