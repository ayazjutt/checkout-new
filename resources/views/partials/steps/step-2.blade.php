<div id="step-2-wrapper" style="display: none;">
    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Company & Owner Details</p>
    <p class='font-sans font-normal text-xs text-[#FFFFFF]'>A short details for company type. </p>

    <div class="bg-[#626262] mt-6 p-6 rounded-xl">
        <div class="grid grid-cols-2 gap-x-10 gap-y-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Proposal Name # 1
                </label>
                <input type="text" name="proposalName1" id="proposalName1"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>

                <span id="proposalName1_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" style="display: none">
                    This Field is required!
                </span>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Proposal Name # 2
                </label>
                <input type="text" name="proposalName2" id="proposalName2"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Proposal Name # 3
                </label>
                <input type="text" name="proposalName3" id="proposalName3"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>
    </div>

    <div class="bg-[#626262] mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#5white">
                    Shareholder Information
                </p>
            </div>
        </div>

        <div id="shareholders_wrapper"></div>



    </div>

    <div class="bg-[#626262] mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#5white">
                    Beneficial Owner
                </p>

                <button type="button"
                        class="bg-black font-normal text-xs text-white rounded-md py-1 w-14">
                    Add
                </button>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-x-10 gap-y-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Full Name
                </label>
                <input type="text" name="fullName" id="fullName"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Nationality
                </label>
                <div class="selectWrapper">
                    <select class="selectBox">
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                        <option>Value 4</option>
                        <option>Value 5</option>
                        <option>Value 6</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Passport Number
                </label>
                <input type="text" name="passportNumber" id="passportNumber"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>
    </div>

    <div class="bg-[#626262] mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#5white">
                    Billing Details
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-x-10 gap-y-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Full Name
                </label>
                <input type="text" name="fullName" id="fullName"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Email Address
                </label>
                <input type="text" name="emailAddress" id="emailAddress"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Personal Number
                </label>
                <input type="text" name="personalNumber" id="personalNumber"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Address 1
                </label>
                <input type="text" name="address" id="address"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Address 2
                </label>
                <input type="text" name="address" id="address"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    City
                </label>
                <input type="text" name="address" id="address"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Country
                </label>
                <input type="text" name="address" id="address"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Zip Code
                </label>
                <input type="text" name="address" id="address"
                       class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>
    </div>

    <div class="bg-[#626262] mt-6 p-6 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center justify-between w-full">
                <p class="font-sans text-lg font-bold text-[#5white">
                    Special Request
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1">
            <div class="flex flex-col space-y-1">
                                <textarea
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 px-2 py-1.5 text-gray-900 h-20 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>
    </div>

</div>
