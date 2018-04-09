<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\characterModel;

class ClassModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';

    protected $fillable = array('name');
}
