<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="pl">
<head>
    <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DineDigital</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="./output.css" rel="stylesheet">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="./assets/init-alpine.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    @vite(['resources/js/welcome.js'])
</head>
<body>
<header class="fixed w-full">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="/" class="flex items-center">
                <img src="./images/dinedigital.png" class="h-6 mr-3 sm:h-9" alt="DineDigital Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">dinedigital.</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button
                    class="rounded-md focus:outline-none focus:shadow-outline-purple"
                    @click="$store.darkMode.toggle()"
                    aria-label="Toggle color mode"
                >
                    <template x-if="!$store.darkMode.dark">
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <!-- Sun Icon for Light Mode -->
                            <path
                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                            ></path>
                        </svg>
                    </template>
                    <template x-if="$store.darkMode.dark">
                        <svg
                            class="w-5 h-5 dark:text-white"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <!-- Moon Icon for Dark Mode -->
                            <path
                                fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </template>
                </button>
                <a href=" {{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Zaloguj się</a>
                <a href="{{ route('panel') }}" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Wypróbuj</a>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#start" class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white" aria-current="page">Strona główna</a>
                    </li>
                    <li>
                        <a href="#o-nas" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">O usłudze</a>
                    </li>
                    <li>
                        <a href="#cennik" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Cennik</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Start block -->
