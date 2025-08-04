<?php

namespace Modules\Icertificate\Entities;

use Modules\Core\Icrud\Entities\CrudModel;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Certificate extends CrudModel
{

  protected $table = 'icertificate__certificates';
  public $transformer = 'Modules\Icertificate\Transformers\CertificateTransformer';
  public $repository = 'Modules\Icertificate\Repositories\CertificateRepository';
  public $requestValidation = [
    'create' => 'Modules\Icertificate\Http\Requests\CreateCertificateRequest',
    'update' => 'Modules\Icertificate\Http\Requests\UpdateCertificateRequest',
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
    'code',
    'customer_id',
    'company_id',
    'course_id',
    'start_date',
    'end_date'
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class);
  }

  public function company()
  {
    return $this->belongsTo(Company::class);
  }

  public function course()
  {
    return $this->belongsTo(Course::class);
  }

  protected static function booted()
  {
    static::creating(function ($model) {
      if (empty($model->code)) {
        $model->code = Str::uuid()->toString();
      }
    });
  }

  public function setStartDateAttribute($value)
  {
    $this->attributes['start_date'] = $this->parseDate($value);
  }

  public function setEndDateAttribute($value)
  {
    $this->attributes['end_date'] = $this->parseDate($value);
  }

  public function getStartDateAttribute($value)
  {
    return Carbon::parse($value)->format('d-m-Y');
  }

  public function getEndDateAttribute($value)
  {
    return Carbon::parse($value)->format('d-m-Y');
  }

  protected function parseDate($value)
  {
    if (!$value) return null;

    try {
      return Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    } catch (\Exception $e) {
      return $value;
    }
  }

}
