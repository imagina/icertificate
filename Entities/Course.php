<?php

namespace Modules\Icertificate\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class Course extends CrudModel
{

  protected $table = 'icertificate__courses';
  public $transformer = 'Modules\Icertificate\Transformers\CourseTransformer';
  public $repository = 'Modules\Icertificate\Repositories\CourseRepository';
  public $requestValidation = [
      'create' => 'Modules\Icertificate\Http\Requests\CreateCourseRequest',
      'update' => 'Modules\Icertificate\Http\Requests\UpdateCourseRequest',
    ];
  //Instance external/internal events to dispatch with extraData
  public $dispatchesEventsWithBindings = [
    //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
    'created' => [],
    'creating' => [],
    'updated' => [],
    'updating' => [],
    'deleting' => [],
    'deleted' => []
  ];
  public $translatedAttributes = [
    'title',
    'description'
  ];
  protected $fillable = [
    'standard_duration',
    'training_type_id',
    'trainer_id',
    'status'
  ];

  public function trainingType()
  {
    return $this->belongsTo(TrainingType::class);
  }

  public function trainer()
  {
    return $this->belongsTo(Trainer::class);
  }

}
