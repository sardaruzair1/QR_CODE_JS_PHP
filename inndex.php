<?php
// YouTube video URL
$video_url = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";

// QR code content
$qr_content = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";

// Generate the QR code image
$qr_code = imagecreate(200, 200);
$background_color = imagecolorallocate($qr_code, 255, 255, 255);
$qr_color = imagecolorallocate($qr_code, 0, 0, 0);
QRcode::png($qr_content, false, QR_ECLEVEL_L, 10);
imagepng($qr_code, "qrcode.png");

// Display the QR code image
echo "<img src='qrcode.png'>";

// Redirect to the YouTube video when the QR code is scanned
header("Location: $video_url");
exit;
?>