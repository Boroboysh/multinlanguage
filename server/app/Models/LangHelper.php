<?php

namespace app\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LangHelper extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    public $timestamps = false;
    protected $table = 'lang_helper';
    protected $fillable = ['value', 'key'];
    protected $translatable = ['value'];

}
