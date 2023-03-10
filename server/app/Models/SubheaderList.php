<?php

namespace app\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubheaderList extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    public $timestamps = false;
    protected $fillable = ['icon', 'content', 'subheader_id', 'number'];
    protected $translatable = ['icon', 'content'];

    public function setIconAttribute($value)
    {
        $attribute_name = "icon";
        $disk = "public";
        $destination_path = "/images";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        return $this->attributes[$attribute_name];
    }

}
