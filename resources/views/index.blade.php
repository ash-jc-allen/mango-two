<html lang="en">
<head>
    <title>Mango Two | Privacy-First, Open Source URL Shortener</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    @production
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="DZIIAJKY" defer></script>
        <!-- / Fathom -->
    @endproduction
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
        Mango Two is a privacy-first, open source URL shortener.<br>Add the extension to your browser and get started with sharing links without any click tracking.
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
            <p class="mt-2 text-3xl font-extrabold text-gray-200 tracking-tight sm:text-4xl">Why Use Mango Two?</p>
            <p class="mt-5 max-w-prose mx-auto text-lg text-gray-200">Here are a few reasons why you might want to use Mango Two...</p>
            <div class="mt-12">
                <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                    <x-feature icon="🕵️‍♂️" title="Privacy-First">
                        <x-slot name="text">
                            We don't track the clicks on any of the links. So, we don't know when your links have been clicked, or who by.
                            <br><br>
                            You can be sure that we aren't selling your data to anyone.
                        </x-slot>
                    </x-feature>

                    <x-feature icon="👨‍💻" title="Open Source">
                        <x-slot name="text">
                            The code that we use for creating and handling the short URLs is completely open-source. This means you can see exactly what we're doing with your data.
                            <br><br>
                            You can even submit your own features too to improve Mango Two!
                        </x-slot>
                    </x-feature>

                    <x-feature icon="⚡️" title="Rest API">
                        <x-slot name="text">
                            Mango Two is powered by a superfast API. So, you can build your own integrations if you'd like.
                            <br><br>
                            The documentation to use the API is coming soon.

                            <x-coming-soon-badge />
                        </x-slot>
                    </x-feature>

                    <x-feature icon="🖥" title="Browser Extensions">
                        <x-slot name="text">
                            You can add Mango Two directly to your web browser and get started in under 30 seconds.
                            <br><br>
                            No signups needed!
                        </x-slot>
                    </x-feature>

                    <x-feature icon="📈" title="Analytics Dashboard">
                        <x-slot name="text">
                            Enable analytics for your links so that you can see when they're clicked.

                            <x-coming-soon-badge />
                        </x-slot>
                    </x-feature>

                    <x-feature icon="🚀" title="QR Codes">
                        <x-slot name="text">
                            Share your short URLs using QR codes. This gives you the flexibility to either share your links as text or as QR codes that can be scanned.

                            <x-coming-soon-badge />
                        </x-slot>
                    </x-feature>
                </div>
            </div>
        </div>
    </div>

</main>

<footer class="text-gray-50 text-center bg-really-dark to-black/0 py-6 border-t-light-orange border-t-2">
    <div class="mt-2">
        <p>Powered by <a href="https://ashallendesign.co.uk" class="font-extrabold">Ash Allen Design</a> 🚀</p>
        <div class="space-x-4 mt-2">
            <p class="block md:inline mt-2 md:mt-0">Analytics by <a href="https://usefathom.com/ref/IYEWUV" class="font-extrabold">Fathom Analytics</a> ⚡</p>
            <p class="block md:inline mt-2 md:mt-0">Hosted using <a href="https://www.digitalocean.com/?refcode=7d06055e9d46&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge" class="font-extrabold">Digital Ocean</a> 💻</p>
        </div>
    </div>
</footer>
</body>
</html>
