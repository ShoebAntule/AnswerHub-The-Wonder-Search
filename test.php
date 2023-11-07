<html>
    <head>
        <title>Test</title>
</head>
<body>

<?php

require_once 'simple_html_dom.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/search?q=php+tutorial&gl=us&hl=en');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.4951.54 Safari/537.36');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$html = curl_exec($ch);
$dom = new simple_html_dom();
$dom->load($html);
$results = $dom->find("div.g");
$c = 0;
foreach ($results as $result) {
    // Extract the title and link of the result
    $title = $result->find("h3", 0)->plaintext;
    $link = $result->find(".yuRUbf  a", 0)->href;
    $snippet = $result->find(".VwiC3b", 0)->plaintext;

    echo "Title: " . $title . "<br>";
    echo "Link: " . $link . "<br>";
    echo "Snippet: " . $snippet . "<br>";
    echo "Position: " . ($c+1) . "<br>";
    echo "<br>";
    $c++;
}

?>

</body>
</html>
