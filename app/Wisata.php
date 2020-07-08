<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    //

    protected $table = 'tempat_wisata';

    protected $primaryKey = 'id_wisata';
    
    public $incrementing = true;
}
