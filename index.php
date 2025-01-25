<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Greeting</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient">
    <div class="bg-white p-8 rounded-lg shadow-2xl transform transition-transform duration-500 hover:scale-105">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Maasukkan Tanggal Ulang Tahun:</h1>
        <form action="birthday_welcome.php" method="GET">
            <input type="text" name="name" class="border border-gray-300 p-3 rounded-lg w-full mb-4 focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter date here..." required>
            <button type="submit" class="bg-purple-600 text-white p-3 rounded-lg w-full hover:bg-purple-700 transition duration-300">Submit</button>
        </form>
    </div>
</body>
</html>