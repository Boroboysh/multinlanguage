<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MapPoint extends Model
{
    use HasFactory;
    use HasTranslations;
    use CrudTrait;

    protected $table = 'map_points';
    protected $guarded = ['id'];

    public $timestamps = false;

    protected $fillable = ['name', 'mapInfoBlock_id', 'type'];
    protected $translatable = ['name'];

    public function setIconAttribute($value)
    {
        $attribute_name = "icon";
        $disk = "public";
        $destination_path = "/images";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        return $this->attributes[$attribute_name];
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            Storage::disk('public')->delete($obj->icon);
        });
    }
}
