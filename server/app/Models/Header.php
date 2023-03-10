<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['supportText', 'tel_number', 'logo'];
    protected $translatable =  ['supportText', 'tel_number', 'logo'];
    public $timestamps = false;

    public function setLogoAttribute($value)
    {
        $attribute_name = "logo";
        $disk = "public";
        $destination_path = "/images";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        return $this->attributes[$attribute_name];
    }
}
