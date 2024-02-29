<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<style>
.custom-height {
    height: calc(100% - 61px);
}
</style>

<body>

    <!-- Header -->
    <div class="bg-[#11AE89] lg:px-20 px-5 py-4">
        <div class="flex items-center justify-between">
            <img src="assets/images/new/menu.png" />
            <img src="assets/images/new/logo.png" />
            <p class="text-base font-normal text-white">John Doe</p>
        </div>
    </div>
    <!-- Desktop View -->
    <div class="hidden lg:flex w-full custom-height">
        <!-- Sidebar -->
        <div class=" w-1/12 shadow-sm bg-white border-r-2 border-[#11AE89]">
            <div class="flex flex-col justify-center space-y-6 mt-10">
                <div class="flex flex-col items-center space-y-1 cursor-pointer">
                    <img class="w-7 h-7" src="assets/images/new/home.png" />
                    <p class="text-black text-base font-normal">Home</p>
                </div>

                <div class="flex flex-col items-center space-y-1 cursor-pointer">
                    <img class="w-7 h-7" src="assets/images/new/dashboard.png" />
                    <p class="text-black text-base font-normal">Dashboard</p>
                </div>


                <div class="flex flex-col items-center space-y-1 cursor-pointer">
                    <img class="w-7 h-7" src="assets/images/new/settings.png" />
                    <p class="text-black text-base font-normal">Settings</p>
                </div>


                <div class="flex flex-col items-center space-y-1 cursor-pointer">
                    <img class="w-7 h-7" src="assets/images/new/logout.png" />
                    <p class="text-black text-base font-normal">Logout</p>
                </div>

            </div>

        </div>

        <!-- Desktop Table Content -->
        <div class="w-11/12 bg-[#F7FAF9] pt-20 px-20">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-medium leading-6 text-[#3D475C]">Order List</h1>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <button type="button"
                            class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                            order</button>
                    </div>
                </div>
                <div class="mt-4 bg-white shadow-md rounded-md">
                    <div class="px-4 py-6">
                        <div class="flex items-center justify-between">
                            <input type="text" class="rounded-md px-2 py-2 outline-none border" placeholder="Search" />
                            <div class="flex items-center space-x-3">
                                <input type="date" class="rounded-md px-2 py-2 outline-none border"
                                    placeholder="Pick Date range" />
                                <div class="h-full">
                                    <select id="location" name="location"
                                        class="h-11 block bg-white outline-none w-full rounded-md border py-1.5 pl-3 pr-10 text-gray-900 sm:text-sm sm:leading-6">
                                        <option>United States</option>
                                        <option selected>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>
                    <hr />
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Country
                                </th>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Date</th>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    State</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Service</th>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Type</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Company Name</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Amount</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-[#3D475C]">
                                    Status</th>


                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#CFF1E6] text-[#11B981] rounded-lg py-1">Completed</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#CFEDFB] text-[#0EA5E9] rounded-lg py-1">Pending</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#FFF1D4] text-[#FFBB2A] rounded-lg py-1">Processing</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#F9D2DA] text-[#E11D48] rounded-lg py-1">Failed</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#CFF1E6] text-[#11B981] rounded-lg py-1">Completed</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#CFEDFB] text-[#0EA5E9] rounded-lg py-1">Pending</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#FFF1D4] text-[#FFBB2A] rounded-lg py-1">Processing</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#F9D2DA] text-[#E11D48] rounded-lg py-1">Failed</p>
                                </td>


                            </tr>

                            <tr>
                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    United States
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    Wyoming
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC Formation
                                </td>


                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    ABC LLC
                                </td>

                                <td class="text-center py-4 px-4 text-sm font-medium text-[#3D475C]">
                                    480
                                </td>

                                <td class="capitalize text-center py-4 px-4 text-xs font-normal">
                                    <p class="bg-[#CFF1E6] text-[#11B981] rounded-lg py-1">Completed</p>
                                </td>


                            </tr>
                        </tbody>
                    </table>


                    <!-- <div class="mt-5 flex items-center justify-between px-4 py-4">
                        <p class="text-[#3D475C] text-sm font-normal"><span class="text-[#9499A1]">Showing:</span> &nbsp;&nbsp;&nbsp; 40 of 20</p>
                        <div>


                        </div>
                    </div> -->
                    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                        <div class="flex flex-1 justify-between sm:hidden">
                            <a href="#"
                                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                            <a href="#"
                                class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                        </div>
                        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">1</span>
                                    to
                                    <span class="font-medium">10</span>
                                    of
                                    <span class="font-medium">97</span>
                                    results
                                </p>
                            </div>
                            <div>
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm"
                                    aria-label="Pagination">
                                    <a href="#"
                                        class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Previous</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                    <a href="#" aria-current="page"
                                        class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                    <a href="#"
                                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                    <a href="#"
                                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                    <a href="#"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                                    <a href="#"
                                        class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Next</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- Mobile View -->

    <div class="lg:hidden block px-5 py-4">
        <div class="flex items-center space-x-2">
            <input type="text" class="rounded-md px-2 py-2 w-full outline-none border" placeholder="Search" />
        </div>

        <div class="grid grid-cols-1 mt-4">
            <div class="border rounded-md px-4 py-2 mb-4">
                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">ID:</p>
                    <p class="font-normal text-[#3D475C] text-sm">1231231</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Status:</p>
                    <p class="font-normal text-[#3D475C] text-sm">Completed</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Amount:</p>
                    <p class="font-normal text-[#3D475C] text-sm">480</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Company Name:</p>
                    <p class="font-normal text-[#3D475C] text-sm">ABC LLC</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Date:</p>
                    <p class="font-normal text-[#3D475C] text-sm">30 April 2024</p>
                </div>
            </div>

            <div class="border rounded-md px-4 py-2 mb-4">
                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">ID:</p>
                    <p class="font-normal text-[#3D475C] text-sm">1231231</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Status:</p>
                    <p class="font-normal text-[#3D475C] text-sm">Completed</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Amount:</p>
                    <p class="font-normal text-[#3D475C] text-sm">480</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Company Name:</p>
                    <p class="font-normal text-[#3D475C] text-sm">ABC LLC</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Date:</p>
                    <p class="font-normal text-[#3D475C] text-sm">30 April 2024</p>
                </div>
            </div>

            <div class="border rounded-md px-4 py-2 mb-4">
                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">ID:</p>
                    <p class="font-normal text-[#3D475C] text-sm">1231231</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Status:</p>
                    <p class="font-normal text-[#3D475C] text-sm">Completed</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Amount:</p>
                    <p class="font-normal text-[#3D475C] text-sm">480</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Company Name:</p>
                    <p class="font-normal text-[#3D475C] text-sm">ABC LLC</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Date:</p>
                    <p class="font-normal text-[#3D475C] text-sm">30 April 2024</p>
                </div>
            </div>

            <div class="border rounded-md px-4 py-2 mb-4">
                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">ID:</p>
                    <p class="font-normal text-[#3D475C] text-sm">1231231</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Status:</p>
                    <p class="font-normal text-[#3D475C] text-sm">Completed</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Amount:</p>
                    <p class="font-normal text-[#3D475C] text-sm">480</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Company Name:</p>
                    <p class="font-normal text-[#3D475C] text-sm">ABC LLC</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Date:</p>
                    <p class="font-normal text-[#3D475C] text-sm">30 April 2024</p>
                </div>
            </div>

            <div class="border rounded-md px-4 py-2 mb-4">
                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">ID:</p>
                    <p class="font-normal text-[#3D475C] text-sm">1231231</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Status:</p>
                    <p class="font-normal text-[#3D475C] text-sm">Completed</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Amount:</p>
                    <p class="font-normal text-[#3D475C] text-sm">480</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Company Name:</p>
                    <p class="font-normal text-[#3D475C] text-sm">ABC LLC</p>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <p class="font-normal text-[#3D475C] text-base">Date:</p>
                    <p class="font-normal text-[#3D475C] text-sm">30 April 2024</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>