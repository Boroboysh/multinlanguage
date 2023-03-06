<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['id', 'title', 'subtitle'];
    protected $translatable = ['title', 'subtitle'];
    public $timestamps = false;

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function contactFormButtonText()
    {
        return $this->hasOne(ContactFormButtonText::class);
    }

    public function contactFormField()
    {
        return $this->hasOne(ContactFormField::class);
    }

    public function contactFormTextContent()
    {
        return $this->hasMany(ContactFormTextContent::class);
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
