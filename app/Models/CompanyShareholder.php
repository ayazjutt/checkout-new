<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyShareholder extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'company_id',
    'country_id',
    'percentage',
    'position_id'
  ];

  /**
   * Get the company that owns the shareholder.
   */
  public function company()
  {
    return $this->belongsTo(Company::class);
  }

  /**
   * Get the country of the shareholder.
   */
  public function country()
  {
    return $this->belongsTo(Country::class);
  }
}
