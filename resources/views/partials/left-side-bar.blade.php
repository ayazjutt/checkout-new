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
