<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Icertificate\Entities\TrainingType;
use Modules\Icertificate\Repositories\TrainingTypeRepository;

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
