<?php

$sourceDir = __DIR__ . '/public/img/leistungen';
$maxWidth = 1920;
$maxHeight = 800;
$quality = 80; // WebP-Qualität: 0–100

$images = glob($sourceDir . '/*.{jpg,jpeg,png}', GLOB_BRACE);

foreach ($images as $imagePath) {
    $info = pathinfo($imagePath);
    $extension = strtolower($info['extension']);
    $basename = $info['filename'];
    $newFile = $sourceDir . '/' . $basename . '.webp';

    // Lade Bild
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            $srcImage = imagecreatefromjpeg($imagePath);
            break;
        case 'png':
            $srcImage = imagecreatefrompng($imagePath);
            break;
        default:
            echo "Übersprungen (nicht unterstütztes Format): $imagePath\n";
            continue 2;
    }

    if (!$srcImage) {
        echo "Fehler beim Laden: $imagePath\n";
        continue;
    }

    // Originalgröße
    $origWidth = imagesx($srcImage);
    $origHeight = imagesy($srcImage);

    // Neue Größe berechnen (Verhältnis beibehalten)
    $scale = min($maxWidth / $origWidth, $maxHeight / $origHeight, 1);
    $newWidth = (int)($origWidth * $scale);
    $newHeight = (int)($origHeight * $scale);

    // Bild skalieren, wenn nötig
    if ($scale < 1) {
        $resized = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($resized, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);
        imagedestroy($srcImage);
    } else {
        $resized = $srcImage;
    }

    // Als WebP speichern
    if (imagewebp($resized, $newFile, $quality)) {
        echo "✅ Konvertiert: {$info['basename']} → {$basename}.webp\n";
    } else {
        echo "❌ Fehler beim Speichern: {$basename}.webp\n";
    }

    imagedestroy($resized);
}
