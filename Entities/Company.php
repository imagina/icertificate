<?php

namespace Modules\Icertificate\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class Company extends CrudModel
{
  use Translatable;

  protected $table = 'icertificate__companies';
  public $transformer = 'Transformers\CompanyTransformer';
  public $repository = 'Repositories\CompanyRepository';
  public $requestValidation = [
      'create' => 'Http\Requests\CreateCompanyRequest',
      'update' => 'Http\Requests\UpdateCompanyRequest',
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
