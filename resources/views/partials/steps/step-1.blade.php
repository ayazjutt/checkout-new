<div id="step-1-wrapper">
    <div>
        <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Company Type</p>
        <p class='font-sans font-normal text-xs text-[#FFFFFF]'>A short details for company type. </p>
    </div>
    <div class="bg-[#626262] mt-6 lg:p-6 p-4 rounded-xl">
        <p class="font-sans text-lg font-bold text-white mb-4">
            Setup Service
        </p>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-10 gap-y-4">

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Jurisdiction of incorporation
                </label>
                <div class="selectWrapper">
                    <select class="selectBox bg-[#FFFFFF99] text-black px-3" id="countryDropdown">
                        <option>Select Country</option>
                        @foreach($countries as $countryObj)
                        <option value="{{ $countryObj->code }}"
                            {{ !empty($country) && $country->id === $countryObj->id ? 'selected' : '' }}>
                            {{ $countryObj->name }}</option>
                        @endforeach
                    </select>
                    <span id="country_error_msg"
                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg"
                        style="display: none">Country is required!</span>
                    <input type="hidden" name="country_id" id="country_id"
                        value="{{ !empty($country) ? $country->id : '' }}"
                        data-show_states="{{ $country ? $country->show_states : '' }}">
                </div>
            </div>
            @if(!empty($states))
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    State
                </label>
                <div class="selectWrapper">
                    <select class="selectBox bg-[#FFFFFF99] text-black" id="stateDropdown">
                        <option>Select State</option>
                        @foreach($states as $statesObj)
                        <option value="{{ $statesObj->name }}"
                            {{ !empty($state) && $state->id === $statesObj->id ? 'selected' : '' }}>
                            {{ $statesObj->name }}</option>
                        @endforeach
                    </select>
                    <span id="state_error_msg"
                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg"
                        style="display: none">
                        State is required!
                    </span>
                    <input type="hidden" name="state_id" id="state_id" value="{{ !empty($state) ? $state->id : '' }}">
                </div>
            </div>
            @endif

            @if(!empty($services))
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Type of service
                </label>
                <div class="selectWrapper">
                    <select class="selectBox bg-[#FFFFFF99] text-black" id="serviceDropdown">
                        <option>Select Service</option>
                        @foreach($services as $serviceObj)
                        <option value="{{ $serviceObj->name }}"
                            {{ !empty($service) && $service->id === $serviceObj->id ? 'selected' : '' }}>
                            {{ $serviceObj->name }}</option>
                        @endforeach
                    </select>
                    <span id="service_error_msg"
                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg"
                        style="display: none">
                        Service is required!
                    </span>
                    <input type="hidden" name="service_id" id="service_id"
                        value="{{ !empty($service) ? $service->id : '' }}"
                        data-have_type="{{ $service && count($service->types) ? 'yes':'no' }}">
                </div>
            </div>
            @endif

            @if(count($service_types))
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Corporation Type {{ count($service_types) }}
                </label>
                <div class="selectWrapper">
                    <select class="selectBox bg-[#FFFFFF99] text-black" name="service_type_id" id="serviceTypeDropdown">
                        <option></option>
                        @foreach($service_types as $typeObj)
                        <option value="{{ $typeObj->id }}"
                            {{ !empty($service_type) && $service_type->id === $typeObj->id ? 'selected' : '' }}>
                            {{ $typeObj->name }}</option>
                        @endforeach
                    </select>
                    <span id="type_error_msg"
                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg"
                        style="display: none">
                        Corporation Type is required!
                    </span>
                </div>
            </div>
            @endif

            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Number of Shareholders
                </label>
                <input type="number" name="number_of_shareholders" id="numberOfShareholders" value="1"
                    class="block w-20 text-center rounded-md border-0 px-2 py-1.5 h-12 bg-[#FFFFFF99] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" />
                <span id="shareholder_error_msg"
                    class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg"
                    style="display: none">
                    Shareholders count is required!
                </span>
            </div>
        </div>
    </div>

    @if(!empty($country->additional_services))
    <div class="bg-[#626262] mt-6 lg:p-6 p-4 rounded-xl">
        <div class="flex items-center justify-between mb-4">
            <p class="font-sans text-lg font-bold text-[#5white">
                Recommended Services (Optional)
            </p>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">
                    Extra services
                </label>
                <div class="selectWrapper">
                    <select class="selectBox bg-[#FFFFFF99] text-black" multiple id="additionalServicesDropdown">
                        @foreach($country->additional_services as $additional_service)
                        <option value="{{ $additional_service->id }}">{{ $additional_service->name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="additional_services" id="additional_services">
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="bg-[#626262] mt-6 lg:p-6 p-4 rounded-xl">
        <div class="flex items-center justify-between">
            <p class="font-sans text-lg font-bold text-[#5white">
                Processing Time
            </p>
        </div>

        @foreach($processing_types as $key => $processing_type)
        <div class="relative flex items-center justify-between mt-4">
            <div class="flex h-6 items-center">
                <input id="processingType{{ $processing_type->id }}" aria-describedby="comments-description"
                    name="processing_type" type="radio" {{ $key === 0 ? 'checked' : '' }}
                    value="{{ $processing_type->id }}"
                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 processing-type-radio"
                    data-amount="{{ $processing_type->amount }}" />
                    <label for="processingType{{ $processing_type->id }}" class="cursor-pointer font-semibold text-white text-base ml-3">
                        {{ $processing_type->name }}
                    </label>
            </div>
                <span class="text-white font-bold text-base">${{ $processing_type->amount }}</span>
        </div>
        @endforeach
    </div>

    <div class="bg-[#626262] mt-6 lg:p-6 p-4 rounded-xl">
        <div class="flex items-center justify-between">
            <p class="font-sans text-lg font-medium text-white">
                How did you know about us?
            </p>
        </div>
        <div class="mt-4">
            <div class="flex flex-col space-y-1">
                <label class="font-sans text-sm font-normal">

                </label>
                <div class="selectWrapper">
                    <select class="selectBox bg-[#FFFFFF99] w-full" name="social_id" id="social_id">
                        <option></option>
                        @foreach($socials as $social)
                        <option value="{{ $social->id }}">{{ $social->title }}</option>
                        @endforeach
                    </select>
                    <span id="social_error_msg"
                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg"
                        style="display: none">
                        This Field is required!
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


