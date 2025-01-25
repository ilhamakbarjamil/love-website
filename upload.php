<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo'])) {
    $photo = $_FILES['photo'];
    $target_dir = "uploads/";
    
    // Generate unique filename to prevent overwrites
    $uniqueName = uniqid() . '_' . basename($photo["name"]);
    $target_file = $target_dir . $uniqueName;
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate image
    $check = getimagesize($photo["tmp_name"]);
    if($check === false) {
        $response = ["status" => "error", "message" => "File is not an image"];
        echo json_encode($response);
        exit;
    }

    // Check file size - 5MB limit
    if ($photo["size"] > 5000000) {
        $response = ["status" => "error", "message" => "File size exceeds 5MB limit"];
        echo json_encode($response);
        exit;
    }

    // Validate file format
    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowed_types)) {
        $response = ["status" => "error", "message" => "Only JPG, JPEG, PNG & GIF files allowed"];
        echo json_encode($response);
        exit;
    }

    // Create uploads directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Upload file and save to database
    if (move_uploaded_file($photo["tmp_name"], $target_file)) {
        $filename = $conn->real_escape_string($uniqueName);
        $sql = "INSERT INTO photos (filename) VALUES ('$filename')";
        
        if ($conn->query($sql)) {
            $name = htmlspecialchars($_POST['name']);
            header("Location: greeting.php?name=$name&uploaded=true");
            exit;
        } else {
            $response = ["status" => "error", "message" => "Database error: " . $conn->error];
            echo json_encode($response);
        }
    } else {
        $response = ["status" => "error", "message" => "Failed to upload file"];
        echo json_encode($response);
    }
}
?>
