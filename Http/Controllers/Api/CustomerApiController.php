<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Entities\Customer;
use Repositories\CustomerRepository;

class CustomerApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Customer $model, CustomerRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
