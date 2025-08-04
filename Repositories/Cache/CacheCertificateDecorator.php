<?php

namespace Modules\Icertificate\Repositories\Cache;

use Modules\Icertificate\Repositories\CertificateRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CacheCertificateDecorator extends BaseCacheCrudDecorator implements CertificateRepository
{
    public function __construct(CertificateRepository $certificate)
    {
        parent::__construct();
        $this->entityName = 'icertificate.certificates';
        $this->repository = $certificate;
    }
}