<section id="start" class="bg-white dark:bg-gray-900 md:px-10 py-5 md:py-10 lg:py-20 xl:py-20">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 py-5">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Zwiększ ilość klientów<br>przy użyciu social media.</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Zwiększaj popularność swojej restauracji dzięki skutecznej obecności w mediach społecznościowych! Dinedigital oferuje automatyzację procesu prowadzenia kont w mediach społecznościowych, co pozwala Ci skoncentrować się na rozwijaniu biznesu, nie wydając przy tym fortuny na agencje marketingowe.</p>
        </div>
        <div class="lg:mt-0 md:px-20 lg:px-0 xl:px-0 lg:col-span-5 xl:col-span-4 lg:flex">
            <img src="./images/hero.png" alt="hero image" class="w-full">
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section id="o-nas" class="bg-gray-50 dark:bg-gray-800 md:px-10">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Automatyczne tworzenie i publikacja angażujących postów</h2>
                <p class="mb-8 font-light lg:text-xl">Dinedigital wygeneruje posty idealnie dostosowane do Twojej grupy docelowej, dopasuje przekaz i styl komunikacji do wizerunku Twojej restauracji, a następnie opublikuje je na wszystkich połączonych platformach w momencie, który zagwarantuje najlepsze rezultaty. Co najważniejsze – <strong>bez Twojego udziału</strong>.</p>
                <!-- List -->
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Pisanie postów przy użyciu AI</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Automatyczne publikowanie</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Spójny przekaz zgodny z wizerunkiem lokalu</span>
                    </li>
                </ul>
                <p class="mb-8 font-light lg:text-xl">Zajmij się prowadzeniem restauracji, socal media zostaw nam.</p>
            </div>
            <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="./images/feature-1.png" alt="dashboard feature image">
        </div>
    </div>
    <div class="dark:bg-gray-700 items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
        <div class="col-span-2 mb-8">
            <p class="text-lg font-medium text-purple-600 dark:text-purple-500">Zainwestuj w swój wizerunek</p>
            <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">Zwiększ ilość klientów oraz swoje przychody</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Pozycja w social media bezpośrednio wpływa na ilość gości w twojej restauracji.</p>
        </div>
        <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
                <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path></svg>
                <h3 class="mb-2 text-2xl font-bold dark:text-white"> Nawet 80% twojej grupy docelowej </h3>
                <p class="font-light text-gray-500 dark:text-gray-400">Taki odestek twojej grupy docelowej może korzystać z social media</p>
            </div>
            <div>
                <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                <h3 class="mb-2 text-2xl font-bold dark:text-white">Nawet 30% wzrostu obrotów</h3>
                <p class="font-light text-gray-500 dark:text-gray-400">Lokale z najlepszymi wynikami obserwują znaczny wzrost sprzedaży</p>
            </div>
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800 md:px-10">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
            </svg>
            <blockquote>
                <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"Jeśli chcesz być dobrym liderem, musisz nauczyć się delegować. Kluczem jest znalezienie ludzi lepszych od siebie w wykonaniu zadań, które masz do oddania"</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-gray-900 dark:text-white">Richard Branson</div>
                    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Przedsiębiorca</div>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section id="cennik" class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
        <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Stworzone z myślą o restauracjach takich jak Twoja</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Zależy nam na tym, aby klienci byli regularnie informowani o Twojej ofercie, dzięki czemu stajesz się ich pierwszym wyborem.</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-1 lg:justify-center sm:gap-6 xl:gap-10 lg:space-y-0">
            <!-- Pricing Card -->
            <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Auto Social Manager</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Idealny dla restauracji chcących zaistnieć w mediach społecznościowych.</p>
                <div class="flex items-center justify-center my-8">
                    <span class="text-5xl font-extrabold">479 PLN</span>
                    <span class="text-gray-500 dark:text-gray-400"> / netto miesięcznie</span>
                </div>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Indywidaulna konfiguracja</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>7 postów tygodniowo</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Pełna automatyzacja pisania i wstawiania postów. Facebook oraz instagram.</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Brak dodatkowych kosztów</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Możliwość dopasowania sposobu komunikacji</span>
                    </li>
                </ul>
                <a href="#" class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-purple-900">Wypróbuj przez 14 dni za darmo</a>
            </div>
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
        <h2 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">Najczęściej zadawane pytania</h2>
        <div class="max-w-screen-md mx-auto">
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h3 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                        <span>Czy mogę używać tej aplikacji do zarządzania postami w mojej restauracji?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Tak, nasza aplikacja została stworzona, aby ułatwić właścicielom restauracji promowanie swoich lokali w mediach społecznościowych takich jak Facebook i Instagram. Umożliwia ona automatyzację postów, wykorzystując zaawansowaną sztuczną inteligencję do generowania treści i grafik na podstawie dostarczonych przez Ciebie informacji.</p>
                    </div>
                </div>
                <h3 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span>Czy mogę zaplanować posty na cały miesiąc?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Absolutnie! Nasza aplikacja oferuje zaawansowane możliwości planowania postów. Możesz zaplanować swoje posty na każdy dzień miesiąca lub nawet na dłużej, albo poprostu zdefiniować konkretne dni tygodnia lub pory. Dzięki temu możesz skupić się na prowadzeniu swojej restauracji, mając pewność, że Twoje media społecznościowe są regularnie aktualizowane.</p>
                    </div>
                </div>
                <h3 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span>Jak aplikacja dobiera treść do charakteru mojej restauracji?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Nasza aplikacja wykorzystuje zaawansowane algorytmy sztucznej inteligencji do analizy dostarczonych przez Ciebie informacji, takich jak opis restauracji, ton wypowiedzi, czy typ kuchni. Na tej podstawie generuje treści, które najlepiej oddają charakter Twojego lokalu i przemawiają do Twojej grupy docelowej.</p>
                    </div>
                </div>
                <h3 id="accordion-flush-heading-4">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                        <span>Jak mogę dodać zdjęcia do moich postów?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Możesz łatwo dodać zdjęcia swojego lokalu bezpośrednio przez aplikację. Nasza platforma pozwala na przesyłanie i przechowywanie zdjęć, które następnie mogą być automatycznie używane w Twoich postach. Sztuczna inteligencja dobiera najlepsze zdjęcia do treści postów, zapewniając, że publikacje są atrakcyjne i angażujące dla Twoich obserwatorów.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End block -->
<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-sm mx-auto text-center">
            <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">Zautomatyzuj prowadzenie social media już dziś!</h2>
            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Darmowy okres próbny obeujmuje wszystkie funkcje dinedigital przez 14 dni.</p>
            <a href="#" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Wypróbuj</a>
        </div>
    </div>
</section>
<!-- End block -->
<footer class="bg-white dark:bg-gray-800">
        <div class="text-center py-5">
            <a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="./images/dinedigital.png" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">dine<text class="text-purple-500">digital.</text></span>
            </a>
            <span class="block text-sm text-center text-gray-500 dark:text-gray-400">{{ now()->format('Y') }} dinedigital. All Rights Reserved.</span>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>
</html>
