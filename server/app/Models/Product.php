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

    protected $fillable = ['name', 'description', 'price', 'image'];
    protected $translatable = ['name', 'description', 'image'];
    public $timestamps = false;

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "/images";

        //TODO fix path
        //not correctly path
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        // Undefined key. Image DB null
        return $this->attributes[$attribute_name]; // uncomment if this is a translatable field
    }

}
