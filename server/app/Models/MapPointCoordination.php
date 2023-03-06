<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapPointCoordination extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'map_points_coordination';
    protected $guarded = ['id'];

    public $timestamps = false;

    protected $fillable = ['x', 'y', 'mapPoint_id'];
}
