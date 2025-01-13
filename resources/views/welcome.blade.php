<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Cyber Engagement | Automotive Risk Management Partners</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.svg') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxStyles
        @turnstileScripts()
    </head>
    <body class="font-sans antialiased">
        <div class="relative overflow-hidden bg-white">
            <div class="hidden lg:absolute lg:inset-0 lg:block" aria-hidden="true">
                <svg
                    class="absolute left-1/2 top-0 -translate-y-8 translate-x-64 transform"
                    width="640"
                    height="784"
                    fill="none"
                    viewBox="0 0 640 784"
                >
                    <defs>
                        <pattern
                            id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047"
                            x="118"
                            y="0"
                            width="20"
                            height="20"
                            patternUnits="userSpaceOnUse"
                        >
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                    <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
                </svg>
            </div>

            <div class="relative pb-16 pt-6 sm:pb-24 lg:pb-32">
                <div>
                    <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-6" aria-label="Global">
                        <div class="flex flex-1 items-center">
                            <div class="flex w-full items-center justify-between md:w-auto">
                                <div>
                                    <span class="sr-only">Automotive Risk Management Partners</span>
                                    <img class="h-8 w-auto sm:h-10" src="{{ asset('website-logo.svg') }}" alt="" />
                                </div>
                                <div class="-mr-2 flex items-center md:hidden"></div>
                            </div>
                        </div>
                        <div class="hidden text-right md:block"></div>
                    </nav>
                </div>

                <main class="mx-auto mt-16 max-w-7xl px-6 sm:mt-24 lg:mt-32">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                        <div class="sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:text-left">
                            <h1>
                                <span class="mt-1 block text-3xl font-bold tracking-tight sm:text-5xl xl:text-5xl">
                                    <span class="text-arm-gray-900 block">
                                        Stop Malicious Assaults and Turn Hackers’ Attacks Back on Them
                                    </span>
                                </span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                Unique analysis of cybersecurity protocols for auto dealerships
                            </p>
                            <div class="mt-8 sm:mx-auto sm:max-w-lg sm:text-center lg:mx-0 lg:text-left">
                                @if (Cookie::get('submitted'))
                                    <div class="mt-3">
                                        <p class="mb-3 text-base font-medium text-gray-900">
                                            Thank you for downloading our special report.
                                        </p>
                                    </div>
                                    <a
                                        download
                                        href="{{ asset('cyber-engagement.pdf') }}"
                                        class="hover:bg-orange-green-500 focus-visible:outline-orange-green-600 inline-flex items-center gap-x-2 rounded-md bg-arm-orange-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                                    >
                                        <svg
                                            class="-ml-0.5 h-5 w-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M12 13v8l-4-4" />
                                            <path d="m12 21 4-4" />
                                            <path d="M4.393 15.269A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.436 8.284" />
                                        </svg>
                                        Download
                                    </a>
                                @else
                                    <p class="text-base font-medium text-gray-900">
                                        Fill out the form to download our special report.
                                    </p>
                                    <div class="mt-3">
                                        <livewire:campaign.form />
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div
                            class="relative mt-12 sm:mx-auto sm:max-w-lg lg:col-span-6 lg:mx-0 lg:mt-0 lg:flex lg:max-w-none lg:items-center"
                        >
                            <svg
                                class="absolute left-1/2 top-0 origin-top -translate-x-1/2 -translate-y-8 scale-75 transform sm:scale-100 lg:hidden"
                                width="640"
                                height="784"
                                fill="none"
                                viewBox="0 0 640 784"
                                aria-hidden="true"
                            >
                                <defs>
                                    <pattern
                                        id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e"
                                        x="118"
                                        y="0"
                                        width="20"
                                        height="20"
                                        patternUnits="userSpaceOnUse"
                                    >
                                        <rect
                                            x="0"
                                            y="0"
                                            width="4"
                                            height="4"
                                            class="text-gray-200"
                                            fill="currentColor"
                                        />
                                    </pattern>
                                </defs>
                                <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                                <rect
                                    x="118"
                                    width="404"
                                    height="784"
                                    fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"
                                />
                            </svg>
                            <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                                <div
                                    class="relative block w-full overflow-hidden rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-arm-blue-500 focus:ring-offset-2"
                                >
                                    <img class="w-full" src="{{ asset('cover.webp') }}" alt="" />
                                    <span
                                        class="absolute inset-0 flex h-full w-full items-center justify-center"
                                        aria-hidden="true"
                                    ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <footer class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a
                        target="_blank"
                        href="https://www.facebook.com/people/Automotive-Risk-Management-Partners/100090218200818/"
                        class="text-gray-400 hover:text-gray-500"
                    >
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                    <a
                        target="_blank"
                        href="https://www.linkedin.com/company/autorisknow/"
                        class="text-gray-400 hover:text-gray-500"
                    >
                        <span class="sr-only">LinkedIn</span>
                        <svg
                            class="h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                    <a
                        target="_blank"
                        href="https://www.youtube.com/@AutomotiveRiskManagement"
                        class="text-gray-400 hover:text-gray-500"
                    >
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                </div>
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-500">
                        &copy; {{ now()->format('Y') }} Automotive Risk Management Partners. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
        @fluxScripts
    </body>
</html>
