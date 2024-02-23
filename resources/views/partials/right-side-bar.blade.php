<div class="col-span-2 bg-amber-900 relative shadow-md bg-cover bg-center" style="background-image: url('assets/images/rightSidebarBgImage.png');">
    <div class="text-white sticky top-0 flex flex-col items-center">
        <div class="flex items-center justify-center pt-4 pb-[70px] w-full"></div>
        <div class=" px-5 w-full">
            {{-- Total --}}
            <p class="font-sans text-xl font-semibold text-[#292929]">
                Total pay
            </p>
            <p class="font-sans text-[40px] font-bold text-[#8E5D0B]">
                $<span id="total_pay_amount_summary">{{ $processing_types[0]->amount + $state_amount }}</span>
            </p>

            {{-- Jurisdiction --}}
{{--            @if(!empty($country))--}}
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

            {{-- Actions --}}
            <div class="flex items-center justify-between mt-8">
                <button type="button" id="back" style="display: none;"
                        class="bg-white rounded-lg text-[#FF0000] text-sm font-bold py-2 px-8 flex items-center space-x-2">
                    <img src='assets/images/left-arrow.svg' alt="Logo" class="" />
                    <span>Back</span>
                </button>

                <button type="button" id="next"
                        class="bg-[#8E5D0B] rounded-lg text-white text-sm font-bold py-2 px-8 flex items-center space-x-2">
                    <span>Next</span>
                    <img src='assets/images/right-arrow.svg' alt="Logo" class="" />
                </button>

                <!-- <button type="button"
                class="bg-[#8E5D0B] rounded-lg text-white text-sm font-bold py-2 px-8 flex items-center space-x-2">
                <span>Proceed</span>
                <img src='assets/images/right-arrow.svg' alt="Logo" class="" />

            </button> -->
            </div>
        </div>
    </div>
</div>
