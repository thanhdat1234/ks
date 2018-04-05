<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    protected $table = 'modules';
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
