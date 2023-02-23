<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price'];
    protected $translatable = ['name', 'description'];
    public $timestamps = false;
}
