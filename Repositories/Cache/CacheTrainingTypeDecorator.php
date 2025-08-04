<?php

namespace Modules\Icertificate\Repositories\Cache;

use Repositories\TrainingTypeRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheTrainingTypeDecorator extends BaseCacheCrudDecorator implements TrainingTypeRepository
{
    public function __construct(TrainingTypeRepository $trainingtype)
    {
        parent::__construct();
        $this->entityName = 'icertificate.trainingtypes';
        $this->repository = $trainingtype;
    }
}
