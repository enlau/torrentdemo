<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=utf-8');

/*
|--------------------------------------------------------------------------
| RSS URL to test
|--------------------------------------------------------------------------
| You can edit this if needed.
*/
$rss_url = 'https://www.limetorrents.to/rss/2/';

/*
|--------------------------------------------------------------------------
| Helper: pretty output
|--------------------------------------------------------------------------
*/
function h($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function print_section($title)
{
    echo '<hr>';
    echo '<h2>' . h($title) . '</h2>';
}

echo '<h1>RSS Test</h1>';
echo '<p><strong>Testing URL:</strong> ' . h($rss_url) . '</p>';

/*
|--------------------------------------------------------------------------
| Environment info
|--------------------------------------------------------------------------
*/
print_section('Environment');

echo '<p><strong>PHP Version:</strong> ' . h(PHP_VERSION) . '</p>';
echo '<p><strong>allow_url_fopen:</strong> ' . (ini_get('allow_url_fopen') ? 'ON' : 'OFF') . '</p>';
echo '<p><strong>cURL available:</strong> ' . (function_exists('curl_init') ? 'YES' : 'NO') . '</p>';
echo '<p><strong>DOMDocument available:</strong> ' . (class_exists('DOMDocument') ? 'YES' : 'NO') . '</p>';

/*
|--------------------------------------------------------------------------
| Step 1: Try file_get_contents()
|--------------------------------------------------------------------------
*/
print_section('Step 1: file_get_contents()');

$rssContent = false;

if (ini_get('allow_url_fopen')) {
    $context = stream_context_create(array(
        'http' => array(
            'timeout' => 20,
            'user_agent' => 'Mozilla/5.0 RSS Test'
        ),
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false
        )
    ));

    $rssContent = @file_get_contents($rss_url, false, $context);

    if ($rssContent !== false && trim($rssContent) !== '') {
        echo '<p style="color:green;"><strong>SUCCESS:</strong> file_get_contents() fetched content.</p>';
        echo '<p><strong>Bytes received:</strong> ' . strlen($rssContent) . '</p>';
    } else {
        echo '<p style="color:red;"><strong>FAILED:</strong> file_get_contents() could not fetch the RSS feed.</p>';
    }
} else {
    echo '<p style="color:orange;"><strong>SKIPPED:</strong> allow_url_fopen is OFF.</p>';
}

/*
|--------------------------------------------------------------------------
| Step 2: If file_get_contents failed, try cURL
|--------------------------------------------------------------------------
*/
print_section('Step 2: cURL');

if (($rssContent === false || trim($rssContent) === '') && function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $rss_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 RSS Test');

    $curlContent = curl_exec($ch);
    $curlError = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo '<p><strong>HTTP code:</strong> ' . h($httpCode) . '</p>';

    if ($curlContent !== false && trim($curlContent) !== '') {
        $rssContent = $curlContent;
        echo '<p style="color:green;"><strong>SUCCESS:</strong> cURL fetched content.</p>';
        echo '<p><strong>Bytes received:</strong> ' . strlen($rssContent) . '</p>';
    } else {
        echo '<p style="color:red;"><strong>FAILED:</strong> cURL could not fetch the RSS feed.</p>';
        if ($curlError) {
            echo '<p><strong>cURL error:</strong> ' . h($curlError) . '</p>';
        }
    }
} elseif (!function_exists('curl_init')) {
    echo '<p style="color:orange;"><strong>SKIPPED:</strong> cURL is not available.</p>';
} else {
    echo '<p style="color:green;"><strong>Not needed:</strong> RSS already fetched successfully before cURL test.</p>';
}

/*
|--------------------------------------------------------------------------
| Step 3: Show a preview of raw content
|--------------------------------------------------------------------------
*/
print_section('Step 3: Raw content preview');

if ($rssContent !== false && trim($rssContent) !== '') {
    echo '<p style="color:green;"><strong>RSS content exists.</strong></p>';
    echo '<pre style="white-space: pre-wrap; max-height: 300px; overflow:auto; border:1px solid #ccc; padding:10px;">'
        . h(substr($rssContent, 0, 3000)) .
        '</pre>';
} else {
    echo '<p style="color:red;"><strong>No content available to preview.</strong></p>';
}

/*
|--------------------------------------------------------------------------
| Step 4: Parse XML with DOMDocument
|--------------------------------------------------------------------------
*/
print_section('Step 4: XML parsing');

$rssArray = array();

if ($rssContent !== false && trim($rssContent) !== '' && class_exists('DOMDocument')) {
    libxml_use_internal_errors(true);

    $doc = new DOMDocument();
    $loaded = $doc->loadXML($rssContent);

    if ($loaded) {
        echo '<p style="color:green;"><strong>SUCCESS:</strong> XML loaded correctly.</p>';

        $items = $doc->getElementsByTagName('item');
        echo '<p><strong>Number of &lt;item&gt; nodes found:</strong> ' . $items->length . '</p>';

        foreach ($items as $node) {
            $titleNode = $node->getElementsByTagName('title')->item(0);
            $title = $titleNode ? trim($titleNode->nodeValue) : '';

            if ($title !== '') {
                $rssArray[] = array('title' => $title);
            }
        }

        echo '<p><strong>Number of item titles extracted:</strong> ' . count($rssArray) . '</p>';
    } else {
        echo '<p style="color:red;"><strong>FAILED:</strong> XML could not be parsed.</p>';

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
} elseif (!class_exists('DOMDocument')) {
    echo '<p style="color:red;"><strong>FAILED:</strong> DOMDocument extension is not available.</p>';
} else {
    echo '<p style="color:red;"><strong>FAILED:</strong> No RSS content to parse.</p>';
}

/*
|--------------------------------------------------------------------------
| Step 5: Show extracted titles
|--------------------------------------------------------------------------
*/
print_section('Step 5: Extracted titles');

if (!empty($rssArray)) {
    echo '<ol>';
    foreach ($rssArray as $i => $item) {
        echo '<li>' . h($item['title']) . '</li>';
        if ($i >= 24) {
            break;
        }
    }
    echo '</ol>';

    echo '<p style="color:green;"><strong>GOOD NEWS:</strong> Your server can fetch and parse the RSS titles.</p>';
} else {
    echo '<p style="color:red;"><strong>No titles extracted.</strong></p>';
    echo '<p>This usually means one of these:</p>';
    echo '<ul>';
    echo '<li>The RSS feed could not be fetched</li>';
    echo '<li>The URL returned HTML or a block page instead of XML</li>';
    echo '<li>The XML structure is different than expected</li>';
    echo '<li>Your hosting/server blocks outbound requests</li>';
    echo '</ul>';
}

/*
|--------------------------------------------------------------------------
| Step 6: Simulate your old script variables
|--------------------------------------------------------------------------
*/
print_section('Step 6: Simulated Smarty values');

for ($i = 0; $i < 10; $i++) {
    $title = $rssArray[$i]['title'] ?? '';
    $linkSlug = str_replace(' ', '-', $title);

    echo '<p>';
    echo '<strong>rsstorrent' . $i . ':</strong> ' . h($title) . '<br>';
    echo '<strong>rsstorrentl' . $i . ':</strong> ' . h($linkSlug);
    echo '</p>';
}

echo '<hr>';
echo '<p><strong>Done.</strong></p>';
?>