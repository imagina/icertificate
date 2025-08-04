<?php

namespace Modules\Icertificate\Repositories\Cache;

use Modules\Icertificate\Repositories\CustomerRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheCustomerDecorator extends BaseCacheCrudDecorator implements CustomerRepository
{
    public function __construct(CustomerRepository $customer)
    {
        parent::__construct();
        $this->entityName = 'icertificate.customers';
        $this->repository = $customer;
    }
}
