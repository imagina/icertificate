<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Entities\Company;
use Repositories\CompanyRepository;

class CompanyApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Company $model, CompanyRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
