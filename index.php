<?php
require_once 'config.php';

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
$current_domain = '';
if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_X_FORWARDED_HOST'];
} else if (isset($_SERVER['HTTP_REFERER'])) {
    $current_domain = $_SERVER['HTTP_REFERER'];
} else {
    $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
}
$response = makeGetRequest(API_BASE_URL . '/api/websites?domain='. $current_domain);
$responseData = json_decode($response['content']);

$page = isset($responseData->data->template) ? $responseData->data->template : '';
$validPages = [
    '1' => 'themes/theme1/index.php',
    "2" => 'themes/theme2/index.php',
    "3" => 'themes/theme3/index.php',
    "4" => 'themes/theme4/index.php',
    "5" => 'themes/theme5/index.php',
    "6" => 'themes/theme6/index.php',
    "7" => 'themes/theme7/index.php',
    "8" => 'themes/theme8/index.php',
    "9" => 'themes/theme9/index.php',
    "10" => 'themes/theme10/index.php',
    "11" => 'themes/theme11/index.php',
    "12" => 'themes/theme12/index.php',
    "13" => 'themes/theme13/index.php',
    "14" => 'themes/theme14/index.php',
    "15" => 'themes/theme15/index.php',
    "16" => 'themes/theme16/index.php',
    "17" => 'themes/theme17/index.php',
    "18" => 'themes/theme18/index.php'
];

if (array_key_exists($page, $validPages) && file_exists($validPages[$page])) {
    include $validPages[$page];
}
?>