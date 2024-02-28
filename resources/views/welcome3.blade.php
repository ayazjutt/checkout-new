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
    <div class="bg-[#11AE89] px-20 py-4">
        <div class="flex items-center justify-between">
            <img src="assets/images/new/menu.png" />
            <img src="assets/images/new/logo.png" />
            <p class="text-base font-normal text-white">John Doe</p>
        </div>
    </div>
    <!-- Sidebar -->
    <div class="flex w-full custom-height">
        <div class="w-2/12 shadow-sm bg-white border-r-2 border-[#11AE89]">
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
        <div class="w-10/12 bg-[#F7FAF9] pt-20 px-20">
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
                <div class="-mx-4 mt-8 sm:-mx-0">
                    <table class="min-w-full divide-y divide-gray-300 bg-white shadow-md rounded-md">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Country
                                </th>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Date</th>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    State</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Service</th>
                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Type</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Company Name</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Amount</th>

                                <th scope="col"
                                    class="py-3.5 text-center text-sm font-semibold text-gray-900">
                                    Status</th>


                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#CFF1E6] text-[#11B981] rounded-lg">Completed</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#CFEDFB] text-[#0EA5E9] rounded-lg">Pending</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#FFF1D4] text-[#FFBB2A] rounded-lg">Processing</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#F9D2DA] text-[#E11D48] rounded-lg">Failed</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#CFF1E6] text-[#11B981] rounded-lg">Completed</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#CFEDFB] text-[#0EA5E9] rounded-lg">Pending</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#FFF1D4] text-[#FFBB2A] rounded-lg">Processing</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#F9D2DA] text-[#E11D48] rounded-lg">Failed</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#CFF1E6] text-[#11B981] rounded-lg">Completed</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#CFEDFB] text-[#0EA5E9] rounded-lg">Pending</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#FFF1D4] text-[#FFBB2A] rounded-lg">Processing</p>
                                </td>


                            </tr>

                            <tr>
                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    United States
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    February 26, 2024 at 10:11 PM
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    Wyoming
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC Formation
                                </td>


                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    ABC LLC
                                </td>

                                <td
                                    class="text-center py-4 text-sm font-medium text-gray-900">
                                    480
                                </td>

                                <td
                                    class="capitalize text-center py-4 text-sm font-normal  text-gray-900">
                                    <p class="bg-[#F9D2DA] text-[#E11D48] rounded-lg">Failed</p>
                                </td>


                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>
</body>

</html>