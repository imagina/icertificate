<?php

namespace Modules\Icertificate\Entities;

use Astrotomic\Translatable\Translatable;
use Modules\Core\Icrud\Entities\CrudModel;

class Customer extends CrudModel
{
  use Translatable;

  protected $table = 'icertificate__customers';
  public $transformer = 'Transformers\CustomerTransformer';
  public $repository = 'Repositories\CustomerRepository';
  public $requestValidation = [
      'create' => 'Http\Requests\CreateCustomerRequest',
      'update' => 'Http\Requests\UpdateCustomerRequest',
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
    'name',
    'id_document',
    'email',
    'phone',
    'address'
  ];
}
