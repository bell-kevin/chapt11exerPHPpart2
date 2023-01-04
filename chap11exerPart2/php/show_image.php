<?php # Script 11.5 - show_image.php
// This page displays an image.

$name = FALSE; // Flag variable:

// Check for an image name in the URL:
if (isset($_GET['image'])) {

	// Make sure it has an image's extension:
	$ext = strtolower ( substr ($_GET['image'], -4));

	if (($ext == '.jpg') OR ($ext == 'jpeg') OR ($ext == '.png')) {

		// Full image path:
		$image = "D:/KEVINBELL/htdocs/chap11exerPart2/uploads/{$_GET['image']}";

		// Check that the image exists and is a file:
		$image_data = @file_get_contents($image);
        if ($image_data !== false) {
            // Set the name as this image:
            $name = $_GET['image'];
        }
    }
}

// If there was a problem, use the default image:
if (!$name) {
    $image = 'D:/KEVINBELL/htdocs/chap11exerPart2/images/unavailable.png';
    $name = 'unavailable.png';
}

// Get the image information:
$info = @getimagesize($image);
$fs = filesize($image);

// Send the content information:
header ("Content-Type: {$info['mime']}\n");
header ("Content-Disposition: inline; filename=\"$name\"\n");
header ("Content-Length: $fs\n");

// Send the file:
readfile($image);