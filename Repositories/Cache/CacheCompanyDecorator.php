<?php

namespace Modules\Icertificate\Repositories\Cache;

use Repositories\CompanyRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheCompanyDecorator extends BaseCacheCrudDecorator implements CompanyRepository
{
    public function __construct(CompanyRepository $company)
    {
        parent::__construct();
        $this->entityName = 'icertificate.companies';
        $this->repository = $company;
    }
}
