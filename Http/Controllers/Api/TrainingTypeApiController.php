<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Entities\TrainingType;
use Repositories\TrainingTypeRepository;

class TrainingTypeApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(TrainingType $model, TrainingTypeRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
