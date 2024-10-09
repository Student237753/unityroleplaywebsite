<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Regels - Unity Roleplay</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    <style>
        /* Gradient Background */
        .gradient-background {
            background: linear-gradient(334deg, #e8acbc, #a486ce, #5c9cc8);
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
            background: rgba(164, 134, 206); /* Darker purple for header */
        }

        .rule-header:hover {
            background: rgba(117, 37, 226, 1); /* Fully darken on hover */
        }
    </style>
</head>
<body class="gradient-background text-gray-800">

@include('layouts.header')

<div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
    <h1 class="text-4xl font-bold text-center mb-6 text-black">Server Regels - Unity Roleplay</h1>

    <!-- Strafbepaling -->
    <h2 class="text-2xl font-semibold mb-4 text-black">Strafbepaling</h2>
    <p class="mb-4 text-black">
        Wij als Unity Roleplay werken met een puntensysteem voor sancties, het systeem staat hieronder uitgelegd. Je kan voor elke sanctie een bepaald aantal punten opgelegd krijgen. Dit kan verschillen van 0 t/m 3 punten. Het is aan het stafflid zelf om te bepalen of er een tijdelijk verbanning aan gekoppeld zit en hoe lang de tijdelijk verbanning uiteindelijk is.
    </p>
    <p class="mb-4 text-black">
        Als je 1 punt opgelegd krijgt verloopt deze na 1 maand. Als je 2 punten opgelegd krijgt verlopen deze na 2 maanden. Als je 3 punten opgelegd krijgt verlopen deze na 3 maanden.
    </p>
    <p class="mb-4 text-black">
        Bij het behalen van 6 punten of wanneer wij door hebben dat de speler niet de intenties heeft om serieus te spelen zal hij/zij een permanente verbanning ontvangen.
    </p>
    <p class="mb-4 text-black">
        Indien je na een permanente verbanning ge-unbanned wordt, kan de staff ervoor kiezen een notitie op je naam te zetten. Indien je in deze periode nogmaals de fout ingaat, word je opnieuw permanent verbannen.
    </p>
    <p class="mb-4 text-black">
        Het Staffteam van Unity Roleplay heeft altijd het laatste woord over een overtreding en wat voor sanctie hierbij past. Ben je het niet eens met je sanctie, dan kan je een bezwaar indienen via een ticket in de <a href="https://discord.gg/RAAVsTpzKg" class=" font-bold hover:underline">Discord</a>.
    </p>
</div>
<div class="flex space-x-4">
    <!-- eerste div voor 10 regels -->
<div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
    <!-- FailRP -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">FailRP - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het uitvoeren van een handeling die in het echt niet mogelijk zou zijn. Voorbeeld: Het doorrennen nadat je getazerd bent of een zwaar ongeluk maken en doen alsof er niks is gebeurd.</p>
        </div>
    </div>

    <!-- RDM -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">RDM (Random Deathmatch) - 2, 3 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het doden, slaan of verwonden van een speler zonder dat hier roleplay bij komt kijken.</p>
        </div>
    </div>

    <!-- VDM -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">VDM (Vehicle Deathmatch) - 2, 3 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het gebruiken van je voertuig als wapen. Voorbeeld: Je rijdt 3 mensen dood op Blokkenpark.</p>
        </div>
    </div>

    <!-- GTA-Style Driving -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">GTA-Style Driving - 1, 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Niet realistisch rijden met een voertuig is niet toegestaan. Voorbeeld: Je vliegt met een auto van een brug af op grote hoogte.</p>
        </div>
    </div>

    <!-- VYL (Value Your Life) -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">VYL (Value Your Life) - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het niet waarderen van je leven. Voorbeeld: Er staat een vuurwapen op je gericht en je kiest ervoor die persoon te slaan.</p>
        </div>
    </div>

    <!-- NLR (New Life Rule) -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">NLR (New Life Rule) - 1, 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Wanneer je respawned, vergeet je alles wat er is gebeurd in het scenario dat leidde tot je "coma".</p>
        </div>
    </div>

    <!-- Off-RP Praten -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Off-RP Praten - 1 punt</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het praten over dingen buiten roleplay is niet toegestaan. Voorbeeld: "Ik ga een report indienen."</p>
        </div>
    </div>

    <!-- Microfoon Verplichting -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Microfoon Verplichting - 1 punt</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is verplicht om een werkende en goed functioneert microfoon te hebben op de server.</p>
        </div>
    </div>

    <!-- Metagaming -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Metagaming - 3 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Informatie buiten de game in roleplay gebruiken is niet toegestaan. Voorbeeld: Je ziet op een livestream dat iemand bij de cardealer is, en je gaat erheen om hem te ontvoeren.</p>
        </div>
    </div>

    <!-- Portofoongebruik -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Portofoongebruik - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het gebruiken van een portofoon buiten de in-game portofoons (zoals Discord of ander soortgelijke calls) is niet toegestaan voor in-game informatie.</p>
        </div>
    </div>
</div>
    <!-- tweede div voor 10 regels -->
<div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
<div>
    <!-- Powergaming -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Powergaming - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het volledig buitenspel zetten van je tegenstander is niet toegestaan. Voorbeeld: Tijdens een bankoverval claimen dat je bommen hebt geplaatst op elke deur en ze laat ontploffen als de agenten binnenkomen.</p>
        </div>
    </div>

    <!-- Combat Logging -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Combat Logging - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het uitloggen tijdens of vlak na een roleplay scenario of wanneer je bewusteloos bent is verboden.</p>
        </div>
    </div>

    <!-- Multikarakter -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Multikarakter - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het hebben van meerdere karakters is toegestaan, maar je karakters mogen niks van elkaar weten. Ook is het niet toegestaan om zowel een politie- als een crimineel karakter te hebben.</p>
        </div>
    </div>

    <!-- Corruptie -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Corruptie - 3 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Corruptie binnen het politiekorps is ten strengste verboden. Voorbeeld: je vertelt aan derden dat er een signalering openstaat</p>
        </div>
    </div>

    <!-- Vrienden Gijzelen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Vrienden Gijzelen - 1 punt</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan om je vriend te gebruiken als gijzelaar voor een winkel-/bankoverval of een algemene gijzelingssituatie.</p>
        </div>
    </div>

    <!-- Stemherkenning -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Stemherkenning - 1 punt</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan iemand te herkennen aan zijn of haar stem wanneer die persoon een andere stem opzet.</p>
        </div>
    </div>

    <!-- Voicechanger -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Voicechanger - 1 punt</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het gebruik van een voicechanger is niet toegestaan (behalve voor DSI en Recherche).</p>
        </div>
    </div>

    <!-- Copbaiten -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Copbaiten - 1 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het uitdagen van politie zonder enige geldige reden is verboden. Voorbeeld: zomaar een achtervolging starten, zomaar aanrijden, driften, rondjes rijden, burnouts.</p>
        </div>
    </div>

    <!-- Ongepaste kleding -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Ongepaste kleding - 1 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan om kleding van hulpdiensten te dragen, of kleding dat niet naar toebehoren werkt.</p>
        </div>
    </div>

    <!-- Niet luisteren naar- of liegen tegen staff -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Niet luisteren naar- of liegen tegen staff - 0, 6 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Je dient ten alle tijden de instructies van het staffteam op te volgen. Indien je dit niet doet kan hier een sanctie aan vast hangen.</p>
        </div>
    </div>
    </div>
</div>
    <!-- derde div voor 10 regels -->
<div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
    <div>
    <!-- Event verstoren -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Event verstoren - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan om een event te verstoren op welke manier dan ook.</p>
        </div>
    </div>

    <!-- Money farming -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Money farming - 1 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan om alleen online te zijn om je salaris te innen, door bijvoorbeeld in dienst te staan zonder iets te doen.</p>
        </div>
    </div>

    <!-- Scammen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Scammen - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan burgers te scammen bij het kopen/verkopen van een vuurwapen(blueprint) of huis. Tasers en steekwapens zijn wel toegestaan.</p>
        </div>
    </div>

    <!-- Dood = dood -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Dood = dood - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan om jezelf te laten reviven wanneer je neergestoken / geschoten bent door een wapen.</p>
        </div>
    </div>

    <!-- Helicopter gebruik -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Helicopter gebruik - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het landen op een onrealistische manier is niet toegestaan. Landen mag alleen op helipads of op grote open plekken buiten de stad.</p>
        </div>
    </div>

    <!-- Wapen gebruik -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Wapen gebruik - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het stashen van een wapen tijdens of vlak na (10 min) een scenario is niet toegestaan.</p>
        </div>
    </div>

    <!-- Combat Storing -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Combat Storing - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is verboden om tijdens een rp scenario wat actief bezig is bijv. je auto weg te zetten in een garage of jezelf en/of het item waar het scenario mede om draait verstoppen in een locatie waar andere niet bij je kunnen.</p>
        </div>
    </div>

    <!-- Aansluiten scenarios -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Aansluiten scenarios - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Het is niet toegestaan mee te doen aan een scenario als je niet online was op het moment van de start. Was je als politie uit dienst maar wel online? Dan mag je wel meedoen.</p>
        </div>
    </div>

    <!-- Kidnappen / Overvallen / Boeien -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Kidnappen / Overvallen / Boeien - 3 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Mensen overvallen & boeien mag alleen met een taser, steek- of vuurwapen. Het kidnappen/ontvoeren van mensen mag alleen met een steek- of vuurwapen. Het ontvoeren of overvallen van ambulanciers IN DIENST mag niet. Het is op geen enkele manier toegestaan om een vuurwapen/ vuurwapen blueprint te stelen van burgers, stashen bij anderen is op eigen risico.</p>
        </div>
    </div>

    <!-- Agentovervallen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Agentovervallen - 2 punten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <p class="mb-4 text-black">Je dient minimaal 1 licht handvuurwapen te hebben om een agent te overvallen, meerdere agenten tegelijk overvallen is niet toegestaan. Ook dient er altijd face to face onderhandeld te worden met de politie (niet via de telefoon), HIERNA mogen pas spullen afgepakt worden van een agent. De onderhandelaar van de Politie mag niet vermoord worden. Het is niet toegestaan speciale eenheden met zware wapens te overvallen van de politie. (DSI, BE, KMar).</p>
        </div>
    </div>
    </div>
    </div>
    <!-- vierde div voor Instant Permanente bans -->
    <div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
        <!-- 3rd party programma -->
        <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
            <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
                <h3 class="text-xl font-semibold">3rd party programma's</h3>
            </div>
            <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
                <p class="mb-4 text-black">Het is niet toegestaan andere applicaties / attributen te gebruiken voor GTA / FiveM.</p>
            </div>
        </div>

        <!-- Hacken / cheatengine -->
        <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
            <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
                <h3 class="text-xl font-semibold">Hacken / cheatengine</h3>
            </div>
            <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
                <p class="mb-4 text-black">Enige vorm van hacking, cheatengine, het inspawnen van wapens of geld is verboden.</p>
            </div>
        </div>

        <!-- Schelden met ernstige ziektes -->
        <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
            <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
                <h3 class="text-xl font-semibold">Schelden met ernstige ziektes</h3>
            </div>
            <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
                <p class="mb-4 text-black">Het schelden met ernstige ziektes is ten strenge verboden.</p>
            </div>
        </div>

        <!-- Zware Bug Abuse -->
        <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
            <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
                <h3 class="text-xl font-semibold">Zware Bug Abuse</h3>
            </div>
            <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
                <p class="mb-4 text-black">Het bewust misbruiken van een grote bug/exploit zonder dit te melden is in elk geval verboden.</p>
            </div>
        </div>

        <!-- Discrimineren, sexisme, racisme -->
        <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
            <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
                <h3 class="text-xl font-semibold">Discrimineren, sexisme, racisme</h3>
            </div>
            <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
                <p class="mb-4 text-black">Iedereen is gelijk, discriminatie op basis van huidskleur, geslacht, leeftijd, identiteit, religie, seksuele geaardheid of welke vorm dan ook is niet toegestaan.</p>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
</html>
