<?php
include 'config.php';

$name = htmlspecialchars($_GET['name']);

// Get the latest uploaded photo
$photo_sql = "SELECT filename FROM photos ORDER BY uploaded_at DESC LIMIT 1";
$photo_result = $conn->query($photo_sql);
$photo = $photo_result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday, <?php echo $name; ?>!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-cover {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body class="bg-cover" style="background-image: url('your-background-image.jpg');">
    <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-50">
        <div class="text-center text-white p-8 rounded-lg shadow-2xl bg-opacity-75 bg-gray-800 transform transition-transform duration-500 hover:scale-105">
            <h1 class="text-5xl font-bold mb-4 animate-pulse">Happy Birthday, <?php echo $name; ?>!</h1>
            <p class="text-2xl mb-6">Wishing you a day filled with love and joy.</p>

            <!-- Display the uploaded photo if it exists -->
            <?php if ($photo): ?>
                <div class="mb-6">
                    <img src="uploads/<?php echo $photo['filename']; ?>" alt="Uploaded Photo" class="mx-auto rounded-lg shadow-xl border-4 border-white max-w-xs">
                </div>
            <?php endif; ?>

            <form action="upload.php" method="POST" enctype="multipart/form-data" class="mx-auto max-w-lg">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <div class="mb-4">
                    <label class="block text-left text-sm font-medium text-gray-300 mb-2">Upload a Photo</label>
                    <input type="file" name="photo" class="border border-gray-300 p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                </div>
                <button type="submit" class="bg-purple-600 text-white p-3 rounded-lg w-full hover:bg-purple-700 transition duration-300">Upload Photo</button>
            </form>

            <!-- Add Back button -->
            <div class="mt-6">
                <a href="birthday_welcome.php" class="bg-red-500 text-white p-3 rounded-lg w-full inline-block hover:bg-red-600 transition duration-300">Back</a>
            </div>
        </div>
    </div>

    <audio controls autoplay hidden>
        <source src="your-music-file.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</body>
</html>