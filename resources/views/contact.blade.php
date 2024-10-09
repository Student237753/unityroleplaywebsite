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
            background: linear-gradient(334deg, #6b97f7, #7525e2, #f7137e);
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

<main class="flex-grow">
    <div class="max-w-2xl mx-auto p-6 mt-10 shadow-md rounded-lg content-container">
        <h1 class="text-3xl font-bold mb-4 text-black">Contact - Unity Roleplay</h1>
        <p class="mb-6 font-bold text-black">Neem contact op via onze support Discord voor snelle afhandeling.</p>

        <h2 class="text-xl font-semibold mt-4 text-black">Volg ons op Sociale Media</h2>
        <div class="space-y-2 mt-4">
            <a href="https://discord.gg/RAAVsTpzKg" class="bg-blue-600 text-white font-bold rounded-lg py-2 hover:bg-blue-700 transition duration-300 flex items-center justify-center">Discord Main Server</a>
            <a href="mailto:unityroleplay@gmail.com" class="flex items-center justify-center font-bold bg-gray-600 text-white rounded-lg px-4 py-2 transition duration-300 hover:bg-gray-700">Email</a>
            <a href="https://www.tiktok.com/@uniityroleplay?lang=en" class="bg-black text-white font-bold rounded-lg py-2 hover:bg-gray-800 transition duration-300 flex items-center justify-center">TikTok</a>
            <a href="https://www.youtube.com/@uniityroleplay" class="bg-red-600 text-white font-bold rounded-lg py-2 hover:bg-red-700 transition duration-300 flex items-center justify-center">YouTube</a>
        </div>
    </div>
</main>

@include('layouts.footer')

</body>
</html>
