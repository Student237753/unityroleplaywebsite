<!-- Navigation Bar -->
<nav class="shadow-md p-2 mx-4 mt-4 rounded-xl">
    <div class="mx-auto px-4 lg:px-16 py-3"> <!-- Adjust padding for different screen sizes -->
        <div class="flex items-center justify-between flex-wrap"> <!-- Added flex-wrap for small screens -->
            <!-- Logo and Name (Left-Aligned) -->
            <div class="flex items-center logo-container">
                <a href="{{ route('index') }}"> <!-- Logo linked to homepage -->
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="logo h-12 md:h-16 lg:h-20 mr-3"> <!-- Responsive logo size -->
                </a>
                <h1 class="text-3d">Unity Roleplay</h1>
            </div>

            <!-- Navigation Links (Right-Aligned) -->
            <div class="flex flex-wrap space-x-4 mt-3 md:mt-0"> <!-- Added flex-wrap and margin for small screens -->
                <a href="{{ route('index') }}" class="header-button">Home</a>
                <a href="{{ route('regels') }}" class="header-button">Server Regels</a>
                <a href="{{ route('contact') }}" class="header-button">Contact</a>
                <a href="#" class="header-button">Doneren</a>
                <a href="https://discord.gg/RAAVsTpzKg" class="header-button">Join Discord!</a>
            </div>
        </div>
    </div>
</nav>

<style>
    .text-3d {
        position: relative;
        color: white;
        font-size: 1.5rem; /* Adjust size for responsiveness */
        font-weight: bold;
        text-shadow:
            2px 2px 0 #42326d,
            4px 4px 0 #42326d;
        transition: font-size 0.2s ease; /* Smooth resizing */
    }

    /* Adjust title size for medium and large screens */
    @media (min-width: 768px) {
        .text-3d {
            font-size: 2.5rem;
        }
    }

    @media (min-width: 1024px) {
        .text-3d {
            font-size: 3rem;
        }
    }

    .header-button {
        padding: 12px 18px;
        border-radius: 50px;
        cursor: pointer;
        font-weight: bold;
        border: 2px solid transparent;
        background-color: transparent;
        color: white;
        box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-size: 14px; /* Adjust for smaller devices */
        transition: all 0.5s ease;
        text-shadow:
            1px 1px 0 #42326d,
            2px 2px 0 #42326d;
    }

    /* Adjust button size for larger screens */
    @media (min-width: 768px) {
        .header-button {
            font-size: 15px;
        }
    }

    .header-button:hover {
        letter-spacing: 3px;
        background-color: rgba(117, 37, 226, 0.7);
        color: white;
        box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
    }

    .header-button:active {
        letter-spacing: 3px;
        background-color: rgba(117, 37, 226, 0.9);
        box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
        transform: translateY(10px);
        transition: 100ms;
    }

    /* Hide logo when screen width is 930px or less */
    @media (max-width: 930px) {
        .logo {
            display: none;
        }
    }

    /* Show logo again when screen width is 1024px or more */
    @media (min-width: 1024px) {
        .logo {
            display: block;
        }
    }
</style>
