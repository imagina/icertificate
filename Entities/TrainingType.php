<?php

namespace Modules\Icertificate\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class TrainingType extends CrudModel
{
  use Translatable;

  protected $table = 'icertificate__training_types';
  public $transformer = 'Transformers\TrainingTypeTransformer';
  public $repository = 'Repositories\TrainingTypeRepository';
  public $requestValidation = [
      'create' => 'Http\Requests\CreateTrainingTypeRequest',
      'update' => 'Http\Requests\UpdateTrainingTypeRequest',
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
    'name',
    'description'
  ];
  protected $fillable = [
    'status'
  ];
}
