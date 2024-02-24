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
        'company_name',
        'company_name_2',
        'company_name_3',
        'service_name',
        'service_amount',
        'company_status',
        'active_jurisdiction',
        'country_id',
        'state_id',
        'service_types_id',
        'user_id',
        'processing_types_id',
        'processing_type_title',
        'processing_type_amount',
        'notes',
        'special_request',
        'lead_medium',
        'payment_id',
        'payment_method_name',
        'transaction_id'
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
