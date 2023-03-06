<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CommunicationMethods extends Model
{
    use HasFactory;
    use CrudTrait;
    use HasTranslations;

    public $timestamps = false;

    protected $table = 'communication_methods';

    protected $fillable = ['id', 'icon', 'name', 'link'];
    protected $translatable = ['name'];

    public function setIconAttribute($value)
    {
        $attribute_name = "icon";
        $disk = "public";
        $destination_path = "/images";

        if ($value==null) {
            // delete the image from disk
            Storage::delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        //TODO fix path
        //not correctly path
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        // Undefined key. Image DB null
        return $this->attributes[$attribute_name]; // uncomment if this is a translatable field
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
                Storage::disk('public')->delete($obj->icon);
        });
    }
}
