<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public const CATEGORIES = [
      1 => 'Прання',
      2 => 'Миття посуду',
      3 => 'Прибирання',
      4 => 'Догляд за домом'
    ];
}
