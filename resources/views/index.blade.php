<html lang="en">
<head>
    <title>Mango Two | Privacy-First, Open Source URL Shortener</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark min-h-screen font-sans">
<header class="pt-6 max-w-7xl mx-auto px-8">
    <img src="/img/mango-two-logo.png" alt="Mango Two logo" class="h-12 text-left">
</header>

<main class="mt-32 mb-auto max-w-7xl mx-auto px-8">
    <h1 class="text-5xl text-white font-extrabold text-center relative">
        Share Your Links<br>
        <span class="bg-clip-text bg-gradient-to-t from-dark-orange to-light-orange text-transparent">Without Any Tracking</span>
    </h1>

    <p class="text-center text-white text-lg mt-8">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam corporis<br>
        eligendi est nisi nulla qui similique. Corporis perspiciatis, voluptatum.
    </p>

    <div class="mt-14 flex justify-center md:space-x-4 flex-wrap">
        <x-home-page-button-link href="https://chrome.google.com/webstore/detail/mango-two-url-shortener/edkimicnoiglhlkgeooiijbgikgkhbkd?hl=en">
            <img src="/img/chrome-logo.png" alt="Firefox logo" class="inline w-5 h-5 mr-2 align-middle"> Download for Chrome
        </x-home-page-button-link>

        <div class="opacity-50">
            <x-home-page-button-link href="#">
                <img src="/img/firefox-logo.png" alt="Firefox logo" class="inline w-5 h-5 mr-2 align-middle"> Firefox coming soon...
            </x-home-page-button-link>
        </div>
    </div>

    <div class="relative py-16 sm:py-24 lg:py-32 mt-32">
        <div class="mx-auto px-4 text-center sm:px-6 lg:px-8">
            <p class="mt-2 text-3xl font-extrabold text-gray-200 tracking-tight sm:text-4xl">Everything you need to deploy your app</p>
            <p class="mt-5 max-w-prose mx-auto text-lg text-gray-200">Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.</p>
            <div class="mt-12">
                <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                    <x-feature title="Privacy First">
                        <x-slot name="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quo?
                        </x-slot>
                    </x-feature>

                    <x-feature title="Open Source">
                        <x-slot name="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quo?
                        </x-slot>
                    </x-feature>

                    <x-feature title="Rest API">
                        <x-slot name="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quo?
                        </x-slot>
                    </x-feature>

                    <x-feature title="Browser Extensions">
                        <x-slot name="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quo?
                        </x-slot>
                    </x-feature>

                    <x-feature title="Analytics Dashboard">
                        <x-slot name="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quo?
                        </x-slot>
                    </x-feature>

                    <x-feature title="QR Codes">
                        <x-slot name="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quo?
                        </x-slot>
                    </x-feature>
                </div>
            </div>
        </div>
    </div>

</main>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full text-light-orange bg-dark">
    <path fill="currentColor" fill-opacity="1" d="M0,128L80,128C160,128,320,128,480,160C640,192,800,256,960,261.3C1120,267,1280,213,1360,186.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
<footer class="text-dark text-center bg-light-orange pb-6 -mt-2">
    <p>Powered by <a href="https://ashallendesign.co.uk" class="font-extrabold">Ash Allen Design</a> 🚀</p>
</footer>
</body>
</html>
