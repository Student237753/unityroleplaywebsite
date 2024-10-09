<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algemene Plaatselijke Verordening Unity Roleplay</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    <style>
        /* Gradient Background */
        .gradient-background {
            background: linear-gradient(334deg, #6b97f7, #7525e2, #f7137e);
            background-size: 180% 180%;
            animation: gradient-animation 6s ease infinite;
            min-height: 100vh; /* Ensures gradient covers the full height */
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Matching background color for the rules */
        .rule-background {
            background: rgba(117, 37, 226, 0.1); /* Light matching purple tint */
        }

        /* Darker background for clickable headers */
        .rule-header {
            background: rgba(117, 37, 226, 0.8); /* Darker purple for header */
        }

        .rule-header:hover {
            background: rgba(117, 37, 226, 1); /* Fully darken on hover */
        }
    </style>
</head>
<body class="gradient-background text-gray-800">

@include('layouts.header')

<div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
    <h1 class="text-4xl font-bold text-center mb-6 text-black">Algemene Plaatselijke Verordening Unity Roleplay</h1>

    <!-- Strafbepaling -->
    <h2 class="text-2xl font-semibold mb-4 text-black">Strafbepaling</h2>
    <p class="mb-4 text-black">De straffen zijn onderverdeeld in acht categorieën:</p>
    <ul class="list-disc list-inside mb-4 text-black font-bold">
        <li>Categorie 1: een waarschuwing + 100 uur taakstraf *(max 3 waarschuwingen in 1 maand, hierna volgt de automatisch oplegging cat. 2)*</li>
        <li>Categorie 2: een ban van 1 dag</li>
        <li>Categorie 3: een ban van 2 dagen</li>
        <li>Categorie 4: een ban van 3 dagen</li>
        <li>Categorie 5: een ban van 1 week</li>
        <li>Categorie 6: een ban van 1 maand</li>
        <li>Categorie 7: permanente ban</li>
        <li>Categorie 8: account wipe</li>
    </ul>

    <!-- Artikel 1 -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 1 - Algemene Roleplay Richtlijnen</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is verboden om een roleplay van zeer slechte kwaliteit uit te spelen, of roleplay verstorend gedrag te vertonen.</p>
            <ul class="list-disc list-inside mb-4 text-black">
                <li>Het is niet toegestaan om opzettelijk de roleplay zodanig te vormen dat er een oneerlijke of onrealistische draai aan het verhaal gegeven wordt, of de roleplay van de andere partij zelf invullen door een onrealistische dwang.</li>
                <li>Het is te allen tijde verboden om je karakter te breken. Hiermee bedoelen we dat je een term gebruikt die gezien wordt als OOC (Out Of Character).</li>
                <li>Ook is het niet toegestaan om “/looc” foutief te gebruiken of te gebruiken om toxic / zoutige opmerkingen te plaatsen.</li>
            </ul>
        </div>
    </div>

    <!-- Artikel 2 -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 2 - Cheats, Exploits & Meta-gaming</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Hij/zij die gebruikmaakt van software/hulpmiddelen (cheats) van derde partijen om profijt te krijgen in het spel, wordt bestraft volgens de 7e categorie.</p>
            <p class="mb-4 text-black">Deze regel geldt ook voor de Discord-client zelf, dus gebruik van clients als BetterDiscord is niet toegestaan.</p>
            <p class="mb-4 text-black">Hij/zij die moedwillig een bug en/of exploit misbruikt om voor zichzelf of anderen profijt te behalen of in-game functionaliteiten omzeild, ongeacht in welke middelen, zal per direct gestraft worden volgens de 7e categorie.</p>
            <p class="mb-4 text-black">Informatie verkregen buiten het karakter om (alle informatie die niet verkregen is door jouw karakter binnen FiveM) mag niet gebruikt worden door het karakter. Bij overtreding zal gestraft worden volgens de 1e categorie.</p>
        </div>
    </div>

    <!-- Artikel 3 -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 3 - Regelgeving en misbruik</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan om anderen te benadelen in de breedste zin van het woord. Dit betekent dat je een ander in het echt of in de game geen ongepaste berichten stuurt, inclusief, maar niet beperkt tot, bedreigingen, intimidatie, haatzaaiende uitlatingen en pornografische content.</p>
        </div>
    </div>

    <!-- Artikel 4 -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 4 - Medewerkers van Unity Roleplay</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Iedereen dient de medewerkers van Unity Roleplay te respecteren en met hen samen te werken. Medewerkers zijn er om te helpen en niet om je te straffen. Bij gebrek aan samenwerking zal de medewerker in kwestie dit kunnen doorgeven aan de staff en leiden tot straf van categorie 3.</p>
        </div>
    </div>

    <!-- Artikel 5 -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 5 - Sluiten van tickets</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Hij/zij die onterecht een ticket sluit kan bestraft worden met een waarschuwing. Bij herhaalde overtredingen kan dit resulteren in een straf van categorie 2.</p>
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
</html>
