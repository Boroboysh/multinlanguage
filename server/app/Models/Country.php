<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use CrudTrait;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function city () {
        return $this->hasMany(City::class);
    }
}
