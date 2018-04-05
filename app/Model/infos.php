<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class infos extends Model
{
    protected $table = 'infos';
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
