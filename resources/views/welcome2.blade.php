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
            width: calc((100% / 12) * 2.5); /* Adjust the number as needed */
        }
    </style>
</head>

<body class="antialiased">

<div class="grid grid-cols-10 h-full">
    {{--  Left Side Bar  --}}
    @include('partials.left-side-bar')

    {{--  Form Area  --}}
    <div class="col-span-6 py-8 px-20 shadow-md bg-cover bg-center text-white" style="background-image: url('assets/images/MainSectionBgImage.png');">
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


</body>

</html>
