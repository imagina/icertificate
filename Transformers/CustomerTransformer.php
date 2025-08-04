<?php

namespace Modules\Icertificate\Transformers;

use Modules\Core\Icrud\Transformers\CrudResource;

class CustomerTransformer extends CrudResource
{
  /**
  * Method to merge values with response
  *
  * @return array
  */
  public function modelAttributes($request)
  {
    return [];
  }
}
