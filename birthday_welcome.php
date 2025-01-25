<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-cover {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .bg-gradient {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        }
        .animate-bounce-slow {
            animation: bounce 3s infinite;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(-10%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }
            50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }
    </style>
</head>
<body class="bg-cover bg-gradient">
    <div class="flex flex-col items-center justify-center min-h-screen bg-black bg-opacity-50 px-4">
        <div class="text-center text-white p-8 rounded-lg shadow-2xl bg-opacity-75 bg-gray-800 transform transition-transform duration-500 hover:scale-105 mb-8">
            <div class="mb-6 animate-bounce-slow">
                <img src="path-to-your-image.png" alt="Birthday Icon" class="mx-auto w-24 h-24">
            </div>
            <h1 class="text-6xl font-bold mb-4 animate-pulse">Happy Birthday!</h1>
            <p class="text-3xl mb-6">Today is your special day. Enjoy every moment!</p>
            <form action="greeting.php" method="GET">
                <input type="text" name="name" class="border border-gray-300 p-3 rounded-lg w-full mb-4 focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter your name" required>
                <button type="submit" class="bg-blue-600 text-white p-3 rounded-lg w-full hover:bg-blue-700 transition duration-300">Proceed to Your Greeting</button>
            </form>
        </div>

        <!-- Additional Content to Make the Page Longer -->
        <div class="text-center text-white p-8 rounded-lg shadow-2xl bg-opacity-75 bg-gray-800 transform transition-transform duration-500 hover:scale-105 mb-8">
            <h2 class="text-4xl font-bold mb-4">Birthday Wishes</h2>
            <p class="text-xl mb-6">Here are some heartfelt birthday wishes from your friends and family:</p>
            <ul class="text-left max-w-2xl mx-auto">
                <li class="mb-4">"Wishing you all the happiness in the world on your special day!" - John</li>
                <li class="mb-4">"May your birthday be filled with joy and laughter. Happy Birthday!" - Sarah</li>
                <li class="mb-4">"Sending you lots of love and warm wishes on your birthday!" - Emily</li>
                <li class="mb-4">"Have an amazing birthday and a fantastic year ahead!" - Michael</li>
            </ul>
        </div>

        <div class="text-center text-white p-8 rounded-lg shadow-2xl bg-opacity-75 bg-gray-800 transform transition-transform duration-500 hover:scale-105 mb-8">
            <h2 class="text-4xl font-bold mb-4">Birthday Stories</h2>
            <p class="text-xl mb-6">Here's a short story to celebrate your birthday:</p>
            <p class="text-left max-w-2xl mx-auto">Once upon a time, in a land far away, there was a small village where everyone celebrated birthdays with great joy and excitement. On each birthday, the village would gather to sing, dance, and share stories. It was a day filled with love and laughter, and the birthday person would be showered with gifts and well wishes. This tradition brought the village closer together and created memories that would last a lifetime. May your birthday be just as magical and memorable!</p>
        </div>

        <div class="text-center text-white p-8 rounded-lg shadow-2xl bg-opacity-75 bg-gray-800 transform transition-transform duration-500 hover:scale-105 mb-8">
            <h2 class="text-4xl font-bold mb-4">Birthday Activities</h2>
            <p class="text-xl mb-6">Here are some fun activities to make your birthday even more special:</p>
            <ul class="text-left max-w-2xl mx-auto">
                <li class="mb-4">- Have a picnic in the park with your favorite foods.</li>
                <li class="mb-4">- Host a movie marathon with your best friends.</li>
                <li class="mb-4">- Take a day trip to a nearby city or attraction.</li>
                <li class="mb-4">- Enjoy a relaxing spa day at home or at a local spa.</li>
            </ul>
        </div>
    </div>
</body>
</html>