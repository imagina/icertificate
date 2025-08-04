<?php

namespace Modules\Icertificate\Repositories\Cache;

use Modules\Icertificate\Repositories\TrainerRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheTrainerDecorator extends BaseCacheCrudDecorator implements TrainerRepository
{
    public function __construct(TrainerRepository $trainer)
    {
        parent::__construct();
        $this->entityName = 'icertificate.trainers';
        $this->repository = $trainer;
    }
}
