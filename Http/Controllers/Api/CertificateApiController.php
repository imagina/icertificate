<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Icertificate\Entities\Certificate;
use Modules\Icertificate\Repositories\CertificateRepository;

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
