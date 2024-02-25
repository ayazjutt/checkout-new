<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAdditionalService extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'company_id',
    'additional_service_id',
    'name',
    'amount',
  ];

  /**
   * Get the company that owns the additional service.
   */
  public function company()
  {
    return $this->belongsTo(Company::class);
  }

  /**
   * Get the additional service associated with the company additional service.
   */
  public function additionalService()
  {
    return $this->belongsTo(AdditionalService::class);
  }
}
