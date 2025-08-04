<?php

namespace Modules\Icertificate\Entities;

use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
      'title',
      'description'
    ];
    protected $table = 'icertificate__course_translations';
}
