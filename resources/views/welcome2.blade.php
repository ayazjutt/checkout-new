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

    <script src="{{ mix('/resources/js/simple-notify.min.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('/resources/css/simple-notify.min.css') }}">

    <script>
    $(document).ready(function() {
        $('select').select2();
    });

    let state_amount = {{ $state_amount }};
    let countriesAll = <?php echo json_encode($countries_all); ?>;
    {{--let processing_amount = {{ $processing_types[0]->amount }};--}}
    </script>

    @if(!empty($country))
        <script>
            let additionalServicesData = <?php echo json_encode($country->additional_services); ?>;
        </script>
    @endif

    @vite('resources/css/app.css')
    @vite('resources/css/checkout.css')

    @vite('resources/js/app.js')

    <style>
    .col-span-custom {
        width: calc((100% / 12) * 2.5);
        /* Adjust the number as needed */
    }
    </style>
</head>

<body class="antialiased">

    <!-- Mobile Header -->
    <div style="background-image: url('assets/images/mobile-header-bg.png');"
        class="bg-cover bg-no-repeat bg-center h-full">
        <div class="flex items-center justify-center pt-8 w-full lg:hidden">
            <img src='assets/images/logo.png' alt="Logo" class="w-20" />
        </div>

        <div class="flex items-center justify-center mt-5 mb-8 lg:hidden">
            <nav aria-label="Progress">
                <ol role="list" class="flex items-center justify-center">
                    <li class="relative pr-14 sm:pr-20">
                        <!-- Completed Step -->
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="h-0.5 w-full bg-[#8E5D0B]"></div>
                        </div>
                        <a href="#" class="relative flex h-8 w-8 items-center justify-center rounded-full bg-[#8E5D0B]">
                            <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Step 1</span>
                            <span class="absolute top-8 text-[#191919]">Type</span>
                        </a>

                    </li>
                    <li class="relative pr-14 sm:pr-20">
                        <!-- Completed Step -->
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="h-0.5 w-full bg-[#D3BEA9]"></div>
                        </div>
                        <a href="#"
                            class="relative flex h-8 w-8 items-center justify-center rounded-full bg-[#D3BEA9] border border-[#C3B09B]">
                            <span class="text-[#C3B09B]">2</span>

                            <span class="sr-only">Step 2</span>
                            <span class="absolute top-8 text-[#13131380]">Details</span>
                        </a>
                    </li>
                    <li class="relative pr-14 sm:pr-20">
                        <!-- Current Step -->
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="h-0.5 w-full bg-[#D3BEA9]"></div>
                        </div>
                        <a href="#"
                            class="relative flex h-8 w-8 items-center justify-center rounded-full bg-[#D3BEA9] border border-[#C3B09B]"
                            aria-current="step">
                            <span class="text-[#C3B09B]">3</span>
                            <span class="sr-only">Step 3</span>
                            <span class="absolute top-8 text-[#13131380]">Preview</span>

                        </a>
                    </li>
                    <li class="relative">
                        <a href="#"
                            class="group relative flex h-8 w-8 items-center justify-center rounded-full bg-[#D3BEA9] border border-[#C3B09B]">
                            <span class="text-[#C3B09B]">4</span>

                            <span class="sr-only">Step 4</span>
                            <span class="absolute top-8 text-[#13131380]">Payment</span>

                        </a>
                    </li>
                </ol>
            </nav>


        </div>


        <div class="grid grid-cols-10 h-full lg:mt-0 mt-16">
            {{--  Left Side Bar  --}}
            @include('partials.left-side-bar')

            {{--  Form Area  --}}
            <div class="lg:col-span-6 col-span-12 py-8 lg:px-20 px-4 shadow-md bg-cover bg-center text-white"
                style="background-image: url('assets/images/MainSectionBgImage.png');">
                {{--  Step 1  --}}
                @include('partials.steps.step-1')

                {{--  Step 2  --}}
                @include('partials.steps.step-2')

                {{--  Step 3  --}}
                @include('partials.steps.step-3')

                {{--  Step 4  --}}
                @include('partials.steps.step-4')
            </div>


            {{--  Right Side Bar  --}}
            @include('partials.right-side-bar')
        </div>
    </div>



</body>

</html>