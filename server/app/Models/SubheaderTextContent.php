<?php

namespace app\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubheaderTextContent extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    public $timestamps = false;
    protected $fillable = ['content', 'subheader_id'];
    protected $translatable = ['content'];

    public function subheader () {
        return $this->belongsTo(Subheader::class, 'subheader_id');
    }
}
