<div id="step-2-wrapper" style="display: none;">
    <p class='font-sans font-semibold text-[28px] text-black'>Company & Owner Details</p>
    <p class='font-sans font-normal text-xs text-[#7E8299]'>A short details for company type. </p>

    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-10 gap-y-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Proposal Name # 1
                </label>
                <input type="text" name="proposalName1" id="proposalName1"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>

                <span id="proposalName1_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This Field is required!
                </span>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Proposal Name # 2
                </label>
                <input type="text" name="proposalName2" id="proposalName2"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Proposal Name # 3
                </label>
                <input type="text" name="proposalName3" id="proposalName3"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#3F4254]">
                    Shareholder Information
                </p>
            </div>
        </div>

        <div id="shareholders_wrapper"></div>

    </div>

    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#3F4254]">
                    Beneficial Owner
                </p>

                <input type="hidden" name="number_of_beneficial_owners" id="number_of_beneficial_owners" value="1">

                <!-- <button type="button"
                        class="bg-black font-normal text-xs text-white rounded-md py-1 w-14">
                    Add
                </button> -->
            </div>
        </div>

        <div id="beneficial_owner_wrapper">
        </div>

        <div class="px-8 mt-8 mb-2">
            <!-- <button type="button" class="bg-black font-normal text-xs text-white rounded-md py-1 w-full add-beneficial-owner">
                Add Another +
            </button> -->

            <div class="relative">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <button
                    type="button"
                    class="add-beneficial-owner inline-flex items-center gap-x-1.5 rounded-full bg-white px-6 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                    >
                    + Add
                    </button>
                </div>
            </div>
                
        </div>
    </div>

    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#3F4254]">
                    Billing Details
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-10 gap-y-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Full Name
                </label>
                <input type="text" name="billing_name" id="billing_name"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_name_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Email Address
                </label>
                <input type="text" name="billing_email" id="billing_email"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_email_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Personal Number
                </label>
                <input type="text" name="billing_personal_number" id="billing_personal_number"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_personal_number_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Address 1
                </label>
                <input type="text" name="billing_address1" id="billing_address1"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_address1_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Address 2
                </label>
                <input type="text" name="billing_address2" id="billing_address2"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Country
                </label>
                <input type="text" name="billing_country" id="billing_country"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_country_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    State
                </label>
                <input type="text" name="billing_state" id="billing_state"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_state_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    City
                </label>
                <input type="text" name="billing_city" id="billing_city"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_city_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    Zip Code
                </label>
                <input type="text" name="billing_zipcode" id="billing_zipcode"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                <span id="billing_zipcode_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                    This field is required!
                </span>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-md mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#3F4254]">
                    Special Request
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1">
            <div class="flex flex-col space-y-1">
                <textarea name="special_request" id="special_request"
                    class="block w-full rounded-md bg-[#F6F6F699] border-0 px-2 py-1.5 text-gray-900 h-20 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>
    </div>

</div>
