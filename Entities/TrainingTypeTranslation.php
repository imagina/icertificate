<?php

namespace Modules\Icertificate\Entities;

use Illuminate\Database\Eloquent\Model;

class TrainingTypeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
      'name',
      'description'
    ];
    protected $table = 'icertificate__training_type_translations';
}
