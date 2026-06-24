<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=utf-8');

$rss_url = 'https://thepiratebay.party/rss/new/301';

function h($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

echo '<h1>cURL RSS Test</h1>';
echo '<p><strong>Testing URL:</strong> ' . h($rss_url) . '</p>';

if (!function_exists('curl_init')) {
    die('<p style="color:red;"><strong>cURL is not available.</strong></p>');
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $rss_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0 Safari/537.36');

$response = curl_exec($ch);
$curlError = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
$finalUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
curl_close($ch);

echo '<hr>';
echo '<h2>Request Info</h2>';
echo '<p><strong>HTTP code:</strong> ' . h($httpCode) . '</p>';
echo '<p><strong>Content-Type:</strong> ' . h($contentType) . '</p>';
echo '<p><strong>Final URL:</strong> ' . h($finalUrl) . '</p>';

if ($curlError) {
    echo '<p style="color:red;"><strong>cURL error:</strong> ' . h($curlError) . '</p>';
}

if ($response === false || trim($response) === '') {
    echo '<p style="color:red;"><strong>No response body returned.</strong></p>';
    exit;
}

$rawHeaders = substr($response, 0, $headerSize);
$body = substr($response, $headerSize);

echo '<hr>';
echo '<h2>Raw Headers</h2>';
echo '<pre style="white-space: pre-wrap; max-height: 300px; overflow:auto; border:1px solid #ccc; padding:10px;">';
echo h($rawHeaders);
echo '</pre>';

echo '<hr>';
echo '<h2>Response Body Preview</h2>';
echo '<pre style="white-space: pre-wrap; max-height: 400px; overflow:auto; border:1px solid #ccc; padding:10px;">';
echo h(substr($body, 0, 4000));
echo '</pre>';

echo '<hr>';
echo '<h2>Quick XML Check</h2>';

libxml_use_internal_errors(true);
$doc = new DOMDocument();
$loaded = $doc->loadXML($body);

if ($loaded) {
    $items = $doc->getElementsByTagName('item');
    echo '<p style="color:green;"><strong>XML parsed successfully.</strong></p>';
    echo '<p><strong>Number of &lt;item&gt; nodes:</strong> ' . $items->length . '</p>';

    echo '<ol>';
    $count = 0;
    foreach ($items as $item) {
        $titleNode = $item->getElementsByTagName('title')->item(0);
        $title = $titleNode ? trim($titleNode->nodeValue) : '';
        if ($title !== '') {
            echo '<li>' . h($title) . '</li>';
            $count++;
        }
        if ($count >= 10) {
            break;
        }
    }
    echo '</ol>';
} else {
    echo '<p style="color:red;"><strong>Response is NOT valid XML.</strong></p>';

    $errors = libxml_get_errors();
    if (!empty($errors)) {
        echo '<pre style="white-space: pre-wrap; border:1px solid #ccc; padding:10px;">';
        foreach ($errors as $error) {
            echo h(trim($error->message)) . "\n";
        }
        echo '</pre>';
    }
    libxml_clear_errors();
}
?>