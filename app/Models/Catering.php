<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'address', 'contact', 'food_type'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
