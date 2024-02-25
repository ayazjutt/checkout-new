<div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
    <p class="font-sans text-sm font-bold text-[#292929]">
        Jurisdiction of incorporation
    </p>
    <p class="font-sans text-sm font-medium text-[#292929]">
        {{ $country ? $country->name : '-' }}
    </p>
</div>
{{--            @endif--}}

{{-- State --}}
@if(!empty($state))
    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
        <p class="font-sans text-sm font-bold text-[#292929]">
            State
        </p>
        <p class="font-sans text-sm font-medium text-[#292929]">
            {{ $state->name }}
        </p>
    </div>
@endif

{{-- Service --}}
@if(!empty($service))
    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
        <p class="font-sans text-sm font-bold text-[#292929]">
            Service Type
        </p>
        <p class="font-sans text-sm font-medium text-[#292929]">
            {{ $service->name }}
        </p>
    </div>
@endif

{{-- Type --}}
@if(!empty($service_type))
    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
        <p class="font-sans text-sm font-bold text-[#292929]">
            Corporation Type
        </p>
        <p class="font-sans text-sm font-medium text-[#292929]">
            {{ $service_type->name }}
        </p>
    </div>
@endif

{{-- Number of Shareholders --}}
@if(!empty($service))
    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
        <p class="font-sans text-sm font-bold text-[#292929]">
            Number of Shareholders
        </p>
        <p class="font-sans text-sm font-medium text-[#292929]" id="numberOfShareholdersSummary">
            1
        </p>
    </div>
@endif

{{-- Processing --}}
@if(!empty($processing_types))
    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
        <p class="font-sans text-sm font-bold text-[#292929]">
            Processing Type
        </p>
        <p class="font-sans text-sm font-medium text-[#292929]">
            $<span class="processing-type-radio-summary">{{ $processing_types[0]->amount }}</span>
        </p>
    </div>
@endif

{{-- State Charges --}}
@if(!empty($state_amount))
    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
        <p class="font-sans text-sm font-bold text-[#292929]">
            State Charges
        </p>
        <p class="font-sans text-sm font-medium text-[#292929]">
            ${{ $state_amount }}
        </p>
    </div>
@endif

{{-- Extra Extra --}}
<div class="mt-6" style="display: none" id="additional_services_wrapper">
    <p class="font-sans text-sm font-bold text-[#292929]">
        Extra Services:
    </p>

    <div class="" id="additional_services_container">
        <div class="flex items-center justify-between mt-2 border-b border-[#1A1A1A] pb-1">
            <p class="font-sans text-xs font-bold text-[#292929]">
                Address
            </p>
            <p class="font-sans text-sm font-medium text-[#292929]">
                $100
            </p>
        </div>
    </div>
</div>
