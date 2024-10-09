<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij Unity Roleplay</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png">
    <style>
        /* Custom Gradient Animation for the entire page */
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

        /* Make header rounded */
        header {
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1); /* Slightly transparent header background */
        }

        /* Ensure footer sticks to the bottom */
        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1; /* Fills the remaining space */
            position: relative; /* Position for absolute overlay */
            overflow: hidden; /* Ensure no overflow */
        }

        /* Video banner styles */
        .video-banner {
            position: absolute; /* Absolute positioning */
            top: 0; /* Align to the top of the video container */
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the entire area */
            z-index: -1; /* Send the video behind content */
        }

        /* Overlay tint */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(117, 37, 226, 0.5); /* Purple tint overlay */
            z-index: 1; /* Bring overlay above video */
        }

        /* Content container to position content above the video */
        .content-container {
            position: relative; /* Keep content above the video */
            z-index: 2; /* Ensure content is on top */
            max-width: 90%; /* Responsive width */
            margin: 0 auto; /* Center the container */
        }

        /* Video container styles */
        .video-container {
            position: relative; /* To position overlay on top of the video */
            height: 500px; /* Increase height for the video container */
            margin-top: 20px; /* Space between header and video */
            margin-bottom: 40px; /* Space between video and main content */
            overflow: hidden;
        }

        /* Flex container for side-by-side layout */
        .flex-container {
            display: flex; /* Enable flexbox */
            gap: 20px; /* Space between the boxes */
        }

        .join-button {
            margin-top: 2%;
            padding: 17px 40px;
            border-radius: 50px;
            cursor: pointer;
            background-color: transparent;
            color: #a486ce; /* Set text color to purple */
            box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            border: 2px solid #a486ce; /* Set border width and color */
            transition: all 0.5s ease;
        }

        .join-button:hover {
            background-color: #a486ce;
            color: hsl(0, 0%, 100%); /* Change text color to white on hover */
        }

        .join-button:active {
            transform: translateY(10px);
            transition: 100ms;
        }
    </style>
</head>
<body class="gradient-background text-white flex flex-col min-h-screen">

<!-- Header  -->
@include('layouts.header')

<!-- Video Container -->
<div class="video-container">
    <video class="video-banner" autoplay loop muted>
        <source src="{{ asset('assets/video_banner.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div> <!-- Tint overlay -->
</div>

<!-- Main Content -->
<main class="flex items-center justify-center flex-grow">
    <div class="relative w-full h-full">
        <div class="content-container flex-container"> <!-- Flexbox wrapper -->
            <div class="bg-white shadow-md rounded-lg p-10 text-center text-black flex-1">
                    <h1 class="text-3xl font-bold mb-4 text-black">Welkom bij Unity Roleplay!</h1>
                    <p class="mb-6 text-black">We zijn blij je te verwelkomen in onze unieke stad, waar jouw creativiteit en avonturen centraal staan. Of je nu een gewone burger wilt zijn, een grote crimineel wilt worden, of een wetshandhaver die de orde handhaaft, de keuze is aan jou. Unity Roleplay biedt talloze mogelijkheden en spannende avonturen.</p>

                    <p class="mb-6 text-black">Bij Unity Roleplay ben je nooit alleen. Neem deel aan evenementen, werk samen aan uitdagende avonturen en maak nieuwe vrienden terwijl je de stad verkent.</p>

                    <p class="mb-6 text-black">Er is altijd iets te doen! Of je nu houdt van actie of strategische uitdagingen, spannende klussen wachten op je! Elke beslissing die je maakt kan leiden tot nieuwe verhalen en onvergetelijke momenten, van adembenemende achtervolgingen tot diepgaande interacties met andere burgers.</p>

                    <p class="mb-6 text-black">We zijn blij je hier te hebben en kunnen niet wachten om samen met jou een geweldige tijd te beleven! Stap in de wereld van Unity Roleplay en laat je avonturen beginnen!</p>
            </div>

            <!-- Instructies om mee te doen -->
            <div class="bg-white shadow-md rounded-lg p-10 text-center text-black flex-1">
                <h2 class="text-2xl font-bold mb-4">Hoe kan ik meedoen?</h2>
                <ol class="text-left mb-4">
                    <li>1. Zorg dat je <strong>GTA V</strong> op je computer geïnstalleerd hebt.</li>
                    <li>2. Ga naar <a href="https://fivem.net/" class="text-teal-600 hover:underline" target="_blank"><strong>fivem.net</strong></a> en download de cliëntversie.</li>
                    <li>3. Selecteer met de cliëntversie je GTA 5-folder.</li>
                    <li>4. Zodra je dit geïnstalleerd hebt, open je <strong>FiveM</strong> en zoek je op <strong>Unity Roleplay</strong>.</li>
                    <li>5. Voor dat je in de server kunt, moet je eerst burger zijn in onze <a href="https://discord.gg/RAAVsTpzKg" class="text-teal-600 hover:underline" target="_blank"><strong>Discord</strong></a>.</li>
                </ol>
                <p class="font-bold">Je kunt ook joinen door op de volgende knop te klikken:</p>
                <a href="fivem://connect/45.8.187.31:3389">
                    <button class="join-button">Join Unity Roleplay!</button>
                </a>
                <p class="mt-6 font-bold">Vergeet niet om ons te volgen op onze <a href="{{ url('/contact') }}" class="text-teal-600 hover:underline">sociale media</a>! sluit je aan bij onze <a href="https://discord.gg/RAAVsTpzKg" class="text-teal-600 hover:underline">Discord</a> voor meer updates en belangrijke mededelingen!</p>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
@include('layouts.footer')
</body>
</html>
