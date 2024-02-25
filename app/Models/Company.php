<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [
    'user_id',
    'country_id',
    'service_id',
    'service_type_id',
    'state_id',
    'processing_type_id',
    'social_id',
    'company_name_1',
    'company_name_2',
    'company_name_3',
    'service_name',
    'service_amount',
    'service_type_name',
    'processing_type_name',
    'processing_type_amount',
    'state_service_amount',
    'payment_method',
    'total_amount',
    'transaction_id',
    'stripe_pay_id',
    'stripe_pay_receipt',
    'status',
    'notes',
    'special_request',
  ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'service_amount' => 'double',
        'active_jurisdiction' => 'integer',
        'country_id' => 'integer',
        'state_id' => 'integer',
        'service_types_id' => 'integer',
        'user_id' => 'integer',
        'processing_types_id' => 'integer',
        'processing_type_amount' => 'double',
        'payment_id' => 'integer',
    ];

    public function activeJurisdiction(): BelongsTo
    {
        return $this->belongsTo(ActiveJurisdiction::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function serviceTypes(): BelongsTo
    {
        return $this->belongsTo(ServiceTypes::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function processingTypes(): BelongsTo
    {
        return $this->belongsTo(ProcessingTypes::class);
    }
}
