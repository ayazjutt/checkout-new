<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Global Vars -->
    <script>
        var stripeKey = '{{ config('stripe.public_key') }}';
        var checkout_post_route = '{{ route('checkout') }}';
        var state_amount = {{ $state_amount }};
        var countriesAll = <?php echo json_encode($countries_all); ?>;
        var positions = <?php echo json_encode($positions); ?>;
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-notify@1.0.4/dist/simple-notify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@1.0.4/dist/simple-notify.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/checkout.css'])

    <script>
    $(document).ready(function() {
        $('select').select2();
    });
    </script>

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
    $(".mobile-summary").on("click", function () {
      toggleBottomDiv();
    });
  });
</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="antialiased relative">
@if(!empty($country))
    <script>
        var additionalServicesData = <?php echo json_encode($country->additional_services); ?>;
    </script>
@endif

<div class="fixed top-0 left-0 w-full h-full bg-white opacity-75 z-50 overflow-hidden pointer-events-none" id="loader" style="display: none">
    <div class="flex justify-center items-center h-full">
        <div class="animate-spin text-violet-600 fas fa-circle-notch fa-5x"></div>
    </div>
</div>

<form class="lg:h-full relative lg:pb-0" action="{{ route('checkout') }}" method="post" id="registerForm" name="registerForm">

    @csrf
    <!-- Mobile Header -->
    <div class="grid grid-cols-10 h-full lg:mt-0 mt-16" id="thank_you_page" style="display: none;">
        @include('partials.steps.step-5')
    </div>

    <div  id="form_area"
        class="bg-cover bg-no-repeat bg-center h-full bg-[#f5f8fa]">
        <div class="flex items-center justify-center pt-8 w-full lg:hidden">
            <img src='assets/images/logo.png' alt="Logo" class="w-20" />
        </div>

        <div class="flex items-center justify-center mt-5 mb-8 lg:hidden">
            <nav aria-label="Progress">
                <ol role="list" class="flex items-center justify-center">
                    <li class="relative pr-14 sm:pr-20">
                        <!-- Completed Step -->
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="h-0.5 w-full bg-[#DA0000]"></div>
                        </div>
                        <a href="#" data-step="1" id="progress-step-1-mobile" class="relative flex h-8 w-8 items-center justify-center rounded-full bg-[#DA0000]">
                            <span class="text-white">1</span>
                            <span class="sr-only">Step 1</span>
                            <span class="absolute top-8 text-[#191919]">Type</span>
                        </a>

                    </li>
                    <li class="relative pr-14 sm:pr-20">
                        <!-- Completed Step -->
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="h-0.5 w-full bg-[#D3BEA9]"></div>
                        </div>
                        <a href="#" data-step="2" id="progress-step-2-mobile"
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
                        <a href="#" data-step="3" id="progress-step-3-mobile"
                            class="relative flex h-8 w-8 items-center justify-center rounded-full bg-[#D3BEA9] border border-[#C3B09B]"
                            aria-current="step">
                            <span class="text-[#C3B09B]">3</span>
                            <span class="sr-only">Step 3</span>
                            <span class="absolute top-8 text-[#13131380]">Preview</span>

                        </a>
                    </li>
                    <li class="relative">
                        <a href="#" data-step="4" id="progress-step-4-mobile"
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
            <div class="lg:col-span-6 col-span-12 lg:py-8 pb-0 lg:px-20 px-4 bg-cover bg-center text-white h-auto"
            >
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
        <div class="lg:hidden block sticky bottom-0 z-10 h-36 bg-white text-black w-full rounded-tl-2xl rounded-tr-2xl" id="bottomDiv">
            <div class="w-full flex items-center justify-center mobile-summary">
                <div class="h-1 bg-[#DA0000] w-40 my-2 rounded"></div>
            </div>
    
            <div class="px-4 w-full">
                <div class="flex items-start justify-between my-4 mobile-summary">
                    <p class="ml-4 font-semibold text-lg text-[#292929]">Total payment</p>
                    <div class="flex flex-col space-y-2">
                        <p class="font-bold text-3xl text-[#DA0000]">
                            $<span class="total_pay_amount_summary">{{ $processing_types[0]->amount + $state_amount }}</span>
                        </p>
                        <p class="font-normal underline text-xs text-[#292929]">View Price Detail</p>
                    </div>
                </div>
    
                <div class="w-full hidden mb-6" id="summary">
                    @include('partials.summary')
                </div>
    
    
    
                <button type="button" class="w-full h-8 bg-[#DA0000] text-white text-center font-semibold text-base rounded-lg next mobile-view">Next</button>
            </div>
    
        </div>
    </div>



</form>
</body>

</html>
