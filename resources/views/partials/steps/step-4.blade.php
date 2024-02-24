<div id="step-4-wrapper" style="display: none;">


    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Payment</p>
    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl">
        <p class="text-white text-xl font-medium mb-4">Select your payment method</p>

        <div class="flex items-center space-x-20">
            <div class="flex items-center mb-4">
                <input id="online-method-checkbox" type="radio" value="online" name="payment_method" checked
                       class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] payment_method_radio">
                <label for="online-method-checkbox" class="ms-2 text-sm font-medium text-white">Card</label>
            </div>

            <div class="flex items-center mb-4">
                <input id="bank-method-checkbox" type="radio" value="bank" name="payment_method"
                       class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] payment_method_radio">
                <label for="bank-method-checkbox" class="ms-2 text-sm font-medium text-white">Bank</label>
            </div>
        </div>
    </div>

    <div class="bg-white mt-6 mb-6 p-6 rounded-xl" id="online_payment_method">
        <div id="card-element"></div>
        <span class="error-message" id="paymentError"></span>
    </div>

    {{--    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl" id="online_payment_method_old">--}}
    {{--        <p class="text-white text-xl font-medium">Card information</p>--}}
    {{--        <div class="mt-3">--}}
    {{--            <div class="flex flex-col space-y-1">--}}
    {{--                <label class="font-sans text-sm font-normal text-white">--}}
    {{--                    <span class="text-[#FF0000]">*</span>Card Number--}}
    {{--                </label>--}}
    {{--                <input type="text" name="proposalName" id="proposalName"--}}
    {{--                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>--}}
    {{--            </div>--}}
    {{--            <div class="grid grid-cols-3 gap-8 mt-4">--}}
    {{--                <div class="">--}}
    {{--                    <label class="font-sans text-sm font-normal text-white">--}}
    {{--                        <span class="text-[#FF0000]">*</span>Expiry Month--}}
    {{--                    </label>--}}
    {{--                    <input type="text" name="proposalName" id="proposalName"--}}
    {{--                           class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>--}}
    {{--                </div>--}}

    {{--                <div class="">--}}
    {{--                    <label class="font-sans text-sm font-normal text-white">--}}
    {{--                        <span class="text-[#FF0000]">*</span>Expiry Year--}}
    {{--                    </label>--}}
    {{--                    <input type="text" name="proposalName" id="proposalName"--}}
    {{--                           class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>--}}
    {{--                </div>--}}


    {{--                <div class="">--}}
    {{--                    <label class="font-sans text-sm font-normal text-white">--}}
    {{--                        <span class="text-[#FF0000]">*</span> CVC--}}
    {{--                    </label>--}}
    {{--                    <input type="text" name="proposalName" id="proposalName"--}}
    {{--                           class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl" style="display: none;" id="bank_payment_method">
        <p class="text-white text-xl font-medium">Bank Information</p>
        <div class="mt-4">

            <div class="grid grid-cols-2">
                <p class="text-white font-bold text-lg">Instructions:</p>
                <p class="text-white font-normal text-base">Bank Instructions</p>
            </div>

            <div class="grid grid-cols-2">
                <p class="text-white font-bold text-lg">Bank Name:</p>
                <p class="text-white font-normal text-base">Habib Bank</p>
            </div>


            <div class="grid grid-cols-2">
                <p class="text-white font-bold text-lg">Account name:</p>
                <p class="text-white font-normal text-base">Account name</p>
            </div>


            <div class="grid grid-cols-2">
                <p class="text-white font-bold text-lg">Account number:</p>
                <p class="text-white font-normal text-base">Account number</p>
            </div>

            <div class="grid grid-cols-2">
                <p class="text-white font-bold text-lg">IBAN:</p>
                <p class="text-white font-normal text-base">SDFADF232342</p>
            </div>

            <hr class="mt-8">

            <div class="mt-8">
                <label class="font-sans text-sm font-normal text-white">
                    <span class="text-[#FF0000]">*</span>Transaction Id
                </label>
                <input type="text" name="transaction_id" id="transaction_id"
                       class="block mt-2 w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>

    </div>
</div>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>--}}

<script>
    /**
     * Stripe
     * Process Payment with API
     */
    $(document).ready(function () {
        // new Notify ({
        //     status: 'error',
        //     title: 'Validation failed!',
        //     text: 'msg',
        //     position: 'bottom right',
        //     effect: 'slide',
        //     speed: 300, // animation speed
        //     autoclose: true,
        //     autotimeout: 3000
        // })

        {{--        const stripe = Stripe('{{ config('stripe.public_key') }}');--}}
        // const stripe = Stripe('pk_test_51M9ZpNAVj0BHFToEbp8P9LJkiAJNqvRE4nf61ahHJ1emm5M6VlJKzCWGRZX9v93Jyg07jFeCET9g7nwJcac3Dd1500izShSCXy');
        // const elements = stripe.elements();
        // const cardElement = elements.create('card');
        // cardElement.mount('#card-element');


        $(document).on('click', '.place-order2', function (event) {
            alert('place order 2')

        });



    });

</script>
