<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    protected $table = 'rooms';
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
