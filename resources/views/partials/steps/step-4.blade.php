<div id="step-4-wrapper" style="display: none;">


    <p class='font-sans font-semibold text-[28px] text-[#3F4254]'>Payment</p>
    <div class="bg-white shadow-md mt-6 mb-6 p-6 rounded-xl">
        <p class="text-[#3F4254] text-xl font-medium mb-4">Select your payment method</p>

        <div class="flex items-center space-x-20">
            <div class="flex items-center mb-4">
                <input id="online-method-checkbox" type="radio" value="online" name="payment_method" checked
                       class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] payment_method_radio">
                <label for="online-method-checkbox" class="ms-2 text-sm font-medium text-[#3F4254]">Card</label>
            </div>

            <div class="flex items-center mb-4">
                <input id="bank-method-checkbox" type="radio" value="bank" name="payment_method"
                       class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] payment_method_radio">
                <label for="bank-method-checkbox" class="ms-2 text-sm font-medium text-[#3F4254]">Bank</label>
            </div>
        </div>
    </div>

    <div class="bg-white mt-6 mb-6 p-6 rounded-xl" id="online_payment_method">
        <div id="card-element"></div>
        <span class="error-message" id="paymentError"></span>
    </div>

    <div class="bg-white shadow-md mt-6 mb-6 p-6 rounded-xl" style="display: none;" id="bank_payment_method">
        <p class="text-[#3F4254] text-xl font-medium">Bank Information</p>
        <div class="mt-4">

            <div class="grid grid-cols-2">
                <p class="text-[#3F4254] font-bold text-lg">Instructions:</p>
                <p class="text-[#3F4254] font-normal text-base">Bank Instructions</p>
            </div>

            <div class="grid grid-cols-2">
                <p class="text-[#3F4254] font-bold text-lg">Bank Name:</p>
                <p class="text-[#3F4254] font-normal text-base">Meezan Bank</p>
            </div>


            <div class="grid grid-cols-2">
                <p class="text-[#3F4254] font-bold text-lg">Account name:</p>
                <p class="text-[#3F4254] font-normal text-base">BIZVEE CONSULTANTS</p>
            </div>


            <div class="grid grid-cols-2">
                <p class="text-[#3F4254] font-bold text-lg">Account number:</p>
                <p class="text-[#3F4254] font-normal text-base">0201-0107487191</p>
            </div>

            <div class="grid grid-cols-2">
                <p class="text-[#3F4254] font-bold text-lg">IBAN:</p>
                <p class="text-[#3F4254] font-normal text-base">PK02MEZN0002010107487191</p>
            </div>

            <hr class="mt-8">

            <div class="mt-8">
                <label class="font-sans text-sm font-normal text-[#3F4254]">
                    <span class="text-[#FF0000]">*</span>Transaction Id
                </label>
                <input type="text" name="transaction_id" id="transaction_id"
                       class="block mt-2 w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>

    </div>
</div>
