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

    let stripeKey = '{{ config('stripe.public_key') }}';
    let checkout_post_route = '{{ route('checkout') }}';
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

    <script src="https://js.stripe.com/v3/"></script>

    <script>
  $(document).ready(function () {
    // Function to toggle the height of the bottom div
    function toggleBottomDiv() {
      var $bottomDiv = $("#bottomDiv");

      if ($bottomDiv.height() === 144) {
        $bottomDiv.animate({ height: 500 }, 500);
        // Add any additional actions you want to perform when expanding the div
        $("#summary").show();
    } else {
        $bottomDiv.animate({ height: 144 }, 500);
        $("#summary").hide();
        // Add any additional actions you want to perform when collapsing the div
      }
    }

    // Event listener for the bottom div click
    $("#bottomDiv").on("click", function () {
      toggleBottomDiv();
    });
  });
</script>

</head>

<body class="antialiased relative">
<form class="lg:h-full" action="{{ route('checkout') }}" method="post" id="registerForm" name="registerForm">
    @csrf
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
            <div class="lg:col-span-6 col-span-12 py-8 lg:px-20 px-4 shadow-md bg-cover bg-center text-white h-auto"
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

    <div class="lg:hidden block absolute bottom-0 h-36 bg-white text-black w-full rounded-tl-2xl rounded-tr-2xl" id="bottomDiv">
        <div class="w-full flex items-center justify-center">
            <div class="h-1 bg-[#8E5D0B] w-40 my-2 rounded"></div>
        </div>    

        <div class="px-4 w-full">
            <div class="flex items-start justify-between my-4">
                <p class="ml-4 font-semibold text-lg text-[#292929]">Total payment</p>
                <div class="flex flex-col space-y-2">
                    <p class="font-bold text-3xl text-[#8E5D0B]">$700</p>
                    <p class="font-normal underline text-xs text-[#292929]">View Price Detail</p>
                </div>
            </div>

            <div class="w-full hidden mb-6" id="summary">
    
                {{-- Jurisdiction --}}
                {{--            @if(!empty($country))--}}
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Jurisdiction of incorporation
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        {{ $country ? $country->name : '-' }}
                    </p>
                </div>
                {{--            @endif--}}
    
                {{-- State --}}
                @if(!empty($state))
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        State
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        {{ $state->name }}
                    </p>
                </div>
                @endif
    
                {{-- Service --}}
                @if(!empty($service))
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Service Type
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        {{ $service->name }}
                    </p>
                </div>
                @endif
    
                {{-- Type --}}
                @if(!empty($service_type))
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Corporation Type
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        {{ $service_type->name }}
                    </p>
                </div>
                @endif
    
                {{-- Number of Shareholders --}}
                @if(!empty($service))
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Number of Shareholders
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]" id="numberOfShareholdersSummary">
                        1
                    </p>
                </div>
                @endif
    
                {{-- Processing --}}
                @if(!empty($processing_types))
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Processing Type
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        $<span class="processing-type-radio-summary">{{ $processing_types[0]->amount }}</span>
                    </p>
                </div>
                @endif
    
                {{-- State Charges --}}
                @if(!empty($state_amount))
                <div class="flex items-center justify-between mt-4  border-b border-[#1A1A1A] pb-1">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        State Charges
                    </p>
                    <p class="font-sans text-sm font-medium text-[#292929]">
                        ${{ $state_amount }}
                    </p>
                </div>
                @endif
    
                {{-- Extra Extra --}}
                <div class="mt-6" style="display: none" id="additional_services_wrapper">
                    <p class="font-sans text-sm font-bold text-[#292929]">
                        Extra Services:
                    </p>
    
                    <div class="" id="additional_services_container">
                        <div class="flex items-center justify-between mt-2 border-b border-[#1A1A1A] pb-1">
                            <p class="font-sans text-xs font-bold text-[#292929]">
                                Address
                            </p>
                            <p class="font-sans text-sm font-medium text-[#292929]">
                                $100
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <button class="w-full h-8 bg-[#8E5D0B] text-white text-center font-semibold text-base rounded-lg">Next</button>
        </div>

    </div>


</form>
</body>

</html>
