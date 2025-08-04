<?php

namespace Modules\Icertificate\Entities;

use Astrotomic\Translatable\Translatable;
use Entities\Trainer;use Entities\TrainingType;use Modules\Core\Icrud\Entities\CrudModel;

class Course extends CrudModel
{
  use Translatable;

  protected $table = 'icertificate__courses';
  public $transformer = 'Transformers\CourseTransformer';
  public $repository = 'Repositories\CourseRepository';
  public $requestValidation = [
      'create' => 'Http\Requests\CreateCourseRequest',
      'update' => 'Http\Requests\UpdateCourseRequest',
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
