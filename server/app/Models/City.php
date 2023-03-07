<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    public $timestamps = false;

    protected $fillable = ['name', 'rating', 'country_id', 'tel_number'];
    protected $translatable = ['name'];

    public function country () {
        return $this->belongsTo(Country::class);
    }
}
