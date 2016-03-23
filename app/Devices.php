<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $table = 'devices';

    protected $primaryKey = 'device_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

public function devices(){}
}
