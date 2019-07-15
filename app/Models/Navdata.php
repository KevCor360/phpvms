<?php

namespace App\Models;

use App\Contracts\Model;

/**
 * Class Navdata
 */
class Navdata extends Model
{
    public $table = 'navdata';

    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'type',
        'lat',
        'lon',
        'freq',
    ];

    protected $casts = [
        'type' => 'integer',
        'lat'  => 'float',
        'lon'  => 'float',
        'freq' => 'float',
    ];

    /**
     * Make sure the ID is in all caps
     *
     * @param $id
     */
    public function setIdAttribute($id): void
    {
        $this->attributes['id'] = strtoupper($id);
    }
}
