<?php

namespace Modules\Icertificate\Entities;

use Modules\Core\Icrud\Entities\CrudModel;

class Customer extends CrudModel
{

  protected $table = 'icertificate__customers';
  public $transformer = 'Modules\Icertificate\Transformers\CustomerTransformer';
  public $repository = 'Modules\Icertificate\Repositories\CustomerRepository';
  public $requestValidation = [
      'create' => 'Modules\Icertificate\Http\Requests\CreateCustomerRequest',
      'update' => 'Modules\Icertificate\Http\Requests\UpdateCustomerRequest',
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
