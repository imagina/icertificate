<?php

namespace Modules\Icertificate\Entities;

use Illuminate\Database\Eloquent\Model;

class TrainerTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
      'position'
    ];
    protected $table = 'icertificate__trainer_translations';
}
