<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Entities\Certificate;
use Repositories\CertificateRepository;

class CertificateApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Certificate $model, CertificateRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
