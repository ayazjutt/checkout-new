<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="{{ mix('/resources/css/checkout.css') }}">

    <script>
    $(document).ready(function() {
        $('select').select2();
    });


    </script>

    @vite('resources/css/app.css')
    @vite('resources/css/checkout.css')

    @vite('resources/js/app.js')

    <style>
        .col-span-custom {
            width: calc((100% / 12) * 2.5); /* Adjust the number as needed */
        }
    </style>
</head>

<body class="antialiased">

<div class="grid grid-cols-10 h-full">
    {{--  Left Side Bar  --}}
    <div class="col-span-2 bg-black relative shadow-md bg-cover bg-center" style="background-image: url('assets/images/leftSidebarBgImage.png');">
        <div class="text-white sticky top-0 flex flex-col items-center px-10">
            <div class="flex items-center justify-center pt-4 pb-[70px] w-full">
                <img src='assets/images/logo.png' alt="Logo" class="w-20" />
            </div>

            <?php
            $steps = [
                [
                    "name" => "Company Type",
                    "description" => "A short details for company type.",
                    "href" => "#",
                    "status" => "complete"
                ],
                [
                    "name" => "Company & Owner Details",
                    "description" => "Cursus semper viverra facilisis et et some more.",
                    "href" => "#",
                    "status" => "current"
                ],
                [
                    "name" => "Preview",
                    "description" => "Penatibus eu quis ante.",
                    "href" => "#",
                    "status" => "upcoming"
                ],
                [
                    "name" => "Payment",
                    "description" => "Faucibus nec enim leo et.",
                    "href" => "#",
                    "status" => "upcoming"
                ]
            ];
            ?>
            <nav aria-label="Progress" class="self-center">
                <ol role="list" class="overflow-hidden">
                    @foreach ($steps as $stepIdx => $step)
                        <li class="{{ $stepIdx !== count($steps) - 1 ? 'pb-10' : '' }} relative">
                            @if ($step['status'] === 'complete')
                                @if ($stepIdx !== count($steps) - 1)
                                    <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-[#8E5D0B]"
                                         aria-hidden="true">

                                    </div>
                                @endif
                                <a href="{{ $step['href'] }}" class="group relative flex items-start">
                                    <span class="flex h-9 items-center">
                                        <span
                                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[#8E5D0B]">
                                            <img src='assets/images/check.svg' class="w-5" />
                                        </span>
                                    </span>
                                    <span class="ml-4 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium text-[#191919]">
                                            {{ $step['name'] }}
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            {{ $step['description'] }}
                                        </span>
                                    </span>
                                </a>
                            @elseif ($step['status'] === 'current')

                                @if ($stepIdx !== count($steps) - 1)
                                    <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-[#626262]"
                                         aria-hidden="true"></div>
                                @endif
                                <a href="{{ $step['href'] }}" class="group relative flex items-start">
                                    <span class="flex h-9 items-center">
                                        <span
                                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[#8E5D0B]">
                                            2
                                        </span>
                                    </span>
                                    <span class="ml-4 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium text-[#191919]">
                                            {{ $step['name'] }}
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            {{ $step['description'] }}
                                        </span>
                                    </span>
                                </a>
                            @else

                                @if ($stepIdx !== count($steps) - 1)
                                    <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-[#626262]"
                                         aria-hidden="true"></div>
                                @endif
                                <a href="{{ $step['href'] }}" class="group relative flex items-start">
                                    <span class="flex h-9 items-center">
                                        <span
                                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[#626262]">
                                            3
                                        </span>
                                    </span>
                                    <span class="ml-4 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium text-[#191919]">
                                            {{ $step['name'] }}
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            {{ $step['description'] }}
                                        </span>
                                    </span>
                                </a>

                            @endif
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>

    {{--  Form Area  --}}
    <div class="col-span-6 py-8 px-20 shadow-md bg-cover bg-center text-white" style="background-image: url('assets/images/MainSectionBgImage.png');">
        <div>
            <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Company Type</p>
            <p class='font-sans font-normal text-xs text-[#FFFFFF]'>A short details for company type. </p>

        </div>
        <div class="bg-[#626262] mt-6 p-6 rounded-xl">
            <p class="font-sans text-lg font-bold text-white mb-4">
                Setup Service
            </p>
            <div class="grid grid-cols-2 gap-x-10 gap-y-4">

                <div class="flex flex-col space-y-1">
                    <label class="font-sans text-sm font-normal">
                        Jurisdiction of incorporation
                    </label>
                    <div class="selectWrapper">
                        <select class="selectBox" name="country_id" id="countryDropdown">
                            <option>Select Country</option>
                            @foreach($countries as $countryObj)
                                <option value="{{ $countryObj->code }}" {{ !empty($country) && $country->id === $countryObj->id ? 'selected' : '' }}>{{ $countryObj->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @if(!empty($states))
                    <div class="flex flex-col space-y-1">
                        <label class="font-sans text-sm font-normal">
                            State
                        </label>
                        <div class="selectWrapper">
                            <select class="selectBox" name="state_id" id="stateDropdown">
                                <option>Select State</option>
                                @foreach($states as $statesObj)
                                    <option value="{{ $statesObj->name }}" {{ !empty($state) && $state->id === $statesObj->id ? 'selected' : '' }}>{{ $statesObj->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endif

                @if(!empty($services))
                    <div class="flex flex-col space-y-1">
                        <label class="font-sans text-sm font-normal">
                            Type of service
                        </label>
                        <div class="selectWrapper" name="service_id" id="service_id">
                            <select class="selectBox">
                                <option>Select Service</option>
                                @foreach($services as $serviceObj)
                                    <option value="{{ $serviceObj->name }}" {{ !empty($service) && $service->id === $serviceObj->id ? 'selected' : '' }}>{{ $serviceObj->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endif

                <div class="flex flex-col space-y-1">
                    <label class="font-sans text-sm font-normal">
                        Corporation Type
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

                <div class="flex flex-col space-y-2">
                    <label class="font-sans text-sm font-normal">
                        Number of Shareholders
                    </label>
                    <input type="number" name="numberOfShareholders" id="numberOfShareholders"
                           class="block w-full rounded-md border-0 px-2 py-1.5 h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>
        </div>

        <div class="bg-[#626262] mt-6 p-6 rounded-xl">
            <div class="flex items-center justify-between mb-4">
                <p class="font-sans text-lg font-bold text-[#5white">
                    Recommended Services
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                    <label class="font-sans text-sm font-normal">
                        Extra services
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
            </div>
        </div>

        <div class="bg-[#626262] mt-6 p-6 rounded-xl">
            <div class="flex items-center justify-between">
                <p class="font-sans text-lg font-bold text-[#5white">
                    Processing Time
                </p>
            </div>

            <div class="relative flex items-start mt-4">
                <div class="flex h-6 items-center">
                    <input id="processingType1" aria-describedby="comments-description" name="processingType"
                           type="radio" checked
                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                </div>
                <div class="ml-3 text-sm leading-6">
                    <label htmlFor="processingType1" class="font-medium text-gray-900">
                        New comments
                    </label>{" "}
                    <span id="comments-description" class="text-gray-500">
                                    <span class="sr-only">New comments </span>so you always
                                    know what's happening.
                                </span>
                </div>
            </div>

            <div class="relative flex items-start">
                <div class="flex h-6 items-center">
                    <input id="processingType2" aria-describedby="comments-description" name="processingType"
                           type="radio"
                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                </div>
                <div class="ml-3 text-sm leading-6">
                    <label htmlFor="processingType2" class="font-medium text-gray-900">
                        New comments
                    </label>{" "}
                    <span id="comments-description" class="text-gray-500">
                                    <span class="sr-only">New comments </span>so you always
                                    know what's happening.
                                </span>
                </div>
            </div>
        </div>

        <div class="bg-[#626262] mt-6 p-6 rounded-xl">
            <div class="flex items-center justify-between">
                <p class="font-sans text-lg font-bold text-[#5white">
                    How did you know about us?
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="flex flex-col space-y-1">
                    <label class="font-sans text-sm font-normal">

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
            </div>
        </div>
    </div>

    {{--  Right Side Bar  --}}
    <div class="col-span-2 bg-amber-900 relative shadow-md bg-cover bg-center" style="background-image: url('assets/images/rightSidebarBgImage.png');">
        <div class="text-white sticky top-0 flex flex-col items-center">
            <div class="flex items-center justify-center pt-4 pb-[70px] w-full"></div>
            <div class=" px-5">
                <p class="font-sans text-xl font-semibold text-[#292929]">
                    Total pay
                </p>
                <p class="font-sans text-[40px] font-bold text-[#8E5D0B]">
                    $700
                </p>
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Type of service
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        UK COMPANY REGISTRATION
                    </p>
                </div>
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Jurisdiction of incorporation
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        Canada
                    </p>
                </div>

                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Number of Shareholders:
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        3
                    </p>
                </div>

                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Corporation Type:
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        LLC
                    </p>
                </div>

                <div class="mt-3">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Extra Services:
                    </p>
                    <div class="flex items-center justify-between  border-b border-[#1A1A1A] pb-1 mt-2">
                        <p class="font-sans text-sm font-medium text-[#292929] ml-4">
                            Limited:
                        </p>
                        <p class="font-sans text-sm font-medium text-[#292929]">
                            $150
                        </p>
                    </div>



                    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                        <p class="font-sans text-sm font-bold text-[#292929]">
                            Address
                        </p>
                        <p class="font-sans text-sm font-medium text-[#292929]">
                            $100
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                        <p class="font-sans text-sm font-bold text-[#292929]">
                            LLC
                        </p>
                        <p class="font-sans text-sm font-medium text-[#292929]">
                            $100
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                        <p class="font-sans text-sm font-bold text-[#292929]">
                            TAX
                        </p>
                        <p class="font-sans text-sm font-medium text-[#292929]">
                            $100
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                        <p class="font-sans text-sm font-bold text-[#292929]">
                            Processing Type:
                        </p>
                        <p class="font-sans text-sm font-medium text-[#292929]">
                            $500
                        </p>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-8">
                    <button type="button"
                            class="bg-white rounded-lg text-[#FF0000] text-sm font-bold py-2 px-8 flex items-center space-x-2">
                        <img src='assets/images/left-arrow.svg' alt="Logo" class="" />
                        <span>Back</span>
                    </button>

                    <button type="button"
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
</div>


</body>

</html>
