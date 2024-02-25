<div class="lg:block hidden col-span-2 bg-amber-900 relative shadow-md bg-cover bg-center"
    style="background-image: url('assets/images/rightSidebarBgImage.png');">
    <div class="text-white sticky top-0 flex flex-col items-center">
        <div class="flex items-center justify-center pt-4 pb-[70px] w-full"></div>
        <div class=" px-5 w-full">
            {{-- Total --}}
            <p class="font-sans text-xl font-semibold text-[#292929]">
                Total pay
            </p>
            <p class="font-sans text-[40px] font-bold text-[#8E5D0B]">
                $<span class="total_pay_amount_summary">{{ $processing_types[0]->amount + $state_amount }}</span>
            </p>

            @include('partials.summary')
            {{-- Actions --}}
            <div class="flex items-center justify-between mt-8">
                <button type="button" id="back" style="display: none;"
                    class="bg-white rounded-lg text-[#FF0000] text-sm font-bold py-2 px-8 flex items-center space-x-2">
                    <img src='assets/images/left-arrow.svg' alt="Logo" class="" />
                    <span>Back</span>
                </button>

                <button type="button"
                    class="bg-[#8E5D0B] rounded-lg text-white text-sm font-bold py-2 px-8 flex items-center space-x-2 next">
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
