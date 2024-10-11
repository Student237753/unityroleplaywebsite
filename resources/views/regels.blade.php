<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Regels - Unity Roleplay</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            background: rgba(164, 134, 206, 0.8); /* Darker purple for header */
        }

        .rule-header:hover {
            background: rgb(124, 47, 234); /* Fully darken on hover */
        }
    </style>
</head>
<body class="gradient-background text-gray-800">

@include('layouts.header')

<div class="container mx-auto p-6 bg-white mt-12 rounded-xl">
    <h1 class="text-4xl font-bold text-center mb-6 text-black">Server Regels - Unity Roleplay</h1>

    <!-- Strafbepaling -->
    <h2 class="text-2xl font-semibold mb-4 text-black">Strafbepaling</h2>
    <p class="mb-4 text-black">De straffen zijn onderverdeeld in acht categorieën:</p>
    <ul class="list-disc list-inside mb-4 text-black font-bold">
        <li>Categorie 1: een waarschuwing + 100 uur taakstraf (max 3 waarschuwingen in 1 maand, hierna volgt de automatisch oplegging cat. 2)</li>
        <li>Categorie 2: een ban van 1 dag</li>
        <li>Categorie 3: een ban van 2 dagen</li>
        <li>Categorie 4: een ban van 3 dagen</li>
        <li>Categorie 5: een ban van 1 week</li>
        <li>Categorie 6: een ban van 1 maand</li>
        <li>Categorie 7: permanente ban</li>
        <li>Categorie 8: account wipe</li>
    </ul>

    <!-- Artikel 1 - Algemene Roleplay Richtlijnen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 1 - Algemene Roleplay Richtlijnen</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Het is verboden om een roleplay van zeer slechte kwaliteit uit te spelen, of roleplay verstorend gedrag te vertonen.</li>
                <br>
                <li>Het is niet toegestaan om opzettelijk de roleplay zodanig te vormen dat er een oneerlijke of onrealistische draai aan het verhaal gegeven wordt, of de roleplay van de andere partij zelf invullen door een onrealistische dwang.</li>
                <br>
                <li>Het is te allen tijde verboden om je karakter te breken. Hiermee bedoelen we dat je een term gebruikt die gezien wordt als OOC (Out Of Character). Ook is het niet toegestaan om “/me” foutief te gebruiken of te gebruiken om toxic / ongepaste opmerkingen te plaatsen.
                    <ul class="list-disc ml-6">
                        <li>/me wat doen jullie</li>
                        <li>/me waarom rdm je</li>
                        <li>/me slechte roleplay</li>
                    </ul>
                </li>
                <br>
                <li>Het is verboden om door middel van de Safe Zone te ontkomen aan illegale activiteiten en/of roleplays.</li>
                <br>
                <li>Het is verboden om een individu schade aan te richten, te ontvoeren, uitbreken, overvallen, aanrijden of vermoorden in een Safe Zone, tenzij er daadwerkelijke roleplay (die aan te tonen is) aan gekoppeld zit.
                    <p>Bij overtreding van punten 1 t/m 5 zal dit resulteren in een <strong>straf volgens de 1e categorie</strong>.</p>
                </li>
                <br>
                <li>Indien het karakter overleden is, wordt er verwacht dat hij/zij de laatste roleplay vergeten is. Het karakter mag ook niet naar het gebied waar hij/zij overleden is terugkeren, dit is aangeduid met een rode cirkel op de kaart voor 30 minuten na het overlijden. Tevens mag het karakter zich niet opnieuw bemoeien met ditzelfde scenario totdat deze afgelopen is (New life rule).
                    <p>Bij overtreding zal dit resulteren in een <strong>straf volgens de 4e categorie</strong>.</p>
                </li>
                <br>
                <li>Het onnodig mishandelen, vermoorden (RDM), uitlokken en/of anderen lastig vallen zonder verdere intentie tot roleplay is niet toegestaan. Dit geldt ook voor dieren.</li>
                <br>
                <li>Hij/zij die geen waarde hecht aan het leven van het karakter dat hij/zij speelt (No Value of Life), zal bestraft worden. Wegrijden met een voertuig waarbij je trager als 20 km/h rijdt valt hier ook onder.
                    <p>Bij overtreding van punt 7 en 8 zal dit resulteren in een <strong>straf volgens de 2e categorie</strong>.</p>
                </li>
                <br>
                <li>Het is verboden om een erotische roleplay (ERP) uit te voeren of aan te gaan. Bij overtreding zal dit resulteren in een <strong>straf volgens de 7e categorie</strong>.</li>
                <br>
                <li>Het uitvoeren van een zelfmoord scenario is niet toegestaan, mits er goedkeuring voor is geweest vanuit staff. Bij geen goedkeuring zal dit resulteren tot een straf van categorie 8 of 200 maanden celstraf.</li>
                <ul class="list-disc ml-6">
                    <li>Tijdens een achtervolging je voertuig in de garage zetten om te voorkomen dat je je voertuig kwijt raakt.</li>
                    <li>Een agent ontvoeren om een signalering te verwijderen of om iets te bekijken in het politiesysteem (MEOS).</li>
                    <li>Medewerkers van de overheidsdiensten dwingen om een (bewusteloos) persoon te fouilleren, items (zoals wapens) af te nemen en af te geven aan jou of iemand anders.</li>
                </ul>
                <br>
                <li>Het zogeheten "counteren" tijdens een politie achtervolging, dus het bemoeien in een achtervolging van een ander met de politie, is niet toegestaan.
                    <ul class="list-disc ml-6">
                        <li>Indien de politie tussen een onderling conflict komt welke al bezig is, is deze regel niet van toepassing.</li>
                    </ul>
                    <p>Bij overtreding zal dit resulteren in een <strong>straf volgens de 2e categorie.</strong></p>
                </li>
            </ol>
        </div>
    </div>



    <!-- Artikel 2 - Cheats, Exploits & Meta-gaming -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 2 - Cheats, Exploits & Meta-gaming</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>
                    <strong>Cheats gebruiken:</strong>
                    Het gebruik van cheats of software van derden om voordeel te krijgen in het spel is verboden en wordt bestraft volgens de <strong>7e categorie</strong>. Dit geldt ook voor het gebruik van aangepaste Discord-clients zoals BetterDiscord.
                </li>
                <br>
                <li>
                    <strong>Exploits misbruiken:</strong>
                    Het misbruiken van bugs of exploits om voordelen te behalen of spelmechanismen te omzeilen leidt tot een directe straf volgens de <strong>7e categorie</strong>.
                </li>
                <br>
                <li>
                    <strong>Meta-gaming:</strong>
                    Informatie die buiten het spel (OOC) wordt verkregen, mag niet worden gebruikt door je personage (IC). Bij overtreding volgt een straf van de <strong>1e categorie</strong>, maar dit kan verhoogd worden afhankelijk van de ernst van de overtreding.
                </li>
                <br>
                <li>
                    <strong>Externe Discord-servers:</strong>
                    Het gebruik van externe Discord-servers voor roleplay-gerelateerde zaken zonder toestemming van de staff is verboden. Eigenaren van zulke servers waar meta-gaming plaatsvindt, worden gestraft volgens de <strong>7e categorie</strong>.
                </li>
                <br>
                <li>
                    <strong>Voicecall-regels:</strong>
                    Als je in een voicecall zit met anderen die in het spel zitten, moet je gedeafened en gemute zijn. Het is ook niet toegestaan screenshare te starten in een voicecall terwijl je in game zit. Overtreding van deze regel valt onder de <strong>1e categorie</strong>.
                </li>
            </ol>
        </div>
    </div>


    <!-- Artikel 3 - (Overheids) Kleding -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 3 - (Overheids) Kleding</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Kleding bij Personage:</strong> Bij het aanmaken van je personage moet je starterskleding vervangen door realistische outfits, waarbij de lichaamsdelen kloppen.</li>
                <br>
                <li><strong>Werkkleding:</strong> Kleding die door de baas is verstrekt, moet tijdens het uitvoeren van het beroep worden gedragen.</li>
                <br>
                <li><strong>Verbod op Ambtenarenkleding:</strong> Het dragen van overheidskleding door niet-ambtenaren is verboden.</li>
                <br>
                <li><strong>Officiële Kleding:</strong> Specifieke overheidskleding mag niet door anderen worden gedragen, tenzij verbonden aan sterke roleplay. Bij overtredingen kan een mondelinge waarschuwing volgen, wordt er niet geluisterd, dan komt er een straf volgens de <strong>1e categorie.</strong></li>
            </ol>
        </div>
    </div>

    <!-- Artikel 4 - Combatlogging -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 4 - Combatlogging</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Verbod op Combatlogging:</strong> Het is verboden om de game te verlaten tijdens roleplay zonder geldige reden. Terugkomen binnen 5 minuten is vereist, anders volgt een straf volgens de <strong>5e categorie.</strong></li>
                <br>
                <li><strong>Communicatie bij Verlaat:</strong> Als je de game tijdens roleplay wilt verlaten, dien je dit eerst aan de deelnemers te melden via "/me {uitleg}" of spraak.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 5 - Nederlandse Taal -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 5 - Nederlandse Taal</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Taalvereisten:</strong> Spelers moeten de Nederlandse of Engelse taal beheersen. Wie dat niet doet, is niet welkom op de server.</li>
                <br>
                <li><strong>Verbod op Andere Talen:</strong> Andere talen mogen niet provocerend of beledigend worden gebruikt in Roleplay.</li>
                <br>
                <li><strong>Taal in Gesprekken:</strong> Tijdens gesprekken met staff of overheidsinstanties moet er altijd Nederlands worden gesproken, tenzij een tolk aanwezig is die namens de speler kan spreken.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 6 - Report gebruik -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 6 - Report gebruik</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Gebruik van “/report”</strong>: Spelers moeten “/report” gebruiken om regelovertrredingen te melden zonder dat de overtreder dit weet, om de roleplay niet te beïnvloeden.</li>
                <br>
                <li><strong>Verbod op Spam en Discussies</strong>: Het spammen van reports en het onnodig aanmaken van reports is verboden. Bij overtreding volgt een straf volgens de <strong> 1e categorie.</strong></li>
            </ol>
        </div>
    </div>

    <!-- Artikel 7 - Alt Characters -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 7 - Alt Characters</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Verbod op Ongeoorloofde Alt Characters</strong>: Het is verboden om alt characters te maken om startbedragen over te schrijven of meer dan 3 alt accounts te hebben.</li>
                <br>
                <li><strong>Geen Criminele Activiteiten</strong>: Het is niet toegestaan om een alt character te gebruiken voor criminele activiteiten, vooral als een ander personage bij de overheid werkt. Dit kan leiden tot een straf volgens de <strong>7e categorie.</strong></li>
                <br>
                <li><strong>Verbod op Multiboxen</strong>: Hoewel alt characters zijn toegestaan, is multiboxen en het maken van alt accounts verboden, wat kan leiden tot een permanente ban van alle accounts.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 8 - Gebruik van Voertuigen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 8 - Gebruik van Voertuigen</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Verbod op Overheidsvoertuigen:</strong> Burgers mogen geen overheidsvoertuigen besturen, tenzij dit in de roleplay gerechtvaardigd is of goedgekeurd door een stafflid.</li>
                <br>
                <li><strong>Verbod op Illegale Activiteiten:</strong> Het gebruik van baanvoertuigen voor illegale activiteiten is niet toegestaan zonder goedkeuring van een stafflid.</li>
                <br>
                <li><strong>Toegang tot Gebouwen:</strong> Voertuigen mogen niet worden gebruikt om gebouwen binnen te gaan die daar niet voor bedoeld zijn.</li>
                <br>
                <li><strong>Gebruik van Voertuigen als Wapen (VDM):</strong> Het gebruik van voertuigen als wapens is verboden; overtreding leidt tot een straf van de <strong>2e categorie</strong>.</li>
                <br>
                <li><strong>Realistisch Rijden:</strong> Pit-manoeuvres moeten realistisch zijn, met een snelheid van maximaal 125 km/h. Overtredingen van lid 1 t/m 3 resulteren in een straf van de <strong>1e categorie</strong>.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 9 - Belediging -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 9 - Belediging</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Beledigingen:</strong> Het gebruik van beledigende taal, zoals schelden met ziektes of racistische opmerkingen, leidt tot een ban van de <strong>7e categorie</strong>.</li>
                <br>
                <li><strong>Toxic Gedrag:</strong> Toxic, uitlokkend, of haatzaaiend gedrag op erkende platforms van Unity Roleplay is verboden.</li>
                <br>
                <li><strong>Uitzonderingen:</strong> Schelden met hedendaagse ziektes wordt bij de eerste overtreding bestraft met een twee weken ban, bij de tweede met drie maanden, en de derde met een permanente ban.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 10 - Overvallen & Oplichten -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 10 - Overvallen & Oplichten</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Verbod op Overvallen:</strong> Overvallen of oplichten van mensen is verboden, behalve als ze criminele activiteiten uitvoeren/uitstralen dat valt onder [Masker dragen, kogelwerend vest, wapenholster, het bevinden op een drugs locatie of een andere illegale locatie en het praten over illegale activiteiten].</li>
                <br>
                <li><strong>Uitzonderingen:</strong> Alle soorten wapens mogen altijd overvallen worden.</li>
                <br>
                <li><strong>Verboden Situaties:</strong> Overvallen zijn verboden in bepaalde situaties, zoals bankovervallen, stelen van overheidsvoertuigen, en acties in safe zones.</li>
                <br>
                <li><strong>Illegale Deals:</strong> Voertuigen mogen niet worden gebruikt voor illegale deals en moeten met legaal geld worden gekocht.</li>
                <br>
                <li><strong>Verantwoordelijkheid van de Koper:</strong> Kopers moeten controleren of voertuigen de juiste aanpassingen hebben bij overdracht.</li>
                <br>
                <li><strong>Counteren van Overvallen:</strong> Het counteren van een overval is niet toegestaan zodra de politie ter plaatse is.</li>
                <br>
                <li><strong>Verboden Acties in Appartementen:</strong> Oplichten, verkopen van wapens of drugs, en andere gewelddadige handelingen zijn verboden in appartementen.</li>
                <br>
                <li><strong>Geen Doden na Overval:</strong> Na een overval mag de overvallende niet worden gedood om de daad te verbergen. Overtreding leidt tot straffen voor RDM.</li>
            </ol>
        </div>
    </div>


    <!-- Artikel 11 - Gedrag van Ambtenaren -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 11 - Gedrag van Ambtenaren</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Ambtenarenfuncties:</strong> Spelers in functies zoals politie, Koninklijke marechaussee, justitie, ambulance, ANWB, taxi, en brandweer mogen geen illegale activiteiten uitvoeren.</li>
                <br>
                <li><strong>Verboden Handelingen:</strong> Het is verboden om door de politie in beslag genomen objecten of overheidsobjecten door te handelen, evenals informatie verkregen tijdens de dienst, zelfs na ontslag.</li>
                <br>
                <li><strong>Uitzondering:</strong> Politie- en marechaussee-leden met speciale vergunningen mogen hun wapens buiten dienst houden.</li>
                <br>
                <li><strong>Straffen:</strong> Overtredingen worden bestraft volgens de 6e categorie.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 12 - Gedrag tegenover Overheidsmedewerkers -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 12 - Gedrag tegenover Overheidsmedewerkers</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Realistische Meldingen:</strong> Meldingen aan overheidsinstanties moeten altijd realistisch en uitgebreid zijn. Valse meldingen zijn verboden.</li>
                <br>
                <li><strong>Leidende Rol:</strong> Roleplay met hulpdiensten zoals ANWB, Brandweer en Ambulance moet realistisch zijn en de medewerkers zijn leidend in hun roleplay.</li>
                <br>
                <li><strong>Verboden Intenties:</strong> Het is verboden om meldingen te doen met de intentie overheidsmedewerkers te ontvoeren of aan te vallen.</li>
                <br>
                <li><strong>Beschikbaarheid:</strong> Na ontvoering moeten er minstens vijf overheidsmedewerkers beschikbaar blijven. Voor ANWB en brandweer geldt een minimum van zeven medewerkers.</li>
                <br>
                <li><strong>Ontvoering voor Voertuigopslag:</strong> Het is toegestaan om een agent te ontvoeren voor het terughalen van voertuigen uit opslag, maar dit leidt tot verlies van juridische rechten.</li>
                <br>
                <li><strong>Ontvoering van Ambulanciers:</strong> Criminele organisaties mogen ambulanciers ontvoeren vanaf vier ambulanciers in dienst, mits de roleplay goed is.</li>
                <br>
                <li><strong>Straffen bij Slechte Roleplay:</strong> Slechte roleplay kan leiden tot straffen volgens de 5e categorie, en herhaling kan tot de 6e categorie of hoger leiden.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 13 - Roleplay & Ledenaantal Criminele Organisaties -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 13 - Roleplay & Ledenaantal Criminele Organisaties</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li><strong>Maximaal Ledenaantal:</strong> Criminele organisaties mogen maximaal 25 leden hebben, inclusief vrije keuze voor "hangaround"-leden.</li>
                <br>
                <li><strong>Samenwerking:</strong> Samenwerking tussen organisaties is toegestaan, maar volledige samenwerking of samenwerking tijdens witwassen is verboden.</li>
                <br>
                <li><strong>Samenwerkingslimieten:</strong> Bij samenwerking mogen maximaal twee gangs met 20 leden samenwerken. Bij politie-invallen mogen 25 personen samenwerken.</li>
                <br>
                <li><strong>Verplichte Melden:</strong> Samenwerkingen met andere officiële organisaties moeten worden gemeld in de daarvoor bestemde kanalen.</li>
                <br>
                <li><strong>Sancties bij Negatief Gedrag:</strong> Negatief gedrag van leden kan leiden tot straffen, en criminele organisaties kunnen worden opgeschort bij ernstige overtredingen.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 14 - Ontsnappen uit het cellencomplex -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 14 - Ontsnappen uit het cellencomplex</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Ontsnappen is toegestaan, mits er een geldig roleplay-scenario aan is verbonden. Dit wordt beoordeeld door een stafflid.</li>
                <li>Ontsnappen is verboden als afgesproken is om het scenario op een later tijdstip voort te zetten.</li>
                <li>Tussen 01:30 en 10:00 mag er niet uit het cellencomplex worden gebroken.</li>
                <li>Er moeten minimaal 10 politieagenten beschikbaar zijn, bij 6-10 agenten is ontsnappen verboden.</li>
                <li>Overtredingen worden gestraft volgens de <strong>1e categorie.</strong></li>
            </ol>
        </div>
    </div>

    <!-- Artikel 15 - Witwassen, Winkel- en bankovervallen & overige criminaliteit -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 15 - Witwassen, Winkel- en bankovervallen & overige criminaliteit</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Overvallen van witwassers is toegestaan als gezichtsbedekking of beschermende kleding wordt gedragen, of als het kenteken overeenkomt met een recent deepweb-bericht.</li>
                <li>Verdachte handelingen bij afleverpunten zijn ook een reden voor een overval.</li>
                <li>Witwassen mag alleen in voertuigen van het depot of gelijkende modellen.</li>
                <li>De overvaller moet bewijs kunnen overhandigen aan staffleden.</li>
                <li>Campen bij witwaslocaties en het depot is verboden.</li>
                <li>Gijzelaars mogen geen bekenden of vrienden zijn, maar moeten onbekenden zijn.</li>
                <li>Vermijd vuurgevechten en onderhandel eerst met de politie.</li>
                <li>Liquidaties moeten worden gemotiveerd en het slachtoffer moet de reden kennen voordat de liquidatie plaatsvindt.</li>
                <li>Campen op niet-actieve drugs locaties is niet toegestaan.</li>
                <li>Overtredingen worden bestraft volgens de <strong>1e categorie.</strong></li>
            </ol>
        </div>
    </div>

    <!-- Artikel 16 - Officiële gangregels -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 16 - Officiële gangregels</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Nepmeldingen in de omgeving van ganghuizen met de intentie om criminelen uit te lokken, zijn verboden.</li>
                <li>Het uitvoeren van andere illegale praktijken, zoals schieten, om rivaliserende groepen te benadelen, is verboden.</li>
                <li>Voertuiginbeslagname moet met goede roleplay gebeuren en niet met de intentie om geld te verdienen.</li>
                <li>Na twee weken zonder roleplay mag het voertuig weer gratis uit de garage worden gehaald.</li>
                <li>Het confisqueren van items is toegestaan, mits er roleplay aan is verbonden. Overheidsobjecten mogen echter niet worden ingenomen.</li>
                <li>Straffen worden door staff bepaald op basis van de ernst van de situatie.</li>
            </ol>
        </div>
    </div>

    <!<!-- Artikel 17 - Jobhoppen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 17 - Jobhoppen</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>(Ex-)leden van criminele organisaties en overheidsbanen moeten 72 uur wachten na ontslag voordat ze ergens anders aangenomen mogen worden.</li>
                <li>Leidinggevenden moeten een document bijhouden met in- en uitdiensttreding van medewerkers.</li>
                <li><strong>Straf Categorie:</strong> 1e categorie. Overtreders mogen 3 kalenderdagen hun beroep niet uitoefenen.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 18 - Stemherkenning -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 18 - Stemherkenning</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Het herkennen van een speler aan zijn/haar stem is toegestaan, tenzij je de speler niet kent.</li>
                <li>Stemherkenning is verboden als de speler duidelijk zijn/haar stem vervormt.</li>
                <li>Stemvervorming met externe software mag, maar het moet redelijk blijven.</li>
                <li><strong>Straf Categorie:</strong> 1e categorie.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 19 - Omgaan met F6 -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 19 - Omgaan met F6</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Het plaatsen van een geboeide persoon in een voertuig zonder roleplay-handelingen via F6 is verboden.</li>
                <li>Spelers moeten realistische stappen volgen, zoals het openen van deuren en het aangeven dat iemand in het voertuig wordt geplaatst.</li>
                <li>Het uit een voertuig trekken moet ook gepaard gaan met realistische handelingen zoals het inslaan van ramen en het openen van de deur.</li>
                <li><strong>Straf Categorie:</strong> 5e categorie. Leidinggevenden krijgen zwaardere straffen.</li>
            </ol>
        </div>
    </div>

    <!-- Artikel 20 - Loodsen -->
    <div x-data="{ open: false }" class="mb-4 rule-background p-4 rounded-md">
        <div @click="open = !open" class="cursor-pointer rule-header p-4 rounded-md text-white">
            <h3 class="text-xl font-semibold">Artikel 20 - Loodsen</h3>
        </div>
        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded-md">
            <ol class="list-decimal ml-6 text-black mb-4">
                <li>Misleiding of bedrog met betrekking tot loodsen is verboden.</li>
                <li>Het verhuren van sleutels en verhandelen van aandelen in loodsen is toegestaan, maar afspraken moeten schriftelijk worden vastgelegd.</li>
                <li>Bij geschillen beslist een staflid, en bewijsmateriaal moet worden overlegd door de benadeelde partij.</li>
                <li><strong>Straf Categorie:</strong> 3e categorie. Bij bedragen boven 2 miljoen: <strong>5e categorie.</strong></li>
            </ol>
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
</html>
