<?php

namespace Modules\Icertificate\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class Trainer extends CrudModel
{
  use Translatable;

  protected $table = 'icertificate__trainers';
  public $transformer = 'Transformers\TrainerTransformer';
  public $repository = 'Repositories\TrainerRepository';
  public $requestValidation = [
      'create' => 'Http\Requests\CreateTrainerRequest',
      'update' => 'Http\Requests\UpdateTrainerRequest',
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
    'position'
  ];
  protected $fillable = [
    'full_name',
    'email',
    'status',
  ];
}
