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

        <script>
            $(document).ready(function() {
                $('select').select2();
            });
        </script>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
    <div class="h-full text-white">
      <div class="bg-[#02044a] h-full">
        <div class="px-20 py-6">
          <div class="flex space-x-5 relative">
            <div class="w-3/5 bg-white p-6 rounded-md shadow-md">
              <p class="font-sans text-lg font-bold text-[#52525b] mb-4">
                Setup Service
              </p>

              <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Jurisdiction of incorporation
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>United Kingdom</option>
                    <option>United State America</option>
                  </select>
                </div>
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    State
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Montana</option>
                    <option>London</option>
                    <option>Texas</option>
                    <option>Wyoming</option>
                  </select>
                </div>
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Type of service
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    <option>Value 4</option>
                    <option>Value 5</option>
                    <option>Value 6</option>
                  </select>
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Corporation Type
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    <option>Value 4</option>
                    <option>Value 5</option>
                    <option>Value 6</option>
                  </select>
                </div>

                <div class="flex flex-col space-y-2">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Number of Shareholders
                  </label>
                  <input
                    type="number"
                    name="numberOfShareholders"
                    id="numberOfShareholders"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

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
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    <option>Value 4</option>
                    <option>Value 5</option>
                    <option>Value 6</option>
                  </select>
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

              <div class="flex items-center justify-between">
                <p class="font-sans text-lg font-bold text-[#52525b]">
                  Processing Time
                </p>
              </div>

              <div class="relative flex items-start mt-4">
                <div class="flex h-6 items-center">
                  <input
                    id="comments"
                    aria-describedby="comments-description"
                    name="comments"
                    type="checkbox"
                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                  />
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label
                    htmlFor="comments"
                    class="font-medium text-gray-900"
                  >
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
                  <input
                    id="comments"
                    aria-describedby="comments-description"
                    name="comments"
                    type="checkbox"
                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                  />
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label
                    htmlFor="comments"
                    class="font-medium text-gray-900"
                  >
                    New comments
                  </label>{" "}
                  <span id="comments-description" class="text-gray-500">
                    <span class="sr-only">New comments </span>so you always
                    know what's happening.
                  </span>
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

              <div class="flex items-center justify-between"></div>
              <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    How did you know about us?
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    <option>Value 4</option>
                    <option>Value 5</option>
                    <option>Value 6</option>
                  </select>
                </div>
              </div>
              
              <div class="flex items-center justify-end">
                <button
                  type="button"
                  class="text-sm font-medium py-1.5 px-4 w-40 rounded-md bg-[#07c553] text-white mt-4"
                >
                  Next Step
                </button>
              </div>
              
            </div>

            <div class="w-1/5 sticky top-0 left-0 flex flex-col items-center px-10 bg-white py-6 rounded-md shadow-md">
              <div class="flex items-center justify-center pt-4 pb-8 w-full">
                <img src={Logo} alt="Logo" class="w-20" />

              </div>
              <!-- <nav aria-label="Progress" class="self-center">
                <ol role="list" class="overflow-hidden">
                  {steps.map((step, stepIdx) => (
                    <li
                      key={step.name}
                      class={classNames(
                        stepIdx !== steps.length - 1 ? "pb-10" : "",
                        "relative"
                      )}
                    >
                      {step.status === "complete" ? (
                        <>
                          {stepIdx !== steps.length - 1 ? (
                            <div
                              class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-indigo-600"
                              aria-hidden="true"
                            />
                          ) : null}
                          <a
                            href={step.href}
                            class="group relative flex items-start"
                          >
                            <span class="flex h-9 items-center">
                              <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 group-hover:bg-indigo-800">
                                <CheckIcon
                                  class="h-5 w-5 text-white"
                                  aria-hidden="true"
                                />
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
                            <div
                              class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300"
                              aria-hidden="true"
                            />
                          ) : null}
                          <a
                            href={step.href}
                            class="group relative flex items-start"
                            aria-current="step"
                          >
                            <span
                              class="flex h-9 items-center"
                              aria-hidden="true"
                            >
                              <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white">
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
                            <div
                              class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300"
                              aria-hidden="true"
                            />
                          ) : null}
                          <a
                            href={step.href}
                            class="group relative flex items-start"
                          >
                            <span
                              class="flex h-9 items-center"
                              aria-hidden="true"
                            >
                              <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                                <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300" />
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
            </div>
            <div class="w-3/6 bg-white p-6 rounded-md shadow-md">
              <p class="font-sans text-lg font-bold text-[#52525b] mb-4">
                Company Name
              </p>

              <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Proposal Name#1
                  </label>
                  <input
                    type="text"
                    name="proposalName"
                    id="proposalName"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Proposal Name#2
                  </label>
                  <input
                    type="text"
                    name="proposalName"
                    id="proposalName"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Proposal Name#3
                  </label>
                  <input
                    type="text"
                    name="proposalName"
                    id="proposalName"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-between w-full">
                  <p class="font-sans text-lg font-bold text-[#52525b]">
                    Shareholder Information
                  </p>
                </div>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Full Name
                  </label>
                  <input
                    type="text"
                    name="fullName"
                    id="fullName"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Nationality
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    <option>Value 4</option>
                    <option>Value 5</option>
                    <option>Value 6</option>
                  </select>
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Passport Number
                  </label>
                  <input
                    type="text"
                    name="passportNumber"
                    id="passportNumber"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Percentage
                  </label>
                  <input
                    type="number"
                    name="percentage"
                    id="percentage"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-between w-full">
                  <p class="font-sans text-lg font-bold text-[#52525b]">
                    Beneficial Owner
                  </p>

                  <button
                    type="button"
                    class="bg-black font-normal text-xs text-white rounded-md py-1 w-14"
                  >
                    Add
                  </button>
                </div>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Full Name
                  </label>
                  <input
                    type="text"
                    name="fullName"
                    id="fullName"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Nationality
                  </label>
                  <select class="bg-white border border-gray-300 text-gray-900 text-sm cursor-pointer rounded-md h-10 p-2.5 outline-none">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    <option>Value 4</option>
                    <option>Value 5</option>
                    <option>Value 6</option>
                  </select>
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Passport Number
                  </label>
                  <input
                    type="text"
                    name="passportNumber"
                    id="passportNumber"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-between w-full">
                  <p class="font-sans text-lg font-bold text-[#52525b]">
                    Billing Details
                  </p>
                </div>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Full Name
                  </label>
                  <input
                    type="text"
                    name="fullName"
                    id="fullName"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Email Address
                  </label>
                  <input
                    type="text"
                    name="emailAddress"
                    id="emailAddress"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Personal Number
                  </label>
                  <input
                    type="text"
                    name="personalNumber"
                    id="personalNumber"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Address 1
                  </label>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Address 2
                  </label>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    City
                  </label>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Country
                  </label>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>

                <div class="flex flex-col space-y-1">
                  <label class="font-sans text-sm font-normal text-[#606266]">
                    Zip Code
                  </label>
                  <input
                    type="text"
                    name="address"
                    id="address"
                    class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  />
                </div>
              </div>

              <div class="border-dashed border-b-2 border-[#d1d5db] my-8"></div>

              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-between w-full">
                  <p class="font-sans text-lg font-bold text-[#52525b]">
                    Special Request
                  </p>
                </div>
              </div>

              <div class="grid grid-cols-1">
                <div class="flex flex-col space-y-1">
                  <textarea class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 h-20 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <button
                  type="button"
                  class="text-sm font-medium py-1.5 px-4 w-40 rounded-md bg-[#07c553] text-white mt-4"
                >
                  Next Step
                </button>
              </div>
            </div>

            <!-- <div class="w-[30%] sticky top-0 right-0  bg-white py-6 rounded-md shadow-md">
              <div class="px-5">
                <p class="font-sans text-lg font-bold text-[#52525b]">
                  Summary
                </p>
                <div class="flex items-center justify-between mt-4 border-dashed border-b border-[#d1d5db] pb-1">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Type of service
                  </p>
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    UK COMPANY REGISTRATION
                  </p>
                </div>
                <div class="flex items-center justify-between mt-4 border-dashed border-b border-[#d1d5db] pb-1">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Jurisdiction of incorporation
                  </p>
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Canada
                  </p>
                </div>

                <div class="flex items-center justify-between mt-4 border-dashed border-b border-[#d1d5db] pb-1">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Number of Shareholders:
                  </p>
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    3
                  </p>
                </div>

                <div class="flex items-center justify-between mt-4 border-dashed border-b border-[#d1d5db] pb-1">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Jurisdiction of incorporation
                  </p>
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Canada
                  </p>
                </div>

                <div class="flex items-center justify-between mt-4 border-dashed border-b border-[#d1d5db] pb-1">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Corporation Type:
                  </p>
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    LLC
                  </p>
                </div>

                <div class="mt-3">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Extra Services:
                  </p>
                  <div class="flex items-center justify-between border-dashed border-b border-[#d1d5db] pb-1 mt-2">
                    <p class="font-sans text-sm font-normal text-[#606266] ml-4">
                      EIN:
                    </p>
                    <p class="font-sans text-sm font-normal text-[#606266]">
                      $150
                    </p>
                  </div>

                  <div class="flex items-center justify-between border-dashed border-b border-[#d1d5db] pb-1 mt-2">
                    <p class="font-sans text-sm font-normal text-[#606266] ml-4">
                      Limited:
                    </p>
                    <p class="font-sans text-sm font-normal text-[#606266]">
                      $0
                    </p>
                  </div>

                  <div class="flex items-center justify-between border-dashed border-b border-[#d1d5db] pb-1 mt-2">
                    <p class="font-sans text-sm font-normal text-[#606266] ml-4">
                      TAX:
                    </p>
                    <p class="font-sans text-sm font-normal text-[#606266]">
                      $100
                    </p>
                  </div>
                </div>

                <div class="flex items-center justify-between mt-4 border-dashed border-b border-[#d1d5db] pb-1">
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    Processing Time:
                  </p>
                  <p class="font-sans text-sm font-normal text-[#606266]">
                    $500
                  </p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>



    <!-- <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="#">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">test platform</h5>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div>
                <label for="countries-multi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="countries-multi" name="countries[]" multiple="multiple" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
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
