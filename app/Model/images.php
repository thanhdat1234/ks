<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'images';
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
