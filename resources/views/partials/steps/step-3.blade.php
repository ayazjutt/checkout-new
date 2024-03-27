<div id="step-3-wrapper" style="display: none;">
    <p class='font-sans font-semibold text-[28px] text-[#3F4254]'>Step:1</p>
    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-5">
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Jurisdiction of incorporation</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>{{ $country ? $country->name : '-' }}</p>
            </div>

            @if($state)
                <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                    <p class='font-sans font-medium text-[12px] text-[#343434]'>State:</p>
                    <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>{{ $state ? $state->name : '-' }}</p>
                </div>
            @endif

            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Type of Service:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>{{ $service ? $service->name : '-' }}</p>
            </div>

            @if($service_type)
                <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                    <p class='font-sans font-medium text-[12px] text-[#343434]'>Corporation Type:</p>
                    <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>{{ $service_type ? $service_type->name : '-' }}</p>
                </div>
            @endif

            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Number of Shareholder</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="numberOfShareholdersPreview">1</p>
            </div>

            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Processing Type:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>$<span id="processing_type_amount_preview">{{ $processing_types[0]->amount }}</span></p>
            </div>

            @if(!empty($state_amount))
                <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                    <p class='font-sans font-medium text-[12px] text-[#343434]'>State Charges</p>
                    <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>$<span id="state_charges_preview">{{ $state_amount }}</span></p>
                </div>
            @endif

            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4" style="display: none;" id="additional_services_preview_box">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Additional Services:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>$<span id="additional_services_preview"></span></p>
            </div>
        </div>
    </div>

    <p class='font-sans font-semibold text-[28px] text-[#3F4254] mt-4'>Step:2</p>
    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">

        <div class="grid lg:grid-cols-12 grid-cols-1 gap-5">
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Proposal Name #1:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_proposal_name_1">-</p>
            </div>

            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Proposal Name #2:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_proposal_name_2">-</p>
            </div>

            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Proposal Name #3:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_proposal_name_3">-</p>
            </div>
        </div>

        <p class="mt-4 mb-2 font-semibold text-base font-sans text-white">Shareholders</p>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-5" id="shareholders_preview_wrapper"></div>

        <p class="mt-4 mb-2 font-semibold text-base font-sans text-white">Beneficial Owners</p>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-5" id="beneficial_preview_wrapper"></div>

        <p class="mt-4 mb-2 font-semibold text-base font-sans text-white">Billing Information:</p>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-5 ">
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Full Name:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_name">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Email Address</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_email">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Personal Number:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_personal_number">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Address1:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_address1">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Address2</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_address2">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>Country:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_country">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>State:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_state">-</p>
            </div>
            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[12px] text-[#343434]'>City:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_billing_city">-</p>
            </div>
        </div>

        <p class="mt-4 mb-2 font-semibold text-base font-sans text-white">Special Request:</p>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-5 ">
            <div class="col-span-12 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-normal text-[12px] text-[#343434] mb-4' id="preview_special_request"></p>
            </div>
        </div>
    </div>
</div>
