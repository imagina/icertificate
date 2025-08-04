<?php

namespace Modules\Icertificate\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Icertificate\Entities\Course;
use Modules\Icertificate\Repositories\CourseRepository;

class CourseApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Course $model, CourseRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
