<?php

namespace Modules\Icertificate\Repositories\Cache;

use Modules\Icertificate\Repositories\CourseRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheCourseDecorator extends BaseCacheCrudDecorator implements CourseRepository
{
    public function __construct(CourseRepository $course)
    {
        parent::__construct();
        $this->entityName = 'icertificate.courses';
        $this->repository = $course;
    }
}
