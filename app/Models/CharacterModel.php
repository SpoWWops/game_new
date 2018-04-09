<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class characterModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'characters';

    protected $fillable = array('name','class_id','max_hp','max_mp','lvl_id','xp');

    public function classes()
    {
        return $this->belongsTo('App\Models\classesModel','class_id');
    }
}
