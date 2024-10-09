<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Unity Roleplay</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <style>
        .gradient-background {
            background: linear-gradient(334deg, #e8acbc, #a486ce, #5c9cc8);
            background-size: 180% 180%;
            animation: gradient-animation 6s ease infinite;
            min-height: 100vh;
        }

        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .content-container {
            background: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="gradient-background text-white flex flex-col min-h-screen">

@include('layouts.header')

<main class="flex-grow ">
    <!-- Adjusted Container -->
    <div class="flex flex-col md:flex-row gap-6 max-w-7xl mx-auto p-6 mt-10">

        <!-- Contact Div -->
        <div class="flex-1 shadow-md rounded-lg content-container p-6">
            <h1 class="text-3xl font-bold mb-4 text-black">Contact - Unity Roleplay</h1>
            <p class="mb-6 font-bold text-black">We staan altijd klaar om je te helpen. Neem gerust contact met ons op via de volgende kanalen:</p>

            <h2 class="text-2xl font-semibold mt-4 text-black">Manieren om contact met ons op te nemen</h2>
            <p class="mt-4 text-black font-bold">Voor directe hulp en support raden we je aan om onze Discord-server te gebruiken. We hebben een support team klaarstaan om al je vragen te beantwoorden.</p>

            <h2 class="text-xl font-semibold mt-4 text-black">Onze Sociale Media</h2>
            <p class="mt-4 text-black font-bold">Volg ons op sociale media voor de nieuwste updates, evenementen, en community-interacties. We posten regelmatig updates, sneak peeks van nieuwe functies, en we houden je op de hoogte van de veranderingen binnen onze community!</p>
            <div class="space-y-2 mt-4">
                <a href="https://discord.gg/RAAVsTpzKg" class="bg-blue-600 text-white font-bold rounded-lg py-2 hover:bg-blue-700 transition duration-300 flex items-center justify-center">Discord Main Server</a>
                <a href="mailto:unityroleplay@gmail.com" class="flex items-center justify-center font-bold bg-violet-500 text-white rounded-lg px-4 py-2 transition duration-300 hover:bg-violet-600">Email</a>
                <a href="https://www.tiktok.com/@uniityroleplay?lang=en" class="bg-black text-white font-bold rounded-lg py-2 hover:bg-gray-800 transition duration-300 flex items-center justify-center">TikTok</a>
                <a href="https://www.youtube.com/@uniityroleplay" class="bg-red-600 text-white font-bold rounded-lg py-2 hover:bg-red-700 transition duration-300 flex items-center justify-center">YouTube</a>
            </div>
        </div>

        <!-- FAQ Div -->
        <div class="flex-1 shadow-md rounded-lg content-container p-6">
            <h2 class="text-xl font-semibold text-black">Veelgestelde vragen (FAQ)</h2>
            <div class="mt-4 text-black">
                <h3 class="font-bold mt-4">1. Hoe kan ik Unity Roleplay server joinen?</h3>
                <p class="mt-2">Je kunt lid worden door ons te vinden op FiveM door "Unity Roleplay" te zoeken of door op onze <a href="fivem://connect/45.8.187.31:3389" class="font-bold text-teal-600 hover:underline">directe server link</a> te klikken. Vergeet niet om eerst lid te worden van onze Discord-server voor een burgerrol.</p>

                <h3 class="font-bold mt-4">2. Wat/waar zijn de regels van de server?</h3>
                <p class="mt-2">Onze regels zijn te vinden op onze main <a href="https://discord.gg/RAAVsTpzKg" class="font-bold text-teal-600 hover:underline">Discord</a> server. We raden aan om deze goed door te lezen om ervoor te zorgen dat iedereen een veilige en plezierige ervaring heeft in onze stad.</p>

                <h3 class="font-bold mt-4">3. Ik heb problemen met het inloggen, wat moet ik doen?</h3>
                <p class="mt-2">Als je problemen hebt met inloggen of verbinding maken met de server, kun je altijd contact opnemen met ons supportteam via Discord. Ons team staat klaar om je te helpen!</p>

                <h3 class="font-bold mt-4">4. Hoe kan ik een donatie doen?</h3>
                <p class="mt-2">Donaties zijn enorm belangrijk om onze server draaiende te houden. Meer informatie hierover kun je vinden in onze Discord-server, waar je ook verschillende voordelen kunt krijgen als donateur.</p>
            </div>
        </div>
    </div>
</main>

@include('layouts.footer')

</body>
</html>
