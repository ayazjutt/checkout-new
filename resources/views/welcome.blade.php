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
</head>

<body class="antialiased">
    <div class="h-full text-white">

        <div class="bg-[#0000001A] h-full">
            <div class="flex relative h-full">

                <div class="w-1/5 sticky top-0 left-0 flex flex-col items-center px-10 bg-cover bg-center left-sidebar-bg"
                    style="background-image: url('assets/images/leftSidebarBgImage.png');">
                    <div class="flex items-center justify-center pt-4 pb-[70px] w-full">
                        <img src='assets/images/logo.png' alt="Logo" class="w-20" />

                    </div>
                    <!-- <nav aria-label="Progress" class="self-center">
                        <ol role="list" class="overflow-hidden">
                            {steps.map((step, stepIdx) => (
                            <li key={step.name} class={classNames( stepIdx !==steps.length - 1 ? "pb-10" : ""
                                , "relative" )}>
                                {step.status === "complete" ? (
                                <>
                                    {stepIdx !== steps.length - 1 ? (
                                    <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-indigo-600"
                                        aria-hidden="true" />
                                    ) : null}
                                    <a href={step.href} class="group relative flex items-start">
                                        <span class="flex h-9 items-center">
                                            <span
                                                class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 group-hover:bg-indigo-800">
                                                <CheckIcon class="h-5 w-5 text-white" aria-hidden="true" />
                                            </span>
                                        </span>
                                        <span class="ml-4 flex min-w-0 flex-col">
                                            <span class="text-sm font-medium">
                                                {step.name}
                                            </span>
                                            <span class="text-sm text-gray-500">
                                                {step.description}
                                            </span>
                                        </span>
                                    </a>
                                </>
                                ) : step.status === "current" ? (
                                <>
                                    {stepIdx !== steps.length - 1 ? (
                                    <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300"
                                        aria-hidden="true" />
                                    ) : null}
                                    <a href={step.href} class="group relative flex items-start" aria-current="step">
                                        <span class="flex h-9 items-center" aria-hidden="true">
                                            <span
                                                class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white">
                                                <span class="h-2.5 w-2.5 rounded-full bg-indigo-600" />
                                            </span>
                                        </span>
                                        <span class="ml-4 flex min-w-0 flex-col">
                                            <span class="text-sm font-medium text-indigo-600">
                                                {step.name}
                                            </span>
                                            <span class="text-sm text-gray-500">
                                                {step.description}
                                            </span>
                                        </span>
                                    </a>
                                </>
                                ) : (
                                <>
                                    {stepIdx !== steps.length - 1 ? (
                                    <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300"
                                        aria-hidden="true" />
                                    ) : null}
                                    <a href={step.href} class="group relative flex items-start">
                                        <span class="flex h-9 items-center" aria-hidden="true">
                                            <span
                                                class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                                                <span
                                                    class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300" />
                                            </span>
                                        </span>
                                        <span class="ml-4 flex min-w-0 flex-col">
                                            <span class="text-sm font-medium text-gray-500">
                                                {step.name}
                                            </span>
                                            <span class="text-sm text-gray-500">
                                                {step.description}
                                            </span>
                                        </span>
                                    </a>
                                </>
                                )}
                            </li>
                            ))}
                        </ol>
                    </nav> -->

                    <?php 
                    $steps = [
                        [
                            "name" => "Company Type",
                            "description" => "Vitae sed mi luctus laoreet.",
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
                                    aria-hidden="true"></div>
                                @endif
                                <a href="{{ $step['href'] }}" class="group relative flex items-start">
                                    <span class="flex h-9 items-center">
                                        <span
                                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[#8E5D0B] group-hover:bg-indigo-800">
                                            {{-- You need to replace CheckIcon with an equivalent HTML or Blade component --}}
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
                                <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-[#8E5D0B]"
                                    aria-hidden="true"></div>
                                @endif
                                <a href="{{ $step['href'] }}" class="group relative flex items-start">
                                    <span class="flex h-9 items-center">
                                        <span
                                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[#8E5D0B] group-hover:bg-indigo-800">
                                            {{-- You need to replace CheckIcon with an equivalent HTML or Blade component --}}
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
                                <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-[#8E5D0B]"
                                    aria-hidden="true"></div>
                                @endif
                                <a href="{{ $step['href'] }}" class="group relative flex items-start">
                                    <span class="flex h-9 items-center">
                                        <span
                                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[#8E5D0B] group-hover:bg-indigo-800">
                                            {{-- You need to replace CheckIcon with an equivalent HTML or Blade component --}}
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
                <!-- ====================== STEP 1 ====================== -->

                <!-- <div class="w-3/5 py-14 px-20  shadow-md bg-cover bg-center"
                    style="background-image: url('assets/images/MainSectionBgImage.png');">
                    <div>
                        <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Company Type</p>
                        <p class='font-sans font-normal text-xs text-[#FFFFFF]'>A short details for company type. </p>

                    </div>
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <p class="font-sans text-lg font-bold text-[#52525b] mb-4">
                            Setup Service
                        </p>
                        <div class="grid grid-cols-2 gap-x-10 gap-y-4">

                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Jurisdiction of incorporation
                                </label>
                                <div class="selectWrapper">
                                    <select class="selectBox">
                                        <option>Australia</option>
                                        <option>Canada</option>
                                        <option>United Kingdom</option>
                                        <option>United State America</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    State
                                </label>
                                <div class="selectWrapper">
                                    <select class="selectBox">
                                        <option>Montana</option>
                                        <option>London</option>
                                        <option>Texas</option>
                                        <option>Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Type of service
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
                                <label class="font-sans text-sm font-normal text-[#606266]">
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
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Number of Shareholders
                                </label>
                                <input type="number" name="numberOfShareholders" id="numberOfShareholders"
                                    class="block w-full rounded-md border-0 px-2 py-1.5 h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <p class="font-sans text-lg font-bold text-[#52525b]">
                                Recommended Services
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
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
                    
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <p class="font-sans text-lg font-bold text-[#52525b]">
                                Processing Time
                            </p>
                        </div>

                        <div class="relative flex items-start mt-4">
                            <div class="flex h-6 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                            </div>
                            <div class="ml-3 text-sm leading-6">
                                <label htmlFor="comments" class="font-medium text-gray-900">
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
                                <input id="comments" aria-describedby="comments-description" name="comments"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                            </div>
                            <div class="ml-3 text-sm leading-6">
                                <label htmlFor="comments" class="font-medium text-gray-900">
                                    New comments
                                </label>{" "}
                                <span id="comments-description" class="text-gray-500">
                                    <span class="sr-only">New comments </span>so you always
                                    know what's happening.
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="flex items-center justify-between"></div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    How did you know about us?
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
                    <div class="flex items-center justify-end">
                        <button type="button"
                            class="text-sm font-medium py-1.5 px-4 w-40 rounded-md bg-[#07c553] text-white mt-4">
                            Next Step
                        </button>
                    </div>

                </div> -->

                <!-- ====================== STEP 2 ====================== -->

                <!-- <div class="w-3/5 bg-white py-14 px-20  shadow-md bg-cover bg-center"
                    style="background-image: url('assets/images/MainSectionBgImage.png');">
                    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Company & Owner Details</p>
                    <p class='font-sans font-normal text-xs text-[#FFFFFF]'>A short details for company type. </p>

                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="grid grid-cols-2 gap-x-10 gap-y-4">
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Proposal Name#1
                                </label>
                                <input type="text" name="proposalName" id="proposalName"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Proposal Name#2
                                </label>
                                <input type="text" name="proposalName" id="proposalName"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Proposal Name#3
                                </label>
                                <input type="text" name="proposalName" id="proposalName"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-between w-full">
                                <p class="font-sans text-lg font-bold text-[#52525b]">
                                    Shareholder Information
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2  gap-x-10 gap-y-4">
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Full Name
                                </label>
                                <input type="text" name="fullName" id="fullName"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
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
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Passport Number
                                </label>
                                <input type="text" name="passportNumber" id="passportNumber"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>

                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Percentage
                                </label>
                                <input type="number" name="percentage" id="percentage"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                        </div>
                    </div>


                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-between w-full">
                                <p class="font-sans text-lg font-bold text-[#52525b]">
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
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Full Name
                                </label>
                                <input type="text" name="fullName" id="fullName"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-[#606266]">
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
                                <label class="font-sans text-sm font-normal text-[#606266]">
                                    Passport Number
                                </label>
                                <input type="text" name="passportNumber" id="passportNumber"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                        </div>
                    </div>


                    
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center justify-between w-full">
                            <p class="font-sans text-lg font-bold text-[#52525b]">
                                Billing Details
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-x-10 gap-y-4">
                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Full Name
                            </label>
                            <input type="text" name="fullName" id="fullName"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Email Address
                            </label>
                            <input type="text" name="emailAddress" id="emailAddress"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Personal Number
                            </label>
                            <input type="text" name="personalNumber" id="personalNumber"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Address 1
                            </label>
                            <input type="text" name="address" id="address"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Address 2
                            </label>
                            <input type="text" name="address" id="address"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                City
                            </label>
                            <input type="text" name="address" id="address"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Country
                            </label>
                            <input type="text" name="address" id="address"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <label class="font-sans text-sm font-normal text-[#606266]">
                                Zip Code
                            </label>
                            <input type="text" name="address" id="address"
                                class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                    </div>
                              </div>

                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center justify-between w-full">
                            <p class="font-sans text-lg font-bold text-[#52525b]">
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

                    <div class="flex items-center justify-end">
                        <button type="button"
                            class="text-sm font-medium py-1.5 px-4 w-40 rounded-md bg-[#07c553] text-white mt-4">
                            Next Step
                        </button>
                    </div>
                </div> -->

                <!-- ====================== STEP 3 ====================== -->

                <!-- <div class="w-3/5 bg-white py-14 px-20  shadow-md bg-cover bg-center h-full"
                    style="background-image: url('assets/images/MainSectionBgImage.png');">
                    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Step:1</p>
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Corporation Type:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>LLC</p>
                            </div>


                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Number of Share Holder</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>100</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Extra Services:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Agent: $50</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Processing Type:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>$500</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>How did you know about us?
                                </p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Social Media</p>
                            </div>
                        </div>
                    </div>

                    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8] mt-4'>Step:2</p>
                    <div class="bg-gray-400 mt-6 p-6 rounded-xl">

                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                        </div>

                        <p class="mt-4 font-semibold text-base font-sans text-white">Beneficial Owner</p>
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                        </div>

                        <p class="mt-4 font-semibold text-base font-sans text-white">Shareholder Information:</p>
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                        </div>

                        <p class="mt-4 font-semibold text-base font-sans text-white">Billing Information:</p>
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Jurisdiction of
                                    incorporation</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>Canada</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>State:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                        </div>

                        <p class="mt-4 font-semibold text-base font-sans text-white">Zip code</p>
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-3 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-medium text-[10px] text-[#343434]'>Type of Service:</p>
                                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5'>.</p>
                            </div>
                        </div>

                        <p class="mt-4 font-semibold text-base font-sans text-white">Special Request:</p>
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 bg-[#F6F6F699] rounded-md p-4">
                                <p class='font-sans font-normal text-[12px] text-[#343434] mb-4'>Loram ipsum Loram ipsum
                                    Loram ipsum Loram ipsum Loram ipsum Loram ipsum Loram ipsum Loram ipsum Loram ipsum
                                    Loram ipsum </p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- ====================== STEP 4 ====================== -->
                <!-- <div class="w-3/5 bg-white py-14 px-20  shadow-md bg-cover bg-center h-full"
                    style="background-image: url('assets/images/MainSectionBgImage.png');">
                    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Payment</p>
                    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl">
                        <p class="text-white text-xl font-medium mb-4">Select your payment method</p>

                        <div class="flex items-center space-x-20">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] ">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-white">Simple</label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] ">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-white">Bank</label>
                            </div>

                        </div>
                    </div>



                    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl">
                        <p class="text-white text-xl font-medium">Card information</p>
                        <div class="mt-3">
                            <div class="flex flex-col space-y-1">
                                <label class="font-sans text-sm font-normal text-white">
                                    <span class="text-[#FF0000]">*</span>Card Number
                                </label>
                                <input type="text" name="proposalName" id="proposalName"
                                    class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            <div class="grid grid-cols-3 gap-8 mt-4">
                                <div class="">
                                    <label class="font-sans text-sm font-normal text-white">
                                        <span class="text-[#FF0000]">*</span>Expiry Month
                                    </label>
                                    <input type="text" name="proposalName" id="proposalName"
                                        class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>

                                <div class="">
                                    <label class="font-sans text-sm font-normal text-white">
                                        <span class="text-[#FF0000]">*</span>Expiry Year
                                    </label>
                                    <input type="text" name="proposalName" id="proposalName"
                                        class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>


                                <div class="">
                                    <label class="font-sans text-sm font-normal text-white">
                                        <span class="text-[#FF0000]">*</span> CVC
                                    </label>
                                    <input type="text" name="proposalName" id="proposalName"
                                        class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>

                            </div>
                        </div>

                    </div>


                </div> -->

                <!-- ====================== STEP 5 ====================== -->

                <div class="w-3/5 bg-white py-14 px-20  shadow-md bg-cover bg-center h-full"
                    style="background-image: url('assets/images/MainSectionBgImage.png');">
                    <p class='font-sans font-semibold text-[28px] text-[#C8C8C8]'>Payment</p>
                    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl">
                        <p class="text-white text-xl font-medium mb-4">Select your payment method</p>

                        <div class="flex items-center space-x-20">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] ">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-white">Simple</label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-[#11AE89] bg-gray-100 border-gray-300 rounded focus:ring-[#11AE89] ">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-white">Bank</label>
                            </div>

                        </div>
                    </div>



                    <div class="bg-[#626262] mt-6 mb-6 p-6 rounded-xl">
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
                        </div>

                    </div>


                </div>




                <div class="w-1/5 sticky top-0 right-0 px-5 pt-[115px] shadow-md bg-cover bg-center" style="background-image: url('assets/images/rightSidebarBgImage.png');>
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
    </div>



    <!-- <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="#">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">test platform</h5>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div>
                <label for="countries-multi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="countries-multi" name="countries[]" multiple="multiple" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300   dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                </div>
                <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
            </div>
        </form>
    </div> -->


</body>

</html>