<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Birthday Celebration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        .font-great-vibes {
            font-family: 'Great Vibes', cursive;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .decorative-border {
            position: relative;
            padding: 2rem;
        }
        
        .decorative-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 20px;
            padding: 2px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">

    <!-- Header Section -->
    <header class="relative py-16 text-center overflow-hidden">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-10">
            <h1 class="font-great-vibes text-6xl text-white mb-4">Happy Birthday</h1>
            <p class="text-xl text-white/90 italic">A Celebration of Wonderful You</p>
            <div class="mt-8 floating">
                <svg class="w-24 h-24 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12 max-w-4xl">

        <!-- Greeting Card -->
        <div class="glass-card p-8 mb-12 transform transition duration-500 hover:scale-102">
            <div class="decorative-border">
                <h2 class="font-great-vibes text-4xl text-center text-purple-800 mb-8">Your Special Day</h2>
                <form class="space-y-6">
                    <div class="relative">
                        <input type="text" 
                               class="w-full px-4 py-3 rounded-lg bg-white/80 border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent" 
                               placeholder="Your Beautiful Name">
                        <svg class="absolute right-3 top-3 w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <button class="w-full bg-gradient-to-r from-purple-600 to-blue-500 text-white py-3 rounded-lg hover:from-purple-700 hover:to-blue-600 transition-all">
                        Begin Celebration
                    </button>
                </form>
            </div>
        </div>

        <!-- Wishes Section -->
        <div class="grid gap-8 md:grid-cols-2">
            <!-- Wishes Card -->
            <div class="glass-card p-6 transform transition duration-500 hover:scale-102">
                <h3 class="text-2xl font-semibold text-purple-800 mb-4">Heartfelt Wishes</h3>
                <div class="space-y-4 text-gray-700">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <p class="ml-3"><span class="font-medium">Sarah:</span> "May your day sparkle with joy!"</p>
                    </div>
                    <!-- More wishes... -->
                </div>
            </div>

            <!-- Activities Card -->
            <div class="glass-card p-6 transform transition duration-500 hover:scale-102">
                <h3 class="text-2xl font-semibold text-purple-800 mb-4">Celebration Ideas</h3>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span>Sunset Champagne Toast</span>
                    </li>
                    <!-- More activities... -->
                </ul>
            </div>
        </div>

        <!-- Photo Gallery -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="aspect-w-1 aspect-h-1">
                <img src="placeholder-1.jpg" class="w-full h-full object-cover rounded-xl shadow-lg">
            </div>
            <!-- More photos... -->
        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-16 py-8 text-center text-white/80">
        <p class="text-sm">Created with ♥ for Someone Special</p>
        <div class="mt-4 flex justify-center space-x-4">
            <svg class="w-6 h-6 hover:text-white transition" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
            </svg>
            <!-- More social icons... -->
        </div>
    </footer>

</body>
</html>