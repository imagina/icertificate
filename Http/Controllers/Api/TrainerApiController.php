<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Entities\Trainer;
use Repositories\TrainerRepository;

class TrainerApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Trainer $model, TrainerRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
