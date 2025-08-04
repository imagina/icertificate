<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Icertificate\Entities\Trainer;
use Modules\Icertificate\Repositories\TrainerRepository;

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
