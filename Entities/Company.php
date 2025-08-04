<?php

namespace Modules\Icertificate\Entities;

use Modules\Core\Icrud\Entities\CrudModel;

class Company extends CrudModel
{

  protected $table = 'icertificate__companies';
  public $transformer = 'Modules\Icertificate\Transformers\CompanyTransformer';
  public $repository = 'Modules\Icertificate\Repositories\CompanyRepository';
  public $requestValidation = [
      'create' => 'Modules\Icertificate\Http\Requests\CreateCompanyRequest',
      'update' => 'Modules\Icertificate\Http\Requests\UpdateCompanyRequest',
    ];
  //Instance external/internal events to dispatch with extraData
  public $dispatchesEventsWithBindings = [
    //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
    'created' => [],
    'creating' => [],
    'updated' => [],
    'updating' => [],
    'deleting' => [],
    'deleted' => []
  ];
  public $translatedAttributes = [];
  protected $fillable = [
    'business_name',
    'nit',
    'address',
    'phone'
  ];
}
